<?php

$message = $_POST["message"];

$files = scandir("./mensages");
$num_files = count($files) - 2; 
$fileName = "msg-{$num_files}.txt";

$file = fopen("./mensages/{$fileName}", "x");

fwrite($file, $message); 

fclose($file);

header("Location: index.php");
