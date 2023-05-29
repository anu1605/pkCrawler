<?php



error_reporting(E_ERROR);
set_time_limit(1800);

// require  "/var/www/d78236gbe27823/vendor/autoload.php";
require  "vendor/autoload.php";

use thiagoalessio\TesseractOCR\TesseractOCR;


$filenamedate = date('Y-m-d', time());
$dateForLinks = date('d-M-Y', time());


$paperArray = array("Delhi", "Kanpur", "Patna", "Lucknow", "Varanasi", "Prayagraj", "Gorakhpur", "Agra", "Meerut", "Bhagalpur", "Muzaffarpur");

$paperString = array("-4-Delhi-City-edition-Delhi-City", "-64-Kanpur-edition-Kanpur", "-84-Patna-Nagar-edition-Patna-Nagar", "-11-Lucknow-edition-Lucknow", "-45-Varanasi-City-edition-Varanasi-City", "-79-Prayagraj-City-edition-Prayagraj-City", "-56-Gorakhpur-City-edition-Gorakhpur-City", "-193-Agra-edition-Agra", "-29-Meerut-edition-Meerut", "-205-Bhagalpur-City-edition-Bhagalpur-City", "-203-Muzaffarpur-Nagar-edition-Muzaffarpur-Nagar");



$t1 = time();
for ($edition = 0; $edition < count($paperArray); $edition++) {

    $response = file_get_contents("https://epaper.jagran.com/epaper/" . $dateForLinks . $paperString[$edition] . ".html");

    $a = explode('<ul id="menu-toc" class="menu-toc">', $response);
    $b = explode('</ul>', $a[1]);
    $pagesHTML = $b[0];

    $a = explode('ss.png">', $pagesHTML);

    $number = 1;

    for ($i = 0; $i < count($a) - 1; $i++) {
        $b = explode('data-src="', $a[$i]);
        $url = $b[1];
        $url_parts = explode('/', $url);
        $last_part = end($url_parts);
        $modified_last_part = 'M-' . $last_part . '.png';
        $url_parts[count($url_parts) - 1] = $modified_last_part;
        $pgImageURL = implode('/', $url_parts);


        // $filepath = "/var/www/d78236gbe27823/marketing/Whatsapp2/images/DJ_" . $paperArray[$edition] . "_" . $filenamedate . "_" . $number . "_admin_hin.jpg";

        $filepath = dirname(__FILE__) . "/images/DJ_" . $paperArray[$edition] . "_" . $filenamedate . "_" . $number . "_admin_hin.jpg";
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
