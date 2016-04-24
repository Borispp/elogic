<?php
function clear($data){
    $data = stripslashes($data);
    $data = strip_tags($data);
    $data = trim($data);
    $data = htmlspecialchars($data, ENT_QUOTES);
    return $data;
}

if (
	!empty($_POST['usermail'])
	) {

	$usermail = clear($_POST['usermail']);

	$file = 'emails.txt';
	file_put_contents($file, $usermail."=====".file_get_contents($file));
}
?>
