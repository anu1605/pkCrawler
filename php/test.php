<?php


// $ch = curl_init();
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_URL, "https://www.prameyaepaper.com/edition/2143/BHUBANESWAR");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
// $data = curl_exec($ch);
// curl_close($ch);
// error_reporting(E_ERROR);
// $array = explode(",", file_get_contents(dirname(__FILE__) . '/prm.txt'));
// $newCodesArr = array();
// $filenamedate = date('Y-m-d', time());
// $linkdate =  date('Ymd', time());
// for ($i = 0; $i < count($array); $i++) {
//     $issues = explode('=>', $array[$i]);
//     $city = $issues[0];
//     $code = $issues[1];
//     $newCodesArr[$city] = $code;
//     for ($count = 1; $count < 70; $count++) {
//         $newCode = $code + $count;
//         if (file_get_contents("https://moapi.prameyanews.com/prameya/document/pdf/3_102_" . $newCode . "_" . $linkdate . "_01.jpg")) {
//             $newCodesArr[$city] = $newCode;
//             break;
//         }
//     }
// }

// $txt = '';
// foreach ($newCodesArr as $city => $code) {
//     $txt .= $city . '=>' . $code . ' ';
// }

// $txt = implode(',', explode(' ', trim($txt)));
// echo $txt;

// echo count(explode('map_area_img', file_get_contents("https://www.prameyaepaper.com/edition/2143/BHUBANESWAR")));
file_put_contents(dirname(__FILE__) . "/test.txt", file_get_contents("https://www.prameyaepaper.com/edition/2140/BHUBANESWAR"));
