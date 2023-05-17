<?php
$date = "2023-05-17";
$cities = ["Delhi", "Mumbai", "Lucknow", "Noida", "Ghaziabad", "faridabad", "Gurugram"];
// $cityLink = ["delhi", "mumbai", "lucknow-kanpur", "noida", "ghaziabad", "faridabad", "gurugram"];
$cityLinks = ["delhi/" . $date . "/13", "mumbai/" . $date . "/16", "lucknow-kanpur/" . $date . "/9", "noida/" . $date . "/19", "ghaziabad/" . $date . "/20", "faridabad/" . $date . "/24", "gurugram/" . $date . "/25"];



for($e)
$link = "https://epaper.navbharattimes.com/" . $cityLinks[0] . "/page-1.html";


$content = file_get_contents($link);
$section1 = explode("class='orgthumbpgnumber'>1</div>", $content)[1];
$section2 = explode('<div id="rsch"', $section1)[0];
$linkArray = explode("<div class='imgd'><img src='", $section2);
foreach ($linkArray as $link)
    $imageLink =  str_replace('ss', '', trim(explode("' class='pagethumb'", $link)[0]));
