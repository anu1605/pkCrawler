<?php



error_reporting(E_ERROR);
set_time_limit(5400);

// require  "/var/www/d78236gbe27823/vendor/autoload.php";
require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;


function findLastPage($url)
{
    $min = 1;
    $max = 100;
    while ($min <= $max) {
        $mid = floor(($min + $max) / 2);
        $testUrl = str_replace("/01/hdimage.jpg", "/" . sprintf('%02d', $mid) . "/hdimage.jpg", $url);
        $response = @file_get_contents($testUrl);
        if ($response === false) {
            $max = $mid - 1;
        } else {
            $min = $mid + 1;
        }
    }
    return $max;
}

$filenamedate = date('Y-m-d', time());
$dateForLinks = date('Ymd', time());


//$paperStringFull = Array("agra-city","aligarh-city","almora","ambala","ambedkar-nagar","amethi","jpnagar","auraiya","faizabad","azamgarh","badaun","baghpat","bahraich","balia","balrampur","banda","barabanki","bareilly-city","basti","bhadohi","bhiwani","bhopal","bijnor","bilaspur","bulandsahar","chamba","chandauli","chandigarh-city","charkhi-dadri","dehradun-city","delhi-city","deoria","etah","etawa","faridabad","farrukhabad","fatehabad","fatehpur","firozabad","garhwal","ghaziabad","trans-hindon-area","ghazipur","gonda-balrampur","gorakhpur-city","greater-noida","gurgaon","hamirpur-dharamshala","hamirpur","hapur","hardoi","haridwar","hathras","hisar","jalandhar","jalaun","jammu-city","jounpur","jhajjar","jhansi-city","jind","kaithal","kangra","kannauj","kanpur-ghatampur","kanpur-city","karnal","kasganj","kathua","kaushambi","kotdwar","kullu","kurukshetra","kushinagar","khiri","lalitpur","lucknow-city","mharajgunj","mainpuri","mandi","mathura","mau","meerut-city","mirzapur","mohali","moradabad-city","muzaffarnagar","haldwani","narnaul","noida","panchkula","panipat","pilibhit","pithoragarh","pratapgarh","allahabad-city","gangapar","prayagraj-naini","raebareli","rajasthan","rampur-dharamshala","rampur","rewari","rishikesh","rohtak-city","roorkee","saharanpur-city","sambhal","santkabirnagar","shahjahanpur","shimla","siddharthnagar","sirmaur","sirsa","sitapur","solan","sonbhadra","sonipat","sultanpur","udhampur","udhamsingh-nagar","una","unnao","varanasi-city","vikas-nagar","yamuna-nagar");

$paperString = array("agra-city", "ambala", "bhopal", "bilaspur", "chandigarh-city", "dehradun-city", "delhi-city", "faridabad", "ghaziabad", "gurgaon", "haridwar", "jalandhar", "jammu-city", "jhansi-city", "kanpur-city", "kurukshetra", "lucknow-city", "meerut-city", "mohali", "moradabad-city", "noida", "allahabad-city", "shimla", "varanasi-city");


$t1 = time();
for ($edition = 0; $edition < count($paperString); $edition++) {

    $response = file_get_contents("https://epaper.amarujala.com/" . $paperString[$edition] . "/" . $dateForLinks . "/01.html?format=img&ed_code=" . $paperString[$edition]);

    $a = explode('/hdimage.jpg"', $response);
    $b = explode('<link rel="preload" href="', $a[0]);
    $imageLinkPage1 = $b[1] . "/hdimage.jpg";

    $lastPage = findLastPage($imageLinkPage1);

    $number = 1;

    for ($i = 1; $i <= $lastPage; $i++) {

        $pgImageURL = str_replace("/01/hdimage.jpg", "/" . sprintf('%02d', $i) . "/hdimage.jpg", $imageLinkPage1);

        // $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp2/images/AU_" . ucwords(explode("-", $paperString[$edition])[0]) . "_" . $filenamedate . "_" . $number . "_admin_hin.jpg";

        $filepath = dirname(__FILE__) . "/images/AU_" . ucwords(explode("-", $paperString[$edition])[0]) . "_" . $filenamedate . "_" . $number . "_admin_hin.jpg";
        $number++;

        $t2 = time();
        $image = file_get_contents($pgImageURL);
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

echo "<br>";
echo "time taken = " . ((time() - $t1) / 60) . "min";
