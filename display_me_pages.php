<?php
error_reporting(E_ERROR);

// if (empty($_POST['images'])) {

$images = array();
$imageNameToSave = array();
$date = date('Ymd', time());
$filenamedate = date('Y-m-d', time());



$newspapers = ["MC", "KM", "YB"];
for ($edition = 0; $edition < 3; $edition++) {

    if ($edition == 0) {
        $number = 1;
        $datecode = file_get_contents(dirname(__FILE__) . "/mc.txt");



        $code = $datecode + 1;
        if (file_get_contents("https://www.mumbaichoufer.com/view/" . $code . "/mc")) {
            $file = fopen(dirname(__FILE__) . "/mc.txt", "w+");
            $datecode = $code;
            $txt = $$code;
            fwrite($file, $txt);
            fclose($file);
        }



        $content =   file_get_contents("https://www.mumbaichoufer.com/view/" . $datecode . "/mc");
        $getmcdate = trim(explode('-', explode('<title>Mumbaichoufer -', $content)[1])[0]);
        $mcdate = date("Y-m-d", strtotime($getmcdate));
        $firstId = explode('"', explode('{"mp_id":"', $content)[1])[0];
        $section1 = explode($firstId, $content)[1];
        $idarray = explode('{"mp_id":"', $section1);
        for ($id = 1; $id < count($idarray) - 1; $id++) {
            $imageId = explode('"', $idarray[$id])[0];
            $imagelink = "https://www.mumbaichoufer.com/map-image/" . $imageId . ".jpg";
            array_push($images, $imagelink);
            $filepath = "MC_" . "Mumbai" . "_" . $mcdate . "_" . $number . "_mar.jpg";
            array_push($imageNameToSave, $filepath);
            $number++;
        }
    }


    if ($edition == 1) {
        $number = 1;
        $content = file_get_contents("http://karnatakamalla.com/");
        $getdate = explode('&pn', explode('KARMAL_MAI&date=', $content)[1])[0];
        $time = strtotime($getdate);
        $kmdate = date('Ymd', $time);
        $kmfilenamedate = date('Y-m-d', $time);
        for ($page = 1; $page < 20; $page++) {
            for ($section = 1; $section < 30; $section++) {
                $content = file_get_contents("http://karnatakamalla.com/articlepage.php?articleid=KARMAL_MAI_" . $kmdate . "_" .  $page . "_" . $section);
                if ($content) {
                    $imagelink = explode('"', explode('id="artimg"  src="', $content)[1])[0];
                    $imageInfo = getimagesize($imagelink);
                    if (!$imageInfo)
                        break;

                    $width = $imageInfo[0];
                    $height = $imageInfo[1];

                    if ($height >= $width) {
                        array_push($images, $imagelink);
                        $filepath = "KM_" . "Karnataka" . "_" . $kmfilenamedate . "_" . $number . "_kan.jpg";
                        array_push($imageNameToSave, $filepath);
                        $number++;
                    }
                }
            }
        }
    }

    if ($edition == 2) {
        $number = 1;
        for ($page = 1; $page < 20; $page++) {


            for ($section = 1; $section < 30; $section++) {
                $content = file_get_contents("http://yeshobhumi.com/articlepage.php?articleid=YBHUMI_MAI_" . $date . "_" .  $page . "_" . $section);
                if ($content) {
                    $imagelink = explode('"', explode('id="artimg"  src="', $content)[1])[0];
                    $imageInfo = getimagesize($imagelink);
                    if (!$imageInfo)
                        break;

                    $width = $imageInfo[0];
                    $height = $imageInfo[1];
                    $minHeight = $width + intdiv(($width), 2);

                    if ($height >= $width) {
                        array_push($images, $imagelink);
                        $filepath = "YB_" . "Mumbai" . "_" . $filenamedate . "_" . $number . "_hin.jpg";
                        array_push($imageNameToSave, $filepath);
                        $number++;
                    }
                }
            }
        }
    }
}

$num_images = count($images);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Image Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-R5XEKj5P3q5uOITrB07uxwRQ2zHvNnL7tMNf+yozjmmiX3qyx5KMVPb/8+pxpsuMGGVdWXm1MzPNVn0EAni/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="display_images.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.12/css/jquery.Jcrop.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.12/js/jquery.Jcrop.min.js"></script>
    <style>
        .previews {
            width: 550px;

            .source {
                float: left;
                overflow: hidden;

            }

            .crop {
                float: right;
                overflow: hidden;

                img {
                    border: 1px solid black;
                }
            }
        }

        img {
            max-width: 400px;
            height: auto;
        }

        .jcrop-holder img {
            object-fit: contain !important;
            width: 100%;
            max-width: 500px;
            height: 400px;
        }

        .jcrop-holder,
        .crop {
            width: 500px;
            position: relative;
            height: 400px;
            aspect-ratio: 1/1;
        }

        .crop img {
            object-fit: contain !important;
            width: 500px;
            height: 350px;
            aspect-ratio: 1/1;
        }

        .previews {
            width: 100%;
            height: 500px;
            overflow-y: auto;
        }

        .jcrop-holder>div {
            height: initial;
        }

        #loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: #fff url('new_loader.gif') no-repeat center center;
        }

        /* Hide the loader element by default */
        #loader.hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="filter-label">
        <label for="filter">Filter:</label>
        <span id="filter-count"><?php echo "(" . $num_images . " of " . $num_images . ")"; ?></span>
    </div>
    <div>
        <input type="text" id="filter" name="filter" class="filter-input">
        <a href="javascript:void(0)" onclick="clear_me_folder()" class='btn btn-primary' style="float:right;">Clear me Folder</a>
    </div>
    <div style="margin-bottom: 20px;"></div>

    <div class="gallery">

        <?php

        $i = 0;
        for ($i = 0; $i < count($images); $i++) {

            $image = $images[$i];
            $filename = $imageNameToSave[$i];


            echo '<div class="image" id="' . $filename . '"><img class="thumbnail" src="' . $image . '" alt="' . $filename . '" onclick = initCropper("' . $image . '","' . $filename . '")><div class="filename">' . $filename . '&nbsp;&nbsp;<a onclick=saveFullPage("' . $image . '","' . $filename . '") style="margin-left: 100px;border: 2px solid green;padding: 5px;border-radius: 5px;cursor: pointer;">Save Full Page</a></div></div>';
        }
        ?>
    </div>
    <form method="POST" action="display_me_pages.php" id="submit_form">
        <input type="hidden" name="image_url" id="image_url">
        <input type="hidden" name="file_name" id="file_name">
        <input type="hidden" name="after_edit_cropped_imge" id="after_edit_cropped_imge">
        <input type="hidden" name="images" value="<?php echo implode(',', $images); ?>">
        <input type="hidden" name="imageNameToSave" value="<?php echo implode(',', $imageNameToSave); ?>">
        <input type="hidden" name="action" id="action">
        <input type="hidden" name="paper" id="paper" value="me">
        <button type="submit" style="display:none;"></button>
    </form>
    <div id="loader"></div>
    <div class="modal fade" id="edit_image_ad_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width:900px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Image Edit</h5>
                    <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="edit_image">
                    <div class="previews">
                        <div class="source">
                            <h3>Source image</h3>
                            <div id="image_input"></div>
                            <div id="image_input_original" style="display:none;"></div>
                        </div>
                        <div class="crop">
                            <h3>Crop preview</h3>
                            <img id="image_output" />
                            <img id="image_output_original_size" style="display:none;" />
                            <input type="hidden" id="edit_file_name" name="edit_file_name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" class="btn btn-secondary" onclick="update_image()">Save</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#loader").fadeOut();
        });

        // claer jargan image folder
        function clear_me_folder() {
            $("#action").val('Clear_me_image_folder');
            var formData = $("#submit_form").serialize();
            $.ajax({
                type: 'POST',
                url: 'paper_ajax.php',
                data: formData,
                beforeSend: function() {
                    $("#loader").fadeIn();
                },
                success: function(response) {
                    $("#loader").fadeOut();
                    alert(response);
                },
                error: function(xhr, status, error) {
                    $("#loader").fadeOut();
                    alert("Faced an error");
                }
            });
        }

        // update cropped image
        function update_image() {
            $("#after_edit_cropped_imge").val($("#image_output_original_size").attr('src'));
            $("#action").val('update_cropped_image');
            var formData = $("#submit_form").serialize();
            $.ajax({
                type: 'POST',
                url: 'paper_ajax.php',
                data: formData,
                beforeSend: function() {
                    $("#loader").fadeIn();
                },
                success: function(response) {
                    $("#loader").fadeOut();
                    alert("Cropped Successfully");
                    $("#edit_image_ad_modal").modal('hide');
                    setTimeout(document.getElementById("file_name").scrollIntoView({
                        behavior: 'smooth'
                    }), 2000);
                    document.getElementById("modal").style.display = "none";
                },
                error: function(xhr, status, error) {
                    $("#loader").fadeOut();
                    alert("Faced an error");
                }
            });
        }
        // download image on server

        function saveFullPage(image_name, filename) {
            $("#image_url").val(image_name);
            $("#file_name").val(filename);
            $("#action").val('save_full_page');
            var formData = $("#submit_form").serialize();
            $.ajax({
                type: 'POST',
                url: 'paper_ajax.php',
                data: formData,
                beforeSend: function() {
                    $("#loader").fadeIn();
                },
                success: function(response) {
                    $("#loader").fadeOut();
                    alert("Full Page Saved For Processing");
                },
                error: function(xhr, status, error) {
                    $("#loader").fadeOut();
                    alert("Faced an error");
                }
            });
        }

        function initCropper(image_name, filename) {
            $("#image_url").val(image_name);
            $("#file_name").val(filename);
            $("#action").val('upload_images_on_server');
            var formData = $("#submit_form").serialize();
            $.ajax({
                type: 'POST',
                url: 'paper_ajax.php',
                data: formData,
                beforeSend: function() {
                    $("#loader").fadeIn();
                },
                success: function(response) {
                    $("#loader").fadeOut();
                    var image_url = './me_images/' + filename;
                    var file_name = filename;
                    cropped_images(image_url, file_name);
                },
                error: function(xhr, status, error) {
                    $("#loader").fadeOut();
                    alert("Faced an error");
                }
            });
        }
        var multiplyFactor;
        // Crop Images
        function cropped_images(image_name, filename) {
            $("#image_input").html("");
            $('#image_output').attr('src', '');
            $("#image_url").val(image_name);
            $("#file_name").val(filename);
            $("#edit_image_ad_modal").modal('show');
            $("#edit_file_name").val(filename);

            var imageUrl = image_name;
            var maxWidth = 400;

            var image = new Image();

            image.onload = function() {

                var canvasinput = document.createElement('canvas');
                var canvasOriginalSize = document.createElement('canvas');

                var width = image.width;
                var height = image.height;

                multiplyFactor = 1;

                if (width > maxWidth) {
                    height *= maxWidth / width;
                    multiplyFactor = maxWidth / width;
                    width = maxWidth;
                }

                canvasinput.width = width;
                canvasinput.height = height;
                canvasOriginalSize.width = image.width;
                canvasOriginalSize.height = image.height;

                var ctx = canvasinput.getContext('2d');
                var ctxOriginal = canvasOriginalSize.getContext('2d');

                ctx.drawImage(image, 0, 0, image.width, image.height, 0, 0, width, height);
                ctxOriginal.drawImage(image, 0, 0, image.width, image.height, 0, 0, image.width, image.height);


                $('#image_input').html(['<img src="', canvasinput.toDataURL(), '"/>'].join(''));
                $('#image_input_original').html(['<img src="', canvasOriginalSize.toDataURL(), '"/>'].join(''));

                var img = $('#image_input img')[0];
                var imgOriginal = $('#image_input_original img')[0];

                var canvasoutput = document.createElement('canvas');
                var canvasOriginalForOutput = document.createElement('canvas');

                var ctx = canvasoutput.getContext('2d');
                var ctxOriginalForOutput = canvasOriginalForOutput.getContext('2d');

                $('#image_input img').Jcrop({
                    bgColor: 'black',
                    bgOpacity: .6,
                    onSelect: imgSelect
                });

                $('#image_input_original img').Jcrop({
                    bgColor: 'black',
                    bgOpacity: .6,
                    onSelect: imgSelect
                });

                function imgSelect(selection) {

                    myx = selection.x / multiplyFactor;
                    myy = selection.y / multiplyFactor;
                    myw = selection.w / multiplyFactor;
                    myh = selection.h / multiplyFactor;

                    canvasoutput.width = selection.w;
                    canvasoutput.height = selection.h;

                    canvasOriginalForOutput.width = myw;
                    canvasOriginalForOutput.height = myh;

                    ctx.drawImage(img, selection.x, selection.y, selection.w, selection.h, 0, 0, canvasoutput.width, canvasoutput.height);
                    ctxOriginalForOutput.drawImage(imgOriginal, myx, myy, myw, myh, 0, 0, canvasOriginalForOutput.width, canvasOriginalForOutput.height);

                    $('#image_output').attr('src', canvasoutput.toDataURL());
                    $('#image_output_original_size').attr('src', canvasOriginalForOutput.toDataURL());
                }
            };
            image.src = imageUrl;
        }

        // Filter images by filename

        function filterImages() {
            var filter = document.getElementById("filter").value.toLowerCase();
            var images = document.querySelectorAll(".gallery .image");
            var num_matches = 0;

            for (var i = 0; i < images.length; i++) {
                var filename = images[i].querySelector(".filename").textContent.toLowerCase();
                if (filename.includes(filter)) {
                    images[i].style.display = "block";
                    num_matches++;
                } else {
                    images[i].style.display = "none";
                }
            }

            // Update the filter count
            document.getElementById("filter-count").textContent = "(" + num_matches + " of " + <?php echo $num_images; ?> + ")";
        }

        document.getElementById("filter").addEventListener("blur", filterImages);

        // Call the function on page load
        window.addEventListener("load", filterImages);
    </script>
</body>

</html>