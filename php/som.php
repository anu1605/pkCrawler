<?php

for ($i  = 1; $i < 30; $i++) {
    $link = "https://epaper.starofmysore.com/epaper/edition/2272/star-mysore/page/" . $i;
    $content  = file_get_contents($link);
    echo strlen($content) . PHP_EOL;
    if ($content) {
        $section1 = explode(' id="mapimage" usemap="#epapermap" src="', $content)[1];
        $link = explode('&width=', $section1)[0];
        echo $link . PHP_EOL;
    } else break;
}
