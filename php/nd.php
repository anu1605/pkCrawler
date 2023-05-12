<?php

$cities = ["indore", "bhopal", "gwalior", "jabalpur", "raipur", "bilaspur"];
$cityCode = ["74", "33", "52", "59", "50", "71"];
$date = "12-may-2023";


for ($i = 0; $i < count($cities); $i++) {
    $city = $cities[$i];
    $code = $cityCode[$i];
    // $editionUrl = "https://epaper.naidunia.com/epaper/edition-today-" . $city . "-" . $code . ".html";

    // echo $editionUrl;
    // $noOfPages = (number_format(explode('</li>', explode('No of Pages:</strong>', explode('<ul class="list-unstyled text-left st-info p-20">', file_get_contents($editionUrl))[1])[1])[0]));


    $pageUrl = "https://epaper.naidunia.com/epaper/" . $date . "-" . $code . "-" . $city . "-edition-" . $city . ".html";

    $noOfPages =  number_format(explode('"', explode('<input type="hidden" name="totalpage" id="totalpage" value="', file_get_contents($pageUrl))[1])[0]);

    $array = (explode('<img data-src="',  explode('<div class="slidebox" id="item-zoom1">', file_get_contents($pageUrl))[1]));

    for ($j = 1; $j <= $noOfPages; $j++) {
        $link = explode('" title', $array[$j])[0];


        echo '<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <div>
            <img style="width:500px" alt="" class="photo" src="' . $link . '">
        </div>
    </body>

    </html>';
    }
}
