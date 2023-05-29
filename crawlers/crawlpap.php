
<?php


error_reporting(E_ERROR);
set_time_limit(1800);

require  "/var/www/d78236gbe27823/vendor/autoload.php";
// require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;


$linkDate = date('d-M-Y', time());
$filenamedate = date('Y-m-d', time());


$data = file_get_contents("https://www.glpublications.in/PurvanchalPrahari/Guwahati/" . $linkDate . "/Page-2");
$contentarray = explode('<div class="clip-container"', $data);





$t1 = time();
$number = 1;

for ($content = 1; $content < count($contentarray); $content++) {
    $link = explode("'", explode("<img src='", $contentarray[$content])[1])[0];
    $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp2/images/PAP_Bhubaneswar_" . $filenamedate . "_" . $number . "_admin_ori.jpg";


    // $filepath = dirname(__FILE__) . "/images/PAP_Bhubaneswar_" . $filenamedate . "_" . $number . "_admin_ori.jpg";
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

        if ($n < 2) {
            echo 'Does not seem to be a classifieds page..... deleting<br>';
            unlink($filepath);
        } else {
            echo 'Identified as a classifieds page..... check it out here: <a href = "https://marketing.buzzgully.com/' . str_replace("/var/www/d78236gbe27823/", "", $filepath) . '" target="_blank">' . str_replace("/var/www/d78236gbe27823/marketing/Whatsapp2/images/", "", $filepath) . '</a><br>';
            // echo 'Identified as a classifieds page..... <br>';
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



echo "<br>";
echo "total time= " . ((time() - $t1) / 60) . "min";
