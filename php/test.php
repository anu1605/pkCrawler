<?php

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_URL, "https://epaper.newindianexpress.com/t/3353");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
// $data = curl_exec($ch);
// curl_close($ch);
// file_put_contents(dirname(__FILE__) . "/test.txt", $data);
error_reporting(E_ERROR);
set_time_limit(1800);

// require  "/var/www/d78236gbe27823/vendor/autoload.php";
require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;


$number = 1;
$date = date('d-M-Y', time());
$filenamedate = date('Y-m-d', time());
$cityArray  =  array("mumbai", "nagpur", "nashik", "pune");

for ($edition = 0; $edition < 1; $edition++) {
    for ($page = 1; $page < 2; $page++) {

        for ($section = 1; $section < 30; $section++) {
            $link =   "https://epaper.navarashtra.com/article-" . $date . "-" . $cityArray[$edition] . "-edition/" . $page . "-" . $section . "/";
            $content = file_get_contents($link);

            $imagelink = explode('"', explode("id='ImageArticle'  src=", $content)[1])[1];

            $imageInfo = getimagesize($imagelink);

            if (!$imageInfo)
                break;


            // $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp/images/NVR_" .  $cityArray[$edition] . "_" . $filenamedate . "_" . $number . "_admin_mar.jpg";


            echo $imagelink . PHP_EOL;
            $filepath = dirname(__FILE__) . "/images/NVR_" . $cityArray[$edition] . "_" . $filenamedate . "_" . $number . "_admin_mar.jpg";
            $number++;
            $image = file_get_contents($imagelink);
            $handle = fopen($filepath, "w");
            fwrite($handle, $image);
            fclose($handle);

            try {

                $text = (new TesseractOCR($filepath))->lang('hin')->run();


                $matches = array();
                preg_match_all('/\+91[0-9]{10}|[0]?[6-9][0-9]{4}[\s]?[-]?[0-9]{5}/', $text, $matches);
                $matches = str_replace("+91", "", str_replace("\n", "", str_replace("-", "", str_replace(" ", "", $matches[0]))));
                foreach ($matches as $match => $val) $matches[$match] = ltrim($val, "0");
                $n = count($matches);

                if ($n < 3) {
                    echo 'Does not seem to be a classifieds page..... deleting<br>' . PHP_EOL;
                    unlink($filepath);
                } else {
                    // echo 'Identified as a classifieds page..... check it out here: <a href = "https://marketing.buzzgully.com/' . str_replace("/var/www/d78236gbe27823/", "", $filepath) . '" target="_blank">' . str_replace("/var/www/d78236gbe27823/marketing/Whatsapp/images/", "", $filepath) . '</a><br>';
                    echo 'Identified as a classifieds page..... <br>';
                }
            } catch (Exception $e) {
                echo "Does not seem to be a classifieds page..... deleting";
                echo "<br>";
                unlink($filepath);
            }
            ob_flush();
            flush();
        }
    }
}
