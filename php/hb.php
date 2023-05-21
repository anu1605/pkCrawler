<?php
error_reporting(E_ERROR);

// if (empty($_POST['images'])) {

$images = array();
$imageNameToSave = array();

// $date = date('Y-m-d', time());
// $linkDate = date('Y/m/d', time());
$date = date('Y-m-d', time());
$linkDate = date('Y/m/d', time());


$array = explode(',', file_get_contents(dirname(__FILE__) . "/hb.txt"));
$cityCode = array();
$newCodes = array();
foreach ($array as $val) {
    $codeFromString = explode('=>', $val)[1];
    array_push($cityCode, $codeFromString);
}



$cityArray = ["raipur", "bilaspur", "bhopal"];
$cityLink = ["raipur-raipur-main", "bilaspur-main", "bhopal-main"];

echo '<div id="crawlinfo"></div>';

for ($edition = 0; $edition < count($cityArray); $edition++) {
    $code = $cityCode[$edition];
    $link = "https://www.haribhoomi.com/full-page-pdf/epaper/pdf/" . $cityArray[$edition] . "-full-edition/" . $linkDate . "/" . $cityLink[$edition] . "/";

    if (!file_get_contents($link . $code)) {
        for ($i = 40; $i < 70; $i++) {
            $code = $cityCode[$edition] + $i;
            if ($cityArray[$edition] == "raipur") {
                $link2 = "https://www.haribhoomi.com/full-page-pdf/epaper/pdf/" . $cityArray[$edition] . "-full-edition/" . $linkDate . "/" . $cityArray[$edition] . "-main/";
                if (file_get_contents($link2 . $code)) {
                    $link = $link2;
                    array_push($newCodes, strval($code));
                    break;
                }
            }
            if (file_get_contents($link . $code)) {
                array_push($newCodes, strval($code));
                break;
            }
        }
        array_push($newCodes, $cityCode[$edition]);
    }

    echo PHP_EOL . $link . $code;

    $content = file_get_contents($link . $code);
    $section1 = explode('id="slider-epaper" class="imageGalleryWrapper"><li data-index="0" ', $content)[1];
    $section2 = explode('class="page-toolbar"><div id="page-level-nav"', $section1)[0];
    $linkArray = explode('data-big="', trim($section2));
    $number = 1;
    foreach ($linkArray as $links) {
        if (trim($links) != '') {
            $imageLink =  explode('"', $links)[0];
            array_push($images, $imageLink);
            $filepath = "HB_" . ucwords($cityArray[$edition]) . "_" . $date . "_" . $number . "_hin.jpg";
            array_push($imageNameToSave, $filepath);
            $number++;
        }
    }






    //echo '<script>document.getElementById("crawlinfo").innerHTML = "Crawling through: '.$paperArray[$edition].' Page '.$number.'"</script>';
    //ob_flush();
    //flush();


}
if (count($newCodes) != 0) {
    $file = fopen(dirname(__FILE__, 1) . "/hb.txt", 'w');
    $txt =  "raipur=>" . $newCodes[0] . ",bilaspur=>" . $newCodes[1] . ",bhopal=>" . $newCodes[2] . "";
    fwrite($file, $txt);
    fclose($file);
}
