<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, "http://epaper.samyukthakarnataka.com/articlepage.php?articleid=SMYK_BANG_20230525_01_8");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
$data = curl_exec($ch);
curl_close($ch);

file_put_contents(dirname(__FILE__) . "/test.txt", $data);
// foreach (explode("SMYK_", $data) as $value) {
//     echo explode("_", $value)[0] . " ";
// }
