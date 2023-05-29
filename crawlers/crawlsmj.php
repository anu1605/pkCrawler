
<?php


error_reporting(E_ERROR);
set_time_limit(1800);

// require  "/var/www/d78236gbe27823/vendor/autoload.php";
require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;


$linkDate = date('dmY', time());
$date = date('Ymd', time());
$filenamedate = date('Y-m-d', time());
$content = file_get_contents("https://samajaepaper.in/epaper/1/73/" . $date . "/1");
$pageArray = explode("class='map", $content);




$t1 = time();
$number = 1;
for ($page = 1; $page < count($pageArray); $page++) {
    $sections = explode("show_pop('", $pageArray[$page]);
    for ($sec = 1; $sec < count($sections); $sec++) {
        $name = explode("','", $sections[$sec])[1];
        $link = "https://samajaepaper.in/epaperimages/" . $linkDate . "/" . $linkDate . "-md-bh-" . $page . "/" . $name . ".jpg";

        // $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp2/images/SMJ_Bhubaneswar_" . $filenamedate . "_" . $number . "_admin_ori.jpg";


        $filepath = dirname(__FILE__) . "/images/SMJ_Bhubaneswar_" . $filenamedate . "_" . $number . "_admin_ori.jpg";
        $number++;

        $t2 = time();
        $image = file_get_contents($link);
        echo "fetching time=" . (time() - $t2) . "sec";
        echo "<br>";


        $handle = fopen($filepath, "w");
        fwrite($handle, $image);
        fclose($handle);

        $t3 = time();
        try {

            $text = (new TesseractOCR($filepath))->run();
            echo "processing time=" . (time() - $t3) . "sec";
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
                // echo 'Identified as a classifieds page..... check it out here: <a href = "https://marketing.buzzgully.com/' . str_replace("/var/www/d78236gbe27823/", "", $filepath) . '" target="_blank">' . str_replace("/var/www/d78236gbe27823/marketing/Whatsapp2/images/", "", $filepath) . '</a><br>';
                echo 'Identified as a classifieds page..... <br>';
            }
        } catch (Exception $e) {
            echo "processing time=" . (time() - $t3) . "sec";
            echo "<br>";
            echo "Does not seem to be a classifieds page..... deleting";
            echo "<br>";
            unlink($filepath);
        }
        ob_flush();
        flush();
    }
}


echo "<br>";
echo "total time= " . ((time() - $t1) / 60) . "min";
