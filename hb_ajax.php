<?php

if ($_POST['action'] == 'Clear_hb_image_folder') {

    $dir = './hb_images';
    foreach (glob($dir . '/*') as $file) {
        if (getimagesize($file)) {
            unlink($file);
        }
    }
    echo "Images deleted";
}

if ($_POST['action'] == 'update_cropped_image') {

    $image_data = $_POST['after_edit_cropped_imge'];
    $type = "png";
    list($type, $image_data) = explode(';', $image_data);
    list(, $image_data)      = explode(',', $image_data);
    $image_data = base64_decode($image_data);
    $image_path = './images/' . $_POST['file_name'];
    $destination = './images/';
    file_put_contents($image_path, $image_data);
    if (file_exists($image_path) == 1) {
        echo "Success";
    } else {
        return false;
    }
}
if ($_POST['action'] == 'upload_images_on_server') {
    $url = $_POST['image_url'];
    $response = file_get_contents($url);
    if ($response and file_put_contents("/var/www/d78236gbe27823/marketing/Whatsapp2/hb_images/" . $_POST['file_name'], $response)) {
        echo "Success";
    } else return false;
}
if ($_POST['action'] == 'save_full_page') {
    $url = $_POST['image_url'];
    $response = file_get_contents($url);
    if ($response and file_put_contents("/var/www/d78236gbe27823/marketing/Whatsapp2/images/" . $_POST['file_name'], $response)) {
        echo "Success";
    } else return false;
}
