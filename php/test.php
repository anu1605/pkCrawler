<?php

// $content = file_get_contents("https://www.mumbaichoufer.com/view/83/mc");
// $idArray = explode('"mp_id":"', $content);
// echo count($idArray);
// file_put_contents(dirname(__FILE__) . "/test.txt", $content);


// file_put_contents(dirname(__FILE__) . "/test.txt", $content);

// $cityArray = array("mumbai" => "PM", "pune" => "PU", "nashik" => "NS", "aurangabad" => "AUR", "nagpur" => "NAG", "kolhapur" => "KOL", "satara" => "STR", "nanded" => "NDD", "latur" => "LTR", "ahmednagar" => "AH", "jalgaon" => "JAL");

// for ($page = 1; $page < 20; $page++) {
//     $link = "http://epunyanagari.com/articlepage.php?articleid=PNAGARI_NS_20230519_";
//     for ($section = 1; $section < 30; $section++) {

//         $content = file_get_contents($link . sprintf('%02d', $page) . "_" . $section);
//         if ($content) {
//             $imagelink = explode('"', explode('id="artimg" src="', $content)[1])[0];
//             $imageInfo = getimagesize($imagelink);
//             if (!$imageInfo)
//                 break;

//             $width = $imageInfo[0];
//             $height = $imageInfo[1];
//             if ($width >= $height)
//                 $minHeight = $width + intdiv((3 * $width), 4);
//             else
//                 $minHeight =  $width - intdiv((2 * $width), 5);
//             if ($height >= $minHeight || $height >= $width + 10 || $height >= $width - 100) {
//                 echo $imagelink . PHP_EOL;
//             }
//         }
//     }php
// }

$content = file_get_contents("https://epaper.starofmysore.com/epaper/edition/2272/star-mysore/page/2");
file_put_contents(dirname(__FILE__) . "/test.txt", $content);
