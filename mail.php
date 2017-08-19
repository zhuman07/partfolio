<?php
$post = (!empty($_POST)) ? true : false;
$c = true;
if($post) {
	$email = $_POST['email'];
	$name = $_POST['name'];
	$message = $_POST['message'];
	$sub = $_POST['sub'];
	$error = '';
	foreach ( $_POST as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
	}
}
	if(!$name) {$error .= 'Укажите свое имя. ';}
	if(!$email) {$error .= 'Укажите электронную почту. ';}
	if(!$sub) {$error .= 'Укажите тему обращения. ';}
	if(!$message || strlen($message) < 1) {$error .= 'Введите сообщение. ';}
	if(!$error) {
		$admin_email = "zhuman.beknazar@mail.ru";
		$message = "<table style='width: 100%;'>$message</table>";
		function adopt($text) {
				return '=?UTF-8?B?'.base64_encode($text).'?=';
			}
			$headers = "MIME-Version: 1.0" . PHP_EOL .
			"Content-Type: text/html; charset=utf-8" . PHP_EOL .
			'From: '.adopt($email).' <portfolio@zhuman.ru>' . PHP_EOL .
			'Reply-To: portfolio@zhuman.ru' . PHP_EOL;
			$send = mail($admin_email, adopt($sub), $message, $headers );
			if($send) {echo 'OK';}
			}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>
