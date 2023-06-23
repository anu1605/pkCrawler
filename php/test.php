<?php

$data = file_get_contents("http://epaper.heraldgoa.in/articlepage.php?articleid=OHERALDO_GOA_20230622_2_4");
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_URL, "https://www.bhaskar.com/epaper");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
// $data = curl_exec($ch);
// curl_close($ch);

// $cityarray = array();
// $contentarray = explode('"engName":"', $data);
// print_r($contentarray);
// echo $contentarray[1];

// for ($i = 1; $i < count($contentarray); $i++) {
//     $cityname = explode('"', $contentarray[$i])[0];
//     $citycode = explode(',', explode('"edCode":', $contentarray[$i])[1])[0];

//     echo $cityname . "=>" . $citycode . PHP_EOL;
//     $cityarray[$cityname] = $citycode;
// }
// file_put_contents(dirname(__FILE__) . "/test.txt",  print_r($cityarray));

$cityarray = array("Ranchi", "Jamshedpur", "Dhanbad", "Bokaro", "Raipur", "Bhopal", "Indore", "Gwalior", "Bhind", "Bilaspur", "Raigarh", "Faridabad", "Surat City", "Patna", "Bhagalpur", "Muzaffarpur", "Aurangabad", "Amritsar", "Panipat", "Ludhiana", "Patiala", "Chandigarh", "Ambala", "Rohtak", "Jaipur", "Kota", "Jodhpur", "Udaipur", "Alwar", "Pali", "Chittorgarh", "Ajmer", "Jabalpur", "Koderma", "Bastar", "Ujjain", "Jalandhar");

$citycode = array("109", "195", "221", "248", "116", "120", "129", "135", "171", "172", "268", "356", "488", "384", "456", "458", "474", "58", "60", "63", "182", "193", "301", "303", "14", "16", "17", "18", "36", "40", "199", "255", "180", "112", "118", "164", "56");

$dateForLinks = date("Y-m-d", time());

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_URL, "https://www.ehitavada.com/index.php?edition=Mpage&date=2023-06-22&page=1");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
// $data = curl_exec($ch);
// curl_close($ch);
// $im = imagecreatefromstring($data);
file_put_contents(dirname(__FILE__) . "/test.txt", $data);
// imagepng($im, dirname(__FILE__) . "/image.png");
// coding: utf-8 
