<pre>
<?
	$content = file_get_contents("sms_messages_24.07.2018.csv");

	//$reg = '/\[phone\]\s=>\s([\d\s\+\(\)]+)\n/i';
	echo $content;
	$reg = '/-\s([\d\s\(\)\-\w]+)\sfreevmaya/u';

	$list = [];
	preg_match_all($reg, $content, $list);

	print_r(json_encode(array_unique($list[1]), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_SLASHES));
?>
</pre>