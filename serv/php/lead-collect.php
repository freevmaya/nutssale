<?php
header('Content-Type: text/html; charset=utf-8');
function topUpArr(&$arr, $field) {
	foreach ($arr[$field] as $key=>$value) $arr[$key] = $value;
	unset($arr[$field]);
	return $arr;
}

function phoneClear($phone) {
    //проверяем на наличие чего-то явно не телефонного и пустой строки
    if (preg_match('/[^( +)\-\d]/', $phone) || !strlen(trim($phone)) || strlen(trim($phone)) <= 7) {
        return $phone;
    }

    //убираем пробелы и дефисы со скобками
    $phone = preg_replace("/ |-|[(]|[)]|\+/", "", $phone);

    //если номер городской, то добавляем префикс как город по умолчанию спб
    // if (strlen($trimmed) == 7) {
    //     $trimmed = '7812' . $trimmed;
    // }

    //берем 'основной' номер (7 цифр с конца)
    // preg_match('/.{7}$/', $trimmed, $main);
    // if (array_key_exists(0, $main)) {
    //     $main = $main[0];
    // } else {
    //     return $phone;
    // }


    if ($phone[0] == '9') {
    	$phone = '7' . $phone;
    }

    //получаем префиксы
    $prefix = substr($trimmed, 0, strpos($trimmed, $main));

    //выделяем среди префиксов код города
    preg_match('/\d{3}$/', $prefix, $cityCode);

    if (array_key_exists(0, $cityCode)) {
        $cityCode = $cityCode[0];
    } else {
        return $phone;
    }

    //если кроме кода города в префиксе что-то есть, то это код страны
    if (strlen($prefix) - strlen($cityCode)) {
        $countryCode = substr($prefix, 0, strpos($prefix, $cityCode));
        $countryCode = ($countryCode == 8) ? '+7' : $countryCode;
        if (preg_match('/^[+]/', $countryCode) && strlen($countryCode)) {
            $countryCode = preg_replace('/^[+]/', '', $countryCode);
        }
    } else {
        $countryCode = '7';
    }

    $cityCode = preg_replace('/[()]/', '', $cityCode);
    return $cityCode . $main;
}


function writeToLog($data, $title = '') {

	$data['time'] = date("Y.m.d G:i:s");
	if ($title) $data['debug'] = 1;

	topUpArr($data, 'geolocation');
	topUpArr($data, 'utm');

	$log = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_SLASHES);
/*
	$log = "\n------------------------\n";
	$log .= date("Y.m.d G:i:s") . "\n";
	$log .= (strlen($title) > 0 ? $title : 'DEBUG') . "\n";
	$log .= print_r($_POST, 1);
	$log .= "\n------------------------\n";
*/	
	$file_name = getcwd() . '/lead-collect-json.log';
	if (file_exists($file_name)) $log = ",\n".$log;
	file_put_contents($file_name, $log, FILE_APPEND);
	return true;
}

//Логируем все 
writeToLog($_POST, 'incoming');

if (isset($_GET['zd_echo'])) exit($_GET['zd_echo']); 

// //Номер телефона из задармы, аллоки, form
if ($_POST['caller_id']) {
	$phone = $_POST['caller_id'];
}  else {
	if ($_POST['ot_kogo']) {
		$phone = $_POST['ot_kogo'];
	} else {
		if ($_POST['phone']) {
			$phone = $_POST['phone'];
		}
	}
}

//Сid из аллоки, задармы или form 
if ($_POST['ga_client_id']) {
	$cid = $_POST['ga_client_id'];
} else {
	if ($_POST['cid']) {
		$cid = $_POST['cid'];
	}
}


//Ссылка на запись разговора из аллоки
$rec = $_POST['rec'];

//Тип формы
if ($_POST['caller_id']) {
	$ltype = 'Звонок по номеру на сайте z';
} else {
	if ($_POST['ot_kogo']) {
		$ltype = 'Звонок по номеру на сайте a';
	} else {
		if ($_POST['phone']) {
			$ltype = $_POST['title'];
		}
	}
}

$phone = phoneClear($phone);

$duration = $_POST['duration'];

//UTM Source
if ($_POST['utm']['utm_source']) {
	$utm_source = $_POST['utm']['utm_source'];
} else {
	$utm_source = $_POST['utm_source'];
}

//UTM Campaign
if ($_POST['utm']['utm_campaign']) {
	$utm_campaign = $_POST['utm']['utm_campaign'];
} else {
	$utm_campaign = $_POST['utm_campaign'];
}

//UTM Content
if ($_POST['utm']['utm_content']) {
	$utm_content = $_POST['utm']['utm_content'];
} else {
	$utm_content = $_POST['utm_content'];
}

if (!$utm_content) $utm_content = $_SERVER['HTTP_REFERER'];

//UTM Term
if ($_POST['utm']['utm_term']) {
	$utm_term = $_POST['utm']['utm_term'];
} else {
	$utm_term = $_POST['utm_term'];
}

$region = $_POST['region'];
$brand = $_POST['brand'];
$flavour = $_POST['flavour'];
$amount = $_POST['amount'];
$field = $_POST['field'];
$info = $_POST['info'];

if (!empty($phone)){
	if (empty($cid)) {
		if ($ltype == 'Звонок по номеру на сайте z') {
			$symbols = '0123456789';
			// Количество символов 
			$amount = 10; 
			$id = 9;
			// Определяем размер будущего числа
			$size = StrLen( $symbols )-1; 
			// Генерируем число
			while ( $amount-- )
			    $random_number .= $symbols[rand( 0, $size )];
			while ( $id-- )
				$random_id .= $symbols[rand( 0, $size)];

			$cid = $random_id . "." . $random_number;

			$data = [
						'v' => 1,
						'tid' => 'UA-108729321-1', //Номер счетчика Google Analytics
						'cid' => $cid,
						't' => 'event',
						'ec' => 'call',      //Категория цели
						'ea' => 'track'		//Действие цели
					];
			/* Пока не отслеживать в Google Analytics / vmaya
			if ($data) {
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, 'https://www.google-analytics.com/collect');
				curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-type: application/x-www-form-urlencoded'));
				curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
				curl_setopt($ch, CURLOPT_POST, TRUE);
				curl_setopt($ch, CURLOPT_POSTFIELDS, utf8_encode(http_build_query($data)));
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

				$result = curl_exec($ch);			
				curl_close($ch);
			}
			*/
		}	
	}
}

/* Пока не заносим в форму/vmaya
$url = "https://docs.google.com/forms/d/e/1FAIpQLSebME1X6R1Z_-VUwPpovMYDfPBc9mbItsETwU1hikrnVWkSFQ/formResponse";
$post_data = array (
"entry.198091192" => $cid,
"entry.158484071" => $phone,
"entry.XXXXXXXXXXX" => $rec,
"entry.599626551" => $ltype,

"entry.572587264" => $region,
"entry.1933936653" => $brand,
"entry.567577421" => $flavour,
"entry.1088687930" => $amount,
"entry.563045373" => $field,
"entry.1572904967" => $info,


"entry.483440667" => $utm_source,
"entry.260840494" => $utm_campaign,
"entry.1206564552" => $utm_content,
"entry.419355631" => $utm_term,

"draftResponse" => "[,,&quot;-2569359138693070991&quot;]",
"pageHistory" => "0",
"fbzx" => "-2569359138693070991"
);
 

// с помощью CURL заносим данные в таблицу google
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// указываем, что у нас POST запрос
curl_setopt($ch, CURLOPT_POST, 1);
// добавляем переменные
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
//заполняем таблицу google
$output = curl_exec($ch);
*/ 

	//Интеграция с AmoCRm
// $data_for_crm_send = array(
//     'cid' => $cid,
//     'ltype' => $ltype,
//     'phone' => $phone,
//     'rec' => $rec,
// );

// $url = 'XXXXXXXXX/amo/leadadd.php'; // 'XXXXX/bitrix/rest.php'
//     $result = file_get_contents($url, false, stream_context_create(array(
// 	'http' => array(
//     'method'  => 'POST',
//     'header'  => 'Content-type: application/x-www-form-urlencoded',
//     'content' => http_build_query($data_for_crm_send)
// 	    )
// )));



/* Пока не пишем в телеграмм/vmaya
    //Телеграм
	//file_put_contents('telega-log.txt', 'Data: ' . var_export($_POST, true)); 
	$token = '420435872:AAHP59iVRucajmk7u4y7Fc6bvEq5lfDrAC4'; //307160212:AAFCxM1zok-NUGdZoLqr-6ZEK9M4h2UN3pg меняй

	$chat_id_list = array( //ID тех, кому шлем сообщения. Последний элемент БЕЗ ЗАПЯТОЙ
		'94875250', //EVL
		'303294991', //Костя
		//'288912472', //Ксюша 
		//'703232'	//Макс Калинин
		'93666885', // Лапанова Анастасия
		'335868865' //Клиент
		//'219176792' // Даша

		);  //чтобы найти id нового пользователя надо перейти по ссылке https://api.telegram.org/bot1XXXXXXXXXX1/getUpdates дать пользователю ссылку на бота, он нажмет старт и в открывшемся окне ты увидишь его id или @userinfobot


	for ($i=0; $i < count($chat_id_list) ; $i++) { // $i < X, где X = количеству пользователей, которым будут отсылаться уведомления.

		$chat_id = $chat_id_list[$i];

	$url = 'https://api.telegram.org/bot' . $token . '/sendMessage?chat_id=' . $chat_id . "&text=" . $phone . ": " . $ltype . ": " . $utm_campaign . ':' . $utm_term . ":" . $duration; //Отсылаем телефон и тип формы
	//file_put_contents('telega-log-url.txt', 'Data: ' . var_export($url, true)); 
    $result = file_get_contents($url, false, stream_context_create(array(
    	'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query("1")
		    )
	)));
*/
?>
