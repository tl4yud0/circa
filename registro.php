<?php


$subs_name = utf8_decode($_POST['name']);
$subs_email = utf8_decode($_POST['email']);
$subs_option = utf8_decode($_POST['option']);
$subs_phone = utf8_decode($_POST['phone']);

$texto = "*Name: ".$subs_name." *Email: ".$subs_email." *Option: ".$subs_option." *Phone: ".$subs_phone;

$file = fopen("miarchivo.txt", "a");
fwrite($file, $texto. PHP_EOL);
fclose($file);

$from = "test@circa.com";

$to = $subs_email;
$subject = "Saludos de Circa ";
$message = "Hola ".$subs_name." nos pondremos en contacto contigo para mas detalles :)";
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
echo "The email message was sent.";



?>