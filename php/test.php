<?php
// error_reporting(E_ERROR);
// $images = array();
// $imageNameToSave = array();

// $filenamedate = date('Y-m-d', time());
// $dateForLinks1 = date('Y/m/d', time());
// $dateForLinks2 = date('Y_m_d', time());

// $cityarray = array("Akola", "Belgaum", "jalgaon", "Kolhapur", "Mumbai", "Nagpur", "Nanded", "Nashik", "Ratnagiri", "Satara", "Sindhudurg");

// for ($edition = 0; $edition < 1; $edition++) {
//     $number = 1;
//     for ($page = 3; $page < 9; $page++) {
//         $pageno = sprintf("%03d", $page);
//         $link = "https://epaper-sakal-application.s3.ap-south-1.amazonaws.com/EpaperData/Sakal/" . $cityarray[$edition] . "/" . $dateForLinks1 . "/Main/Sakal_" . $cityarray[$edition] . "_" . $dateForLinks2 . "_Main_DA_" . $pageno . "/S/";
//         if (file_get_contents($link . "0.jpg")) {
//             for ($section = 3; $section < 9; $section++) {
//                 $imagelink = $link . $section . ".jpg";
//                 if (file_get_contents($imagelink)) {
//                     array_push($images, $imagelink);
//                     $filepath = "SKL_" . $cityarray[$edition] . "_" . $filenamedate . "_" . $number . "_mar.jpg";
//                     array_push($imageNameToSave, $filepath);
//                     $number++;
//                 }
//             }
//         } else break;
//     }
// }

require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;

$text = (new TesseractOCR("mc.jpg"))->run();
