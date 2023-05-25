<?php
error_reporting(E_ERROR);
set_time_limit(1800);

require  "/var/www/d78236gbe27823/vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;


$paperArray = array("Hyderabad", "Vijayawada", "Karimnagar", "Nellore", "Ananthapur");

$filenamedate = date('Y-m-d', time());

$paperString = ["HYD", "VIJ", "KRM", "NEL", "ATP"];

$pageNumber = 30;
$sectionNumber = 30;

$t1 = time();
for ($edition = 0; $edition < count($paperArray); $edition++) {
    $code = $paperString[$edition];
    $city = $paperArray[$edition];
    $number = 1;
    for ($i = 1; $i <= 50; $i++) {
        if ((file_get_contents("http://103.241.136.50/epaper/DC/" . $code . "/510X798/" . $filenamedate . "/b_images/" . $code . "_" . $filenamedate . "_maip" . $i . "_1.jpg"))) {
            for ($j = 1; $j < 50; $j++) {

                $link = "http://103.241.136.50/epaper/DC/" . $code . "/510X798/" . $filenamedate . "/b_images/" . $code . "_" . $filenamedate . "_maip" . $i . "_" . $j . ".jpg";

                if (!file_get_contents($link)) {
                    break;
                } else {
                    $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp2/images/DC_" . $city . "_" . $filenamedate . "_" . $number . "_admin_eng.jpg";

                    // $filepath = dirname(__FILE__) . "/images/DC_" . $city . "_" . $filenamedate . "_" . $number . "_admin_eng.jpg";
                    $number++;
                    $image = file_get_contents($link);

                    $handle = fopen($filepath, "w");
                    fwrite($handle, $image);
                    fclose($handle);

                    try {

                        echo $link . "<br>";
                        $text = (new TesseractOCR($filepath))->run();
                        $matches = array();
                        preg_match_all('/\+91[0-9]{10}|[0]?[6-9][0-9]{4}[\s]?[-]?[0-9]{5}/', $text, $matches);
                        $matches = str_replace("+91", "", str_replace("\n", "", str_replace("-", "", str_replace(" ", "", $matches[0]))));
                        foreach ($matches as $match => $val) $matches[$match] = ltrim($val, "0");
                        $n = count($matches);

                        if ($n < 2) {
                            echo 'Does not seem to be a classifieds page..... deleting<br>';
                            unlink($filepath);
                        } else {
                            echo 'Identified as a classifieds page..... check it out here: <a href = "https://marketing.buzzgully.com/' . str_replace("/var/www/d78236gbe27823/", "", $filepath) . '" target="_blank">' . str_replace("/var/www/d78236gbe27823/marketing/Whatsapp2/images/", "", $filepath) . '</a><br>';
                            // echo 'Identified as a classifieds page..... <br>';
                        }
                    } catch (Exception $e) {
                        unlink($filepath);
                        echo "Does not seem to be a classifieds page..... deleting";
                        echo "<br>";
                    }

                    ob_flush();
                    flush();
                }
            }
        } else break;
    }
}

echo "<br>";
echo ($t1 - time()) / 60 . " min";
