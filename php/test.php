<?php


$images = array();
$imageNameToSave = array();

// $date = date('Y-m-d', time());
// $linkDate = date('Y/m/d', time());






echo '<div id="crawlinfo"></div>';
$date = date('Y-m-d', time());


$content = file_get_contents("https://samajaepaper.in/epaper/1/73/" . $date . "/1");
$pageArray = explode("class='map", $content);




$number = 1;
for ($page = 1; $page < count($pageArray); $page++) {
    $sections = explode("show_pop('", $pageArray[$page]);
    file_put_contents(dirname(__FILE__) . "/test.txt", $sections[1]);
    for ($sec = 1; $sec < count($sections); $sec++) {
        $name = explode("','", $sections[$sec])[1];
        $link = "https://samajaepaper.in/epaperimages/19052023/19052023-md-bh-" . $page . "/" . $name . ".jpg";
        array_push($images, $link);
        $filepath = "SMJ_Bhubaneswar"  . "_" . $date . "_" . $number . "_ori.jpg";
        array_push($imageNameToSave, $filepath);
        $number++;
    }
}










//echo '<script>document.getElementById("crawlinfo").innerHTML = "Crawling through: '.$paperArray[$edition].' Page '.$number.'"</script>';
//ob_flush();
//flush();




$num_images = count($images);
