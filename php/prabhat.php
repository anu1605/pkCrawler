<?php

$url = "https://epaper.prabhatkhabar.com/3699317/RANCHI-City/RANCHI-City#page/1/1";

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_TIMEOUT, 300);
curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 8.0; Trident/4.0)');
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($curl);
echo $data;
$http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
