<?php

// Define front upload data path
define('SITE_URL', 'http://127.0.0.1/myweb/');
define('ABOUT_IMG_PATH', SITE_URL.'images/About/');

// Define backend upload data path
define('IPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'].'/myweb/images/');
define('ABOUT_FOLDER', 'About/');

// Function to check admin login
function adminLogin() {
    session_start();
    if (!isset($_SESSION['adminLogin']) || !$_SESSION['adminLogin']) {
        echo "<script>window.location.href='index.php';</script>";
    }
    // session_regenerate_id(true);
}

// Function to redirect
function redirect($url) {
    echo "<script>window.location.href='$url';</script>";
}

// Function to display alert messages
function alert($type, $msg) {
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    echo <<<alert
    <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
        <strong class="me-3">$msg</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
alert;
}

// Function to upload image
function uploadImage($image , $folder) {
    $valid_mime = ['image/jpeg','image/png','image/webp','image/jpg'];
    $img_mime = $image['type'];

    if (!in_array($img_mime, $valid_mime)) {
        return 'inv_img';
    } elseif (($image['size']/(1024*1024)) > 2) {
        return 'inv_img';
    } else {
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $rname = 'IMG_' . random_int(11111,99999) . ".$ext";
        $img_path = IPLOAD_IMAGE_PATH . $folder . $rname;
        if(move_uploaded_file($image['tmp_name'], $img_path)){
            return $rname;
        } else {
            return 'udp_fail';
        }
    }
}

?>
