<?php
session_start();
$file = "history.txt";
$myfile = fopen("history.txt","r");
echo nl2br(fread($myfile,filesize("history.txt")));
fclose($myfile);
?>
