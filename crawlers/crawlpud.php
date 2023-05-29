<?php


error_reporting(E_ERROR);
set_time_limit(1800);

// require  "/var/www/d78236gbe27823/vendor/autoload.php";
require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;

require 'vendor/autoload.php';

use Google\Cloud\Translate\V3\TranslationServiceClient;



$number = 1;
$date = date('Ymd', time());
$filenamedate = date('Y-m-d', time());
$cityArray  =  array("Mumbai", "Thane", "Raigad", "Palghar", "Pune", "Kolhapur", "Satara", "Solapur", "Ahmednagar", "Ratnagiri", "Sindhudurg", "Goa", "Belgaum", "Nashik", "Nanded", "Latur");
$citycode = array("MUM", "THE", "RGD", "PAL", "PUN", "KOL", "SAT", "SOL", "AHM", "RAT", "SIN", "GOA", "BEL", "NAS", "NAN", "LAT");



for ($edition = 2; $edition < 3; $edition++) {
    for ($page = 9; $page < 10; $page++) {

        for ($section = 1; $section < 100; $section++) {
            $link =   "http://newspaper.pudhari.co.in/articlepage.php?articleid=PUDHARI_" . $citycode[$edition] . "_" . $date . "_" . sprintf("%02d", $page) . "_" . $section;
            $content = file_get_contents($link);

            $imagelink = explode("'", explode("src='", $content)[2])[0];

            $imageInfo = getimagesize($imagelink);


            if (!$imageInfo)
                break;

            echo $imagelink . "<br>";

            // $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp2/images/PUD_" .  $cityArray[$edition] . "_" . $filenamedate . "_" . $number . "_admin_mar.jpg";


            $filepath = dirname(__FILE__) . "/images/PUD_" . $cityArray[$edition] . "_" . $filenamedate . "_" . $number . "_admin_mar.jpg";
            $number++;
            $image = file_get_contents($imagelink);
            $handle = fopen($filepath, "w");
            fwrite($handle, $image);
            fclose($handle);

            try {

                $text = (new TesseractOCR($filepath))->lang('mar')->run();

                $translationClient = new TranslationServiceClient();
                $targetLanguage = 'es';
                $content = ['one', 'two', 'three'];
                $response = $translationClient->translateText(
                    $content,
                    $targetLanguage,
                    TranslationServiceClient::locationName('[steadfast-tesla-381506]', 'global')
                );

                foreach ($response->getTranslations() as $key => $translation) {
                    $separator = $key === 2
                        ? '!'
                        : ', ';
                    echo $translation->getTranslatedText() . $separator;
                }


                $result = $translate->translate("hello world", [
                    'target' => 'fr'
                ]);

                echo $result['text'] . "<br>";

                $result = $translate->detectLanguage($text);

                echo $result['languageCode'] . "<br>";

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
    }
}
