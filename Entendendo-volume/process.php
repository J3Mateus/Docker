<?php

$message = $_POST["message"];

$files = scandir("./messages");
$nume_files = count($files) - 2; 
$filename = "msg-{$nume_files}.txt";
$file = fopen("./messages/{$filename}","x");

fwrite($file,$message);

fclose($file);

header("Location: index.php");