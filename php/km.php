<?php
$images = array();
$imageNameToSave = array();
$filenamedate = date('Ymd', time());



$newspapers = ["MC", "KM", "YB"];
$languaudeCode = ["mar", "kan", "hin"];
for ($edition = 0; $edition < count($newspapers); $edition++) {

    if ($edition == 0) {
        $number = 1;

        $datecode = file_get_contents(dirname(__FILE__) . "/mc.txt");


        for ($count = 0; $count < 20; $count++) {
            $datecode = $datecode + $count;
            if (file_get_contents("https://www.mumbaichoufer.com/view/" . $datecode . "/mc")) {
                $file = fopen(dirname(__FILE__) . "/mc.txt", "w+");
                $txt = $datecode;
                fwrite($file, $txt);
                fclose($file);
                break;
            }
        }

        $content =   file_get_contents("https://www.mumbaichoufer.com/view/" . $datecode . "/mc");
        $url = "https://www.mumbaichoufer.com/view/" . $datecode . "/mc/10";
        $section1 = explode($url, $content)[0];
        $idarray = explode('"mp_id":"', $section1);
        for ($id = 1; $id < count($idarray); $id++) {
            $imageId = explode('"', $idarray[$id])[0];
            $imagelink = "https://www.mumbaichoufer.com/map-image/" . $imageId . ".jpg";
            array_push($images, $imagelink);
            $filepath = "MC_" . "Mumbai" . "_" . $filenamedate . "_" . $number . "_mar.jpg";
            array_push($imageNameToSave, $filepath);
            $number++;
        }
    }
    // if ($edition == "KM") {
    //     $number = 1;
    //     for ($page = 1; $page < 20; $page++) {
    //         for ($section = 1; $section < 30; $section++) {
    //             $content = file_get_contents("http://karnatakamalla.com/articlepage.php?articleid=KARMAL_MAI_" . $filenamedate . "_" .  $page . "_" . $section);
    //             if ($content) {
    //                 $imagelink = explode('"', explode('id="artimg"  src="', $content)[1])[0];
    //                 $imageInfo = getimagesize($imagelink);
    //                 if (!$imageInfo)
    //                     break;

    //                 $width = $imageInfo[0];
    //                 $height = $imageInfo[1];

    //                 if ($height >= $width) {
    //                     array_push($images, $imagelink);
    //                     $filepath = "KM_" . "Karnataka" . "_" . $filenamedate . "_" . $number . "_kan.jpg";
    //                     array_push($imageNameToSave, $filepath);
    //                     $number++;
    //                 }
    //             }
    //         }
    //     }
    // }

    // if ($edition == "YB") {
    //     $number = 1;
    //     for ($page = 1; $page < 20; $page++) {


    //         for ($section = 1; $section < 30; $section++) {
    //             $content = file_get_contents("http://yeshobhumi.com/articlepage.php?articleid=YBHUMI_MAI_" . $filenamedate . "_" .  $page . "_" . $section);
    //             if ($content) {
    //                 $imagelink = explode('"', explode('id="artimg"  src="', $content)[1])[0];
    //                 $imageInfo = getimagesize($imagelink);
    //                 if (!$imageInfo)
    //                     break;

    //                 $width = $imageInfo[0];
    //                 $height = $imageInfo[1];
    //                 $minHeight = $width + intdiv(($width), 2);

    //                 if ($height >= $width) {
    //                     array_push($images, $imagelink);
    //                     $filepath = "YB_" . "Mumbai" . "_" . $filenamedate . "_" . $number . "_hin.jpg";
    //                     array_push($imageNameToSave, $filepath);
    //                     $number++;
    //                 }
    //             }
    //         }
    //     }
    // }
}

print_r($images);
print_r($imageNameToSave);
// $datecode = file_get_contents(dirname(__FILE__) . "/mc.txt");
// echo "https://www.mumbaichoufer.com/view/" . $datecode . "/mc";
// if (!file_get_contents("https://www.mumbaichoufer.com/view/" . $datecode . "/mc"))
//     for ($count = 1; $count < 20; $count++) {
//         $datecode = $datecode + $count;

//         if (file_get_contents("https://www.mumbaichoufer.com/view/" . $code . "/mc")) {
//             $file = fopen(dirname(__FILE__) . "/mc.txt", "w+");
//             $txt = $datecode;
//             fwrite($file, $txt);
//             fclose($file);
//         }
//     }


// $content =   file_get_contents("https://www.mumbaichoufer.com/view/" . $datecode . "/mc");
// $idarray = explode('"mp_id":"', $content);
// for ($id = 1; $id < count($idarray); $id++) {
//     $imageId = explode('"', $idarray[$id])[0];
//     $imagelink = "https://www.mumbaichoufer.com/map-image/" . $imageId . ".jpg";
//     echo $imagelink . PHP_EOL;
// }
