
<?php


error_reporting(E_ERROR);
set_time_limit(1800);

require  "/var/www/d78236gbe27823/vendor/autoload.php";
// require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;



$date = date('Ymd', time());
$filenamedate = date('Y-m-d', time());
$cityArray  =  array("Mangalore", "Davangere", "Kalaburgi", "Hubli", "Bangalore");
$citycode = array("MANG", "DAVN", "KALB", "HUB",  "BANG",);

$t1 = time();
for ($edition = 0; $edition < count($cityArray); $edition++) {
    $number = 1;
    for ($page = 1; $page < 20; $page++) {
        for ($section = 1; $section < 100; $section++) {
            $link =   "http://epaper.samyukthakarnataka.com/articlepage.php?articleid=SMYK_" . $citycode[$edition] . "_" . $date . "_" . sprintf("%02d", $page) . "_" . $section;
            $content = file_get_contents($link);


            $imagelink = explode('"', explode('id="artimg" src="', $content)[1])[0];

            $imageInfo = getimagesize($imagelink);


            if (!$imageInfo)
                break;


            $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp2/images/SY_" .  $cityArray[$edition] . "_" . $filenamedate . "_" . $number . "_admin_kan.jpg";


            // $filepath = dirname(__FILE__) . "/images/SY_" . $cityArray[$edition] . "_" . $filenamedate . "_" . $number . "_admin_kan.jpg";
            $number++;
            $image = file_get_contents($imagelink);
            $handle = fopen($filepath, "w");
            fwrite($handle, $image);
            fclose($handle);

            try {

                $text = (new TesseractOCR($filepath))->lang('mar')->run();

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

echo PHP_EOL;
echo "<br>";
echo (time() - $t1) / 60;
