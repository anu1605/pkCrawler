<?php

// $data = file_get_contents("http://sahara.4cplus.net/epaperimages//26052023//26052023-lu-md-1ll.png");
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, "http://sahara.4cplus.net/epaperimages//26052023//26052023-lu-md-1ll.png");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
$data = curl_exec($ch);
curl_close($ch);


$remoteImage = "http://sahara.4cplus.net/epaperimages//26052023//26052023-lu-md-1ll.png";
$imginfo = getimagesize($remoteImage);
// header('Content-type: {$imginfo["mime"]}');

readfile($remoteImage);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <img src="" alt="">
</body>

</html>