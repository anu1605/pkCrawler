<?php



error_reporting(E_ERROR);
set_time_limit(1800);

// require  "/var/www/d78236gbe27823/vendor/autoload.php";
require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;


$filenamedate = date("Y-m-d", time());
$linkdate = date("dmY", time());


$cityarray = array("Bhubaneswar", "Cuttack", "Rourkela", "Berhampur");
$citycode = array("71", "72", "79", "77");
$imagelinkcitycode = array("hr", "km", "ro", "be");

$t1 = time();
for ($edition = 0; $edition < count($cityarray); $edition++) {
    $link = "https://sambadepaper.com/epaper/1/" . $citycode[$edition] . "/" . $filenamedate . "/1";
    $content = file_get_contents($link);
    $pagearray = explode("id='imgpage_", $content);

    $number = 1;
    for ($page = 1; $page < count($pagearray); $page++) {
        $pageno = explode("'", $pagearray[$page])[0];
        $idarray = explode("show_pop('", $pagearray[$page]);
        for ($id = 1; $id < count($idarray); $id++) {
            $imagelinkid = explode(",", $idarray[$id])[1];
            $imagelink = "https://sambadepaper.com/epaperimages/" . $linkdate . "/" . $linkdate . "-md-" . $imagelinkcitycode[$edition] . "-" . $pageno . "/" . str_replace("'", "", $imagelinkid) . ".jpg";
            // $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp2/images/SAM_" . $cityarray[$edition] . "_" . $filenamedate . "_" . $number . "_admin_ori.jpg";
            $filepath = dirname(__FILE__) . "/images/SAM_" . $cityarray[$edition] . "_" . $filenamedate . "_" . $number . "_admin_ori.jpg";
            $number++;
            $t2 = time();
            $image = file_get_contents($imagelink);
            echo "fetching time =" . (time() - $t2) . "sec";
            echo "<br>";

            $handle = fopen($filepath, "w");
            fwrite($handle, $image);
            fclose($handle);
            $t3 = time();
            try {
                $text = (new TesseractOCR($filepath))->run();
                echo "processing time =" . (time() - $t3) . "sec";
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
                echo "processing time =" . (time() - $t3) . "sec";
                echo "<br>";
                echo "Does not seem to be a classifieds page..... deleting";
                echo "<br>";
                unlink($filepath);
            }
            echo "<br>";
            ob_flush();
            flush();
        }
    }
}



echo "<br>";
echo "time taken = " . ((time() - $t1) / 60) . "min";
