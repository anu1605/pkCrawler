<?php

error_reporting(E_ERROR);
set_time_limit(1800);

require  "/var/www/d78236gbe27823/vendor/autoload.php";
// require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;

$date = date('Y-m-d', time());
$linkdate = date('dmY', time());


$t1 = time();
$number = 1;
for ($pageNumber = 1; $pageNumber <= 20; $pageNumber++) {
    if ($pageNumber == 1)
        $page = "index.php";
    else $page = "page" . $pageNumber . ".php";

    $content = file_get_contents("https://niyomiyabarta.com/epaper/" . $linkdate . "/" . $page);
    if ($content) {
        $section1 = explode('<map name="Map2"', $content)[1];
        $section2 = explode('</map>', $section1)[0];
        $linkArray = explode("redirectme('", $section2);
        file_put_contents(dirname(__FILE__, 1) . "/test.txt", $content);
        for ($page = 1; $page < count($linkArray); $page++) {
            $pageName = explode("',", $linkArray[$page])[0];
            // echo "https://niyomiyabarta.com/epaper/17052023/images/p" . $pageNumber . "/" . $pageName . "<br>";
            $imageLink =  "https://niyomiyabarta.com/epaper/" . $linkdate . "/images/p" . $pageNumber . "/" . $pageName;


            $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp2/images/NYB_Guwahati_" . $date . "_" . $number . "_admin_hin.jpg";

            // $filepath = dirname(__FILE__) . "/images/NYB_Guwahati_" . $date . "_" . $number . "_admin_hin.jpg";
            $number++;

            $t2 = time();
            $image = file_get_contents($imageLink);
            echo "fetching time= " . (time() - $t2) . "sec";
            echo "<br>";

            $handle = fopen($filepath, "w");
            fwrite($handle, $image);
            fclose($handle);

            $t3 = time();
            try {

                $text = (new TesseractOCR($filepath))->run();
                echo "processing time= " . (time() - $t3) . "sec";
                echo "<br>";

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
                echo "processing time= " . (time() - $t3) . "sec";
                echo "<br>";
                unlink($filepath);
                echo "Does not seem to be a classifieds page..... deleting";
                echo "<br>";
            }

            ob_flush();
            flush();
        }
    } else break;
}

echo "<br>";
echo ((time() - $t1) / 60) . " min<br>";
