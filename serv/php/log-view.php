<html>
<head>
	<meta name="robots" content="nofollow" />
	<style type="text/css">
		table {
			font-size: 0.7em;
    		font-family: Arial,Tahoma;
		}
		table td {
			padding: 5px 20px;
		}
		table th {
			padding: 10px 20px;
			background-color: #EEE;
		}

		table .dev td {
			color: #cfd2ff;
		}
	</style>
</head>
<body>
<?
	$keys = ['title', 'phone', 'phone_sms', 'time', 'city', 'region', 'country', 'device_type', 'utm_source', 'utm_term', 'utm_content'];
	$keys_rus = ['Заголовок', 'Телефон', 'СМС', 'Время', 'Город', 'Регион', 'Страна', 'Устройство', 'Источник', 'Слова', 'Контент'];
	if ($list = json_decode('['.file_get_contents("lead-collect-json.log").']', true)) {
		foreach ($keys_rus as $key) $columns .= "<th>{$key}</th>";
		echo "<table><tr>{$columns}</tr>";
		foreach ($list as $item) {
			if ($item['phone'] == '+7 (922) 754 09 97') $class="dev";
			else $class="";

			$data = '<tr class="'.$class.'">';
			foreach ($keys as $key) $data .= "<td>{$item[$key]}</td>";
			$data .= '</tr>';
			echo $data;
		}

		echo '</table>';
	}
?>
</body>
</html>