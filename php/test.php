<?php


$content = file_get_contents("https://samajaepaper.in/epaper/1/73/2023-05-18/1");
$pageArray = explode("class='map", $content);




for ($page = 1; $page < count($pageArray); $page++) {
    $sections = explode("show_pop('", $pageArray[$page]);
    file_put_contents(dirname(__FILE__) . "/test.txt", $sections[1]);
    for ($sec = 1; $sec < count($sections); $sec++) {
        $name = explode("','", $sections[$sec])[1];
        echo "https://samajaepaper.in/epaperimages/18052023/18052023-md-bh-" . $page . "/" . $name . ".jpg" . PHP_EOL;
    }
}
