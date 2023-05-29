<?php

// $data = file_get_contents("https://sandesh.com/epaper/ahmedabad");
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, "https://epaper.vaartha.com/Home/FullPage?eid=26&edate=29/05/2023&pgid=262010");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
$data = curl_exec($ch);
curl_close($ch);

$file = fopen(dirname(__FILE__) . "/test.txt", "w+");
fwrite($file, $data);
fclose($file);
