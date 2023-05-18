<?php

// echo ile_put_contents(dirname(__FILE__, 1) . "/test.txt", file_get_contents("http://newspaper.pudhari.co.in/index.php"));

$file = fopen(dirname(__FILE__, 1) . "/hb.txt", 'w');
$text = "hello world";
fwrite($file, $text);
fclose($file);
echo fgets(fopen(dirname(__FILE__, 1) . "/hb.txt", 'r'));
