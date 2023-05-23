<?php

// error_reporting(E_ERROR);
set_time_limit(1800);

// require  "/var/www/d78236gbe27823/vendor/autoload.php";
require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;

$date = date('Ymd', time());
$filenamedate = date('Y-m-d', time());

$number = 1;
$datecode = file_get_contents(dirname(__FILE__) . "/mc.txt");



$code = number_format($datecode) + 1;
if (file_get_contents("https://www.mumbaichoufer.com/view/" . $code . "/mc")) {
    $file = fopen(dirname(__FILE__) . "/mc.txt", "w+");
    $datecode = $code;
    $txt = $code;
    fwrite($file, $txt);
    fclose($file);
}



$content =   file_get_contents("https://www.mumbaichoufer.com/view/" . $datecode . "/mc");
$getmcdate = trim(explode('-', explode('<title>Mumbaichoufer -', $content)[1])[0]);
$mcdate = date("Y-m-d", strtotime($getmcdate));
$firstId = explode('"', explode('{"mp_id":"', $content)[1])[0];
$section1 = explode($firstId, $content)[1];
$idarray = explode('{"mp_id":"', $section1);
for ($id = 89; $id < count($idarray) - 1; $id++) {
    $imageId = explode('"', $idarray[$id])[0];
    $imagelink = "https://www.mumbaichoufer.com/map-image/" . $imageId . ".jpg";
    // $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp/images/PN_".$paperArray[$edition]."_".$filenamedate."_".$number."_admin_mar.jpg";
    $filepath = "images/MC_Mumbai" . "_" . $filenamedate . "_" . $number . "_admin_mar.jpg";
    $number++;
    $image = file_get_contents($imagelink);
    $handle = fopen($filepath, "w");
    fwrite($handle, $image);
    fclose($handle);

    // $text = (new TesseractOCR($filepath))->run();
    $ocr = new TesseractOCR();
    $ocr->image($filepath);
    $text = $ocr->run();

    $matches = array();
    preg_match_all('/\+91[0-9]{10}|[0]?[6-9][0-9]{4}[\s]?[-]?[0-9]{5}/', $text, $matches);
    $matches = str_replace("+91", "", str_replace("\n", "", str_replace("-", "", str_replace(" ", "", $matches[0]))));
    foreach ($matches as $match => $val) $matches[$match] = ltrim($val, "0");
    $n = count($matches);

    if ($n < 3) {
        echo 'Does not seem to be a classifieds page..... deleting' . PHP_EOL;
        unlink($filepath);
    } else {
        // echo 'Identified as a classifieds page..... check it out here: <a href = "https://marketing.buzzgully.com/' . str_replace("/var/www/d78236gbe27823/", "", $filepath) . '" target="_blank">' . str_replace("/var/www/d78236gbe27823/marketing/Whatsapp/images/", "", $filepath) . '</a><br>';
        echo 'Identified as a classifieds page..... ' . $i . PHP_EOL;
    }
}




// for ($edition = 0; $edition < count($paperCode); $edition++) {

//     $imageLinkPage1 = "http://epunyanagari.com/articlepage.php?articleid=PNAGARI_" . $paperCode[$edition] . "_" . $date . "_01_1";
//     $lastPage = findLastPage($imageLinkPage1);

//     echo "Last Page in " . $paperArray[$edition] . " is " . $lastPage . "<br><br>";

//     for ($currentpage = 8; $currentpage <= 8; $currentpage++) {

//         $articleURL = "http://epunyanagari.com/articlepage.php?articleid=PNAGARI_" . $paperCode[$edition] . "_" . $date . "_" . sprintf('%02d', $currentpage);
//         $lastArtcile = findLastArticle($articleURL);

//         echo "Last Article in " . $paperArray[$edition] . " Page " . $currentpage . " is " . $lastArtcile . "<br><br>";

//         for ($articleno = 1; $articleno <= $lastArtcile; $articleno++) {

//             echo "Now crawling through Article No. " . $articleno . "......";

//             $thisArticleURL = "http://epunyanagari.com/articlepage.php?articleid=PNAGARI_" . $paperCode[$edition] . "_" . $date . "_" . sprintf('%02d', $currentpage) . "_" . $articleno;

//             $articleResponse = file_get_contents($thisArticleURL);

//             echo $imageURL = explode('"', explode('<link rel="image_src" href="', $articleResponse)[1])[0];
//             echo "<br>";
//             $image = file_get_contents($imageURL);

//             $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp/images/PN_" . $paperArray[$edition] . "_" . $filenamedate . "_" . $number . "_admin_mar.jpg";

//             $number++;

//             $handle = fopen($filepath, "w");
//             fwrite($handle, $image);
//             fclose($handle);

//             // echo "Saved to " . str_replace("/var/www/d78236gbe27823/marketing/Whatsapp/images/", "", $filepath) . ".....";

//             $text = (new TesseractOCR($filepath))->run();

//             $matches = array();
//             preg_match_all('/\+91[0-9]{10}|[0]?[6-9][0-9]{4}[\s]?[-]?[0-9]{5}/', $text, $matches);
//             $matches = str_replace("+91", "", str_replace("\n", "", str_replace("-", "", str_replace(" ", "", $matches[0]))));
//             foreach ($matches as $match => $val) $matches[$match] = ltrim($val, "0");
//             $n = count($matches);

//             if ($n < 2) {
//                 echo 'Does not seem to be a classifieds page..... deleting<br>';
//                 unlink($filepath);
//             } else {
//                 echo 'Identified as a classifieds page..... check it out here: <a href = "https://marketing.buzzgully.com/' . str_replace("/var/www/d78236gbe27823/", "", $filepath) . '" target="_blank">' . str_replace("/var/www/d78236gbe27823/marketing/Whatsapp/images/", "", $filepath) . '</a><br>';
//             }

//             echo "<br>";

//             ob_flush();
//             flush();
//         }
//     }
// }
