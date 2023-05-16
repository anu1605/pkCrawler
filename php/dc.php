<?php
error_reporting(E_ERROR);
$cityCode = ["HYD", "CHN", "VIJ", "KRM", "NEL", "ATP", "CBE", "MAD"];
$date = "2023-05-16";

$pageNumber = 30;
$sectionNumber = 30;



for ($city = 0; $city < 1; $city++) {
    for ($i = 1; $i <= $pageNumber; $i++) {
        if (strlen(file_get_contents("http://103.241.136.50/epaper/DC/" . $cityCode[$city] . "/510X798/" . $date . "/b_images/" . $cityCode[$city] . "_" . $date . "_maip" . $i . "_1.jpg") != 0))
            for ($j = 1; $j < $sectionNumber; $j++) {
                $link = "http://103.241.136.50/epaper/DC/" . $cityCode[$city] . "/510X798/" . $date . "/b_images/" . $cityCode[$city] . "_" . $date . "_maip" . $i . "_" . $j . ".jpg";
                if (strlen(file_get_contents($link)) == 0)
                    break;
                else {
                    echo $link;
                }
            }
    }
}

?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container"><img src="<?php  ?>" alt="" id="image"></div>
</body>

</html> -->