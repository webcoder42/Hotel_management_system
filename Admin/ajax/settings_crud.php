<?php
require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'get_general') {
        $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
        $values = [1];
        $res = select($q, $values, "i");
        $data = mysqli_fetch_assoc($res);
        echo json_encode($data);
        exit;
    } elseif ($_POST['action'] === 'get_contacts') {
        $q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
        $values = [1];
        $res = select($q, $values, "i");
        $data = mysqli_fetch_assoc($res);
        echo json_encode($data);
        exit;
    }
}

if (isset($_POST['updateGeneral'])) {
    $frm_data = filtration($_POST);
    $q = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `sr_no`=?";
    $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
    $res = update($q, $values, 'ssi');

    if (!$res) {
        die(mysqli_error($con));
    }

    echo $res;
    exit;
}

if (isset($_POST['udp_shutdown'])) {
    $frm_data = ($_POST['udp_shutdown'] == 0) ? 1 : 0;
    $q = "UPDATE `settings` SET `shut_down`=? WHERE `sr_no`=?";
    $values = [$frm_data, 1];

    $res = update($q, $values, 'ii');
    
    echo $res;
    exit;
}


if (isset($_POST['updateContacts'])) {
    $frm_data = filtration($_POST);
    $q = "UPDATE `contact_details` SET `address`=?, `gmap`=?, `pn1`=?, `pn2`=?, `email`=?, `fb`=?, `insta`=?, `tw`=?, `iframe`=? WHERE `sr_no`=?";
    $values = [$frm_data['address'], $frm_data['gmap'], $frm_data['pn1'], $frm_data['pn2'], $frm_data['email'], $frm_data['fb'], $frm_data['insta'], $frm_data['tw'], $frm_data['iframe'], 1];
    $res = update($q, $values, 'sssssssssi');

    if (!$res) {
        die(mysqli_error($con));
    }

    echo $res;
    exit;
}



?>
