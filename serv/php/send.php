<?php
require_once('lib/phpmailer.php');
$rules = [
	'filters'=>[
		['Челябинск', 'Екатеринбург', 'Пермь', 'Курган', 'Ханты-Мансийск', 'Тюмень', 'Казахстан', 'Башк', 'Уфа', 'Оренбург', 'Омск']
	],
	'list'=>[
		['name'=>'Вадим', 'phone'=>'+79227540997', 'email'=>'freevmaya@gmail.com', 'filter'=>false, 'dev'=>true],
		['name'=>'Юлия', 'phone'=>'+79123085170', 'email'=>'yulyaurallider@gmail.com', 'filter'=>[0, 'IN']],
		['name'=>'Александр', 'phone'=>'+79000950894', 'email'=>'u.lider74@mail.ru', 'filter'=>[0, 'OUT']],
		['name'=>'Общая Почта', 'phone'=>'+79090917790', 'email'=>'lider.ural174@yandex.ru', 'filter'=>false]
	]
];
/* DEV
$rules = [
	'filters'=>[
		['Челябинск', 'Екатеринбург', 'Пермь', 'Курган', 'Ханты-Мансийск', 'Тюмень', 'Казахстан', 'Башкир', 'Оренбург', 'Омск']
	],
	'list'=>[
		['name'=>'Вадим', 'phone'=>'+79227540997', 'email'=>'freevmaya@gmail.com', 'filter'=>[0, 'IN']],
	]
];
*/

$isdev = strpos(dirname(__FILE__), 'dev') !== false;
$post = json_decode(file_get_contents("php://input"), true);

//print_r($post);

if ($isdev) {
	echo json_encode($post);
	exit;
}

$post_map = array(
	'phone'  => 'Телефон',
	'region' => 'Регион',
	'brand'  => 'Брэнд',
	'flavour' => 'Вкус',
	'amount'  => 'Объем',
	'field' => 'Сфера деятельности',
	'info' => 'Комментарий к заказу',
	'geolocation' => 'geolocation'
);

//include 'serv/php/lib/post_prepare.php';
if (count($post) > 0) {
  $html = '<table><tbody>';
  foreach ($post as $key=>$val){ 
    if(!array_key_exists($key, $post_map)) continue;
    if(is_array($val)) {
    	$v = '';
    	foreach ($val as $k => $r) {
    		$v .= ' '.$k.' - '.$r;
    	}
    	$val = $v;
    }
    $html .='<tr><th>'.$post_map[$key].'</th><td>'.$val.'</td></tr>';
  }
  $html .= '</tbody></table>';
} 

$phone_sms = [];
$emails = [];
$geo = $post['geolocation'];

foreach ($rules['list'] as $item) {
	if (!$item['dev'] || $isdev) {
		if (@$item['filter']) {
			//print_r($rules['filters'][$item['filter'][0]]);
			$is_in = false;
			foreach ($rules['filters'][$item['filter'][0]] as $fitem) {
				if ((strpos($geo['city'], $fitem) !== false) ||
					(strpos($geo['region'], $fitem) !== false) ||
					(strpos($geo['country'], $fitem) !== false)) {
					$is_in = true;
					break;
				}
			}

			if (($is_in && ($item['filter'][1] == 'IN')) || 
				(!$is_in && ($item['filter'][1] == 'OUT'))) {
				$phone_sms[] = $item['phone'];
				$emails[] = $item['email'];
			}
		} else {
			$phone_sms[] = $item['phone'];
			$emails[] = $item['email'];
		}
	}
}


// SMS
	$sms = array(
		'enable' 	=> true,
		'login'		=> 'freevmaya',
		'pass'		=> 'vmayasmssend',
		//'to' 		=> $smsto,
		'to' 		=> implode(',', $phone_sms),
		'msg' 		=> 'УЛ: '.$post['title'].' - '.$post['phone'].' - '.$post['geolocation']['country'].' - '.$post['geolocation']['city'],
		'sender'	=> 'freevmaya'
	);

	$url = "https://smsc.ru/sys/send.php?login={$sms['login']}&psw={$sms['pass']}&phones={$sms['to']}&mes={$sms['msg']}&sender={$sms['sender']}&charset=utf-8";

	//include 'serv/php/lib/sms.php';
	if($sms['enable']) {
	    $curl = curl_init();
	    curl_setopt ($curl, CURLOPT_URL, $url);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	    $state = curl_exec ($curl);
	    curl_close ($curl);	  
	}

/*  // SMS через E-mail2sms
	$mail = new PHPMailer();
    //$mail->Sender = 'no-reply@'.$_SERVER['HTTP_HOST'];
    $mail->From = 'no-reply@'.$_SERVER['HTTP_HOST'];
    $mail->FromName =  'УЛ ';
   	$mail->AddAddress('freevmaya@gmail.com');
    $mail->Subject = 'УЛ : '.$post['title'];
    $mail->MsgHTML('УЛ: '.$post['title'].' - '.$post['phone'].' - '.$post['geolocation']['country'].' - '.$post['geolocation']['city']);
   
	if (!$mail->Send()) {
		$status = false;
		echo json_encode(array(
		  'status'=>'error'
		));
		exit;
	} 
*/

$status = true;

// E-MAIL
	$email = array(
		'enable' 	=> true,
		'from' 		=> 'УЛ ',
		'subject'	=> 'УЛ : '.$post['title'],
		'msg'		=> $html,
	);

	if($email['enable']) {

		// mail
		$mail = new PHPMailer();
	    //$mail->Sender = 'no-reply@'.$_SERVER['HTTP_HOST'];
	    $mail->From = 'no-reply@'.$_SERVER['HTTP_HOST'];
	    $mail->FromName =  $email['from'];
	    foreach ($emails as $adr) {
	    	$mail->AddAddress(trim($adr));
	    }
	    $mail->Subject = $email['subject'];
	    $mail->MsgHTML($email['msg']);
	   
		if (!$mail->Send()) {
			$status = false;
		} 
	}


	echo json_encode(array(
	  'sms_state'=>$state,
	  'email_status'=>$status,
//	  'html'=>$html,
	  'phone_sms'=>$phone_sms
	));
?>