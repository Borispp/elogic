<?php
function clear($data){
    $data = stripslashes($data);
    $data = strip_tags($data);
    $data = trim($data);
    $data = htmlspecialchars($data, ENT_QUOTES);
    return $data;
}

if (
	!empty($_POST['username']) &&
	!empty($_POST['userphone']) &&
	!empty($_POST['system_type'])
	) {

	$checkOffer = true;

	$system_type = clear($_POST['system_type']);
	$username = clear($_POST['username']);
	$userphone = clear($_POST['userphone']);

	$str =
		"<b>Заказ: </b>".$system_type.'<br/>'.
		"<b>Имя: </b>".$username.'<br/>'.
		"<b>Телефон: </b>".$userphone
	;
	$stradmin =
		$system_type.'-----'.$username.'-----'.$userphone;

	$form_email = 'office@ecologic-md.net';

	$mailheaders = "Content-type: text/html; charset=utf-8 \r\n";
	$mailheaders .= "From: ".$form_email;

	// mail("info@wmge.org", "wmge.org - заявка", $str,  $mailheaders);
	mail("borisss777@gmail.com", "Elogic.md - заявка", $str,  $mailheaders);

	$file = 'sends.txt';
	file_put_contents($file, $stradmin."=====".file_get_contents($file));
}
?>
