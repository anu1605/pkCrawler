<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $image = $_GET['imagestring'];
    $imagearray = explode(',', $image);
    echo '<div style="display:grid; grid-template-columns: 33% 33% 33%;">
    <img style="width:100%; border:0; margin:0; padding:0;" class="thumbnail"  src="' . $imagearray[0] . '">
    <img style="width:100%; border:0; margin:0; padding:0;" class="thumbnail"  src="' . $imagearray[1] . '">
    <img style="width:100%; border:0; margin:0; padding:0;" class="thumbnail"  src="' . $imagearray[2] . '">
    <img style="width:100%; border:0; margin:0; padding:0;" class="thumbnail"  src="' . $imagearray[3] . '">
    <img style="width:100%; border:0; margin:0; padding:0;" class="thumbnail"  src="' . $imagearray[4] . '">
    <img style="width:100%; border:0; margin:0; padding:0;" class="thumbnail"  src="' . $imagearray[5] . '">
    </div>';
    ?>
</body>

</html>