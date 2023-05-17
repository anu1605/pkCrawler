<?php
error_reporting(E_ERROR);
$array = explode(',', file_get_contents(dirname(__FILE__, 1) . "/hb.txt"));
$cityCode = array();
$newCodes = array();
foreach ($array as $val) {
    $codeFromString = explode('=>', $val)[1];
    array_push($cityCode, $codeFromString);
}
$date = "2023/05/17";
$cityArray = ["raipur", "bilaspur", "bhopal"];
$cityLink = ["raipur-raipur-main", "bilaspur-main", "bhopal-main"];


for ($edition = 0; $edition < count($cityArray); $edition++) {
    $code = $cityCode[$edition];
    $link = "https://www.haribhoomi.com/full-page-pdf/epaper/pdf/" . $cityArray[$edition] . "-full-edition/" . $date . "/" . $cityLink[$edition] . "/";
    if (!file_get_contents($link . $code)) {
        for ($i = 50; $i < 60; $i++) {
            $code = $cityCode[$edition] + $i;
            if (file_get_contents($link . $code)) {
                array_push($newCodes, strval($code));
                break;
            }
        }
    }

    $content = file_get_contents($link . $code);
    $section1 = explode('id="slider-epaper" class="imageGalleryWrapper"><li data-index="0" ', $content)[1];
    $section2 = explode('class="page-toolbar"><div id="page-level-nav"', $section1)[0];
    $linkArray = explode('data-big="', trim($section2));
    foreach ($linkArray as $links) {
        echo explode('"', $links)[0] . PHP_EOL;
    }
}
if (count($newCodes) != 0)
    file_put_contents(dirname(__FILE__, 1) . "/hb.txt", "raipur=>" . $newCodes[0] . ",bilaspur=>" . $newCodes[1] . ",bhopal=>" . $newCodes[2] . "");
