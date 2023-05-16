
<?php

$content = file_get_contents("https://epaper.prabhatkhabar.com/");
$section1 = explode('<h2 class="section_heading_amp"> Ranchi </h2>', $content)[1];
$section2 = explode("<!-- container end -->", $section1)[0];
$section3 = explode('<div class="col-12 sm-col-4 md-col-4 card-box">                      <a href="', $section2);
// echo gettype($section2[0]);
// file_put_contents(dirname(__FILE__, 1) . "/test.txt", $section3);
for ($i = 0; $i < count($section3); $i++) {
    $linkSection = $section3[$i];
    if (trim($linkSection) != '') {
        echo str_replace("<br>", "", $linkSection);
    }
}
?>
