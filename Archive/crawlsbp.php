<?php

error_reporting(E_ERROR);
set_time_limit(1800);

// require  "/var/www/d78236gbe27823/vendor/autoload.php";
require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;

$filenamedate = date('Y-m-d', time());

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, "https://epaper.sangbadpratidin.in/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
$data = curl_exec($ch);
curl_close($ch);
$contentArray = explode('<div class="item">', $data);


$number = 1;



$t1 = time();
for ($i = 1; $i < count($contentArray); $i++) {

    $imagelink = str_replace('&', '&amp;', explode('"', explode('src="', $contentArray[$i])[1])[0]);

    // $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp2/images/SBP_Kolkata" . "_" . $filenamedate . "_" . $number . "_admin_ben.jpg";
    $filepath = dirname(__FILE__) . "/images/SBP_Kolkata" . "_" . $filenamedate . "_" . $number . "_admin_ben.jpg";

    $number++;
    $t2 = time();
    $image = file_get_contents($imagelink);
    echo "fetching time = " . (time() - $t2) . "sec";
    echo  "<br>";

    $handle = fopen($filepath, "w");
    fwrite($handle, $image);
    fclose($handle);


    $t3 = time();
    try {
        $text = (new TesseractOCR($filepath))->run();
        echo "processing time = " . (time() - $t3) . "sec";
        echo  "<br>";

        $matches = array();
        preg_match_all('/\+91[0-9]{10}|[0]?[6-9][0-9]{4}[\s]?[-]?[0-9]{5}/', $text, $matches);
        $matches = str_replace("+91", "", str_replace("\n", "", str_replace("-", "", str_replace(" ", "", $matches[0]))));
        foreach ($matches as $match => $val) $matches[$match] = ltrim($val, "0");
        $n = count($matches);

        if ($n < 3) {
            echo 'Does not seem to be a classifieds page..... deleting<br>';
            unlink($filepath);
        } else {
            // echo 'Identified as a classifieds page..... check it out here: <a href = "https://marketing.buzzgully.com/' . str_replace("/var/www/d78236gbe27823/", "", $filepath) . '" target="_blank">' . str_replace("/var/www/d78236gbe27823/marketing/Whatsapp2/images/", "", $filepath) . '</a><br>';
            echo 'Identified as a classifieds page..... <br>';
        }
    } catch (Exception $e) {
        echo "processing time = " . (time() - $t3);
        echo "<br>";
        echo "Does not seem to be a classifieds page..... deleting";
        echo "<br>";
        unlink($filepath);
    }
    echo "<br>";
    ob_flush();
    flush();
}

echo "<br>";
echo "total time = " . ((time() - $t1) / 60) . "min";
