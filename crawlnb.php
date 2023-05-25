<?php


error_reporting(E_ERROR);
set_time_limit(1800);

require  "/var/www/d78236gbe27823/vendor/autoload.php";
// require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;


$number = 1;
$date = date('d-M-Y', time());
$filenamedate = date('Y-m-d', time());
$cityArray  =  array("mumbai", "nagpur",  "pune", "akola", "nashik", "amravati", "chandrapur");
$citycode = array("mum", "nag", "pun", "akol", "nas", "amr", "cha");




for ($edition = 0; $edition < count($cityArray); $edition++) {
    for ($page = 1; $page < 20; $page++) {

        for ($section = 1; $section < 100; $section++) {
            $link =   "https://epaper.enavabharat.com/article-" . $date . "-" . $cityArray[$edition] . "-edition-navabharat-" . $citycode[$edition] . "/" . $page . "-" . $section . "/";


            $content = file_get_contents($link);

            $imagelink = explode('"', explode("id='ImageArticle'  src=", $content)[1])[1];

            $imageInfo = getimagesize($imagelink);

            if (!$imageInfo)
                break;



            $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp2/images/NB_" .  ucwords($cityArray[$edition]) . "_" . $filenamedate . "_" . $number . "_admin_hin.jpg";



            // $filepath = dirname(__FILE__) . "/images/NB_" . ucwords($cityArray[$edition]) . "_" . $filenamedate . "_" . $number . "_admin_hin.jpg";
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
    }
}
