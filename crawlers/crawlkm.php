<?php

error_reporting(E_ERROR);
set_time_limit(1800);

require  "/var/www/d78236gbe27823/vendor/autoload.php";
// require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;


$number = 1;
$content = file_get_contents("http://karnatakamalla.com/");
$getdate = explode('&pn', explode('KARMAL_MAI&date=', $content)[1])[0];
$time = strtotime($getdate);
$kmdate = date('Ymd', $time);
$kmfilenamedate = date('Y-m-d', $time);

$t1 = time();

for ($page = 1; $page < 30; $page++) {
    $testcontent = file_get_contents("http://karnatakamalla.com/articlepage.php?articleid=KARMAL_MAI_" . $kmdate . "_" .  $page . "_" . $section);
    if (!$testcontent)
        break;

    for ($section = 1; $section < 30; $section++) {
        $content = file_get_contents("http://karnatakamalla.com/articlepage.php?articleid=KARMAL_MAI_" . $kmdate . "_" .  $page . "_" . $section);
        if ($content) {
            $imagelink = explode('"', explode('id="artimg"  src="', $content)[1])[0];
            $imageInfo = getimagesize($imagelink);
            if (!$imageInfo)
                break;

            $width = $imageInfo[0];
            $height = $imageInfo[1];
            $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp2/images/KM_Karnataka" . "_" . $kmfilenamedate . "_" . $number . "_admin_kan.jpg";

            // $filepath = dirname(__FILE__) . "/images/KM_Karnataka" . "_" . $kmfilenamedate . "_" . $number . "_admin_kan.jpg";
            $number++;

            $t2 = time();
            $image = file_get_contents($imagelink);
            echo "fetching time = " . (time() - $t2) . "sec";
            echo "<br>";

            $handle = fopen($filepath, "w");
            fwrite($handle, $image);
            fclose($handle);

            $t3 = time();

            try {

                $text = (new TesseractOCR($filepath))->run();
                echo "processing time = " . (time() - $t3) . "sec";
                echo "<br>";

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
                echo "processing time = " . (time() - $t3) . "sec";
                echo "<br>";
                unlink($filepath);
                echo "Does not seem to be a classifieds page..... deleting";
                echo "<br>";
            }

            ob_flush();
            flush();
        }
    }
}
echo "<br>";
echo "total time = " . ((time() - $t1) / 60) . "min";
