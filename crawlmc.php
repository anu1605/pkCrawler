<?php

error_reporting(E_ERROR);
set_time_limit(1800);

require  "/var/www/d78236gbe27823/vendor/autoload.php";
// require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;

$date = date('Ymd', time());
$filenamedate = date('Y-m-d', time());


$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, "https://www.mumbaichoufer.com/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
$data = curl_exec($ch);
curl_close($ch);
$datecode = explode("/mc", explode("/view/", $data)[1])[0];


$number = 1;
$content =   file_get_contents("https://www.mumbaichoufer.com/view/" . $datecode . "/mc");
$getmcdate = trim(explode('-', explode('<title>Mumbaichoufer -', $content)[1])[0]);
$mcdate = date("Y-m-d", strtotime($getmcdate));
$firstId = explode('"', explode('{"mp_id":"', $content)[1])[0];
file_put_contents(dirname(__FILE__) . "/test.txt", $firstId);

$section1 = explode($firstId, $content)[1];
$idarray = explode('{"mp_id":"', $section1);



for ($id = 1; $id < count($idarray) - 1; $id++) {
    $imageId = explode('"', $idarray[$id])[0];
    $imagelink = "https://www.mumbaichoufer.com/map-image/" . $imageId . ".jpg";
    $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp2/images/MC_Mumbai" . "_" . $filenamedate . "_" . $number . "_admin_mar.jpg";
    // $filepath = dirname(__FILE__) . "/images/MC_Mumbai" . "_" . $filenamedate . "_" . $number . "_admin_mar.jpg";
    $number++;
    $image = file_get_contents($imagelink);

    $handle = fopen($filepath, "w");
    fwrite($handle, $image);
    fclose($handle);

    try {
        $text = (new TesseractOCR($filepath))->run();
        $matches = array();
        preg_match_all('/\+91[0-9]{10}|[0]?[6-9][0-9]{4}[\s]?[-]?[0-9]{5}/', $text, $matches);
        $matches = str_replace("+91", "", str_replace("\n", "", str_replace("-", "", str_replace(" ", "", $matches[0]))));
        foreach ($matches as $match => $val) $matches[$match] = ltrim($val, "0");
        $n = count($matches);

        if ($n < 3) {
            echo 'Does not seem to be a classifieds page..... deleting<br>';
            unlink($filepath);
        } else {
            echo 'Identified as a classifieds page..... check it out here: <a href = "https://marketing.buzzgully.com/' . str_replace("/var/www/d78236gbe27823/", "", $filepath) . '" target="_blank">' . str_replace("/var/www/d78236gbe27823/marketing/Whatsapp2/images/", "", $filepath) . '</a><br>';
            // echo 'Identified as a classifieds page..... <br>';
        }
    } catch (Exception $e) {
        echo "Does not seem to be a classifieds page..... deleting";
        echo "<br>";
        unlink($filepath);
    }


    ob_flush();
    flush();
}
