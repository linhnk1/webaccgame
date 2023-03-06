<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';

$kun = new System;
$user = $kun->user();
$_get_settings = $kun->settings('napthe');



if(!$_SESSION['token']) {
   die(json_encode(array('status' => false, 'msg' => 'Bạn Chưa Đăng Nhập!')));
}


switch ($_get_settings['kieunap']) {

    case 'napcham': // NAJP CHAAMJ

$loaithe = $_POST['type'];
$menhgia = $_POST['amount'];
$seri = str_replace('/[^0-9]/', '', $_POST['serial']);
$mathe = str_replace('/[^0-9]/', '', $_POST['pin']);

$arr_loaithe = array("VIETTEL", "VINAPHONE", "MOBIFONE");
$arr_menhgia = array("10000", "20000", "50000", "100000", "200000", "500000","1000000");

 if (!in_array($loaithe, $arr_loaithe)) die(json_encode(array('status' => false, 'msg' => 'Lỗi Hệ Thống!')));
 if (!in_array($menhgia, $arr_menhgia)) die(json_encode(array('status' => false, 'msg' => 'Lỗi Hệ Thống!')));
 if (!$seri) die(json_encode(array('status' => false, 'msg' => 'Vui Lòng Nhập Vào Mã Serial!')));
 if (!$mathe) die(json_encode(array('status' => false, 'msg' => 'Vui Lòng Nhập Vào Mã Thẻ!')));


if($kun->check_int($seri) == false) die(json_encode(array('status' => false, 'msg' => 'Mã Serial Phải Là Dạng Số!')));

if($kun->check_int($mathe) == false) die(json_encode(array('status' => false, 'msg' => 'Mã Thẻ Phải Là Dạng Số!')));

if(strlen($seri) < 10) die(json_encode(array('status' => false, 'msg' => 'Độ dài mã Seri không hợp lệ!')));
if(strlen($mathe) < 10) die(json_encode(array('status' => false, 'msg' => 'Độ dài mã thẻ không hợp lệ 1!')));





$tranid = rand(1000,999999);
$cmd = "INSERT INTO `napthe` SET `username` = '".$user['username']."', `type` = '".$loaithe."', `amount` = '".$menhgia."', `serial` = '".$seri."', `pin` = '".$mathe."', `tranid` = '".$tranid."', `status` = '2', `time` = '".time()."'";
mysqli_query($kun->connect_db(), $cmd);


die(json_encode(array('status' => true, 'msg' => 'Thẻ '.$loaithe.' mệnh giá '.number_format($menhgia).'đ đã được lưu vào hệ thống thành công! Vui lòng chờ admin duyệt thẻ trong 30p - 1h!')));


        break;


    case 'naptudong': // NẠP TỰ ĐỘNG

               if (!isset($_POST['type']) || !isset($_POST['serial']) || !isset($_POST['pin']) || !isset($_POST['amount'])) {
                    die(json_encode(array('status' => false, 'msg' => 'Bạn cần nhập đầy đủ thông tin!')));
                }

                    $type = $_POST['type'];
                    $serial = $_POST['serial'];
                    $pin = $_POST['pin'];
                    $amount = $_POST['amount'];
 
                $check = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `napthe` WHERE `pin` = '".$pin."' AND `serial` = '".$serial."'"));

                    if ($check > 0) {
                        die(json_encode(array('status' => false, 'msg' => 'Thẻ này đã tồn tại trên hệ thống!')));
                    }




    $_get_brick = $kun->settings('brick');  


    if($_get_brick['site'] == 'thesieure') {
        $url = 'https://doithe.vn/chargingws/v2';
    }else if ($_get_brick['site'] == 'naptudong') {
        $url = 'http://api.naptudong.com/chargingws/v2';
    }else {
        die(json_encode(array('status' => false, 'msg' => 'Hệ Thống Nạp Thẻ Đang Gặp Sự Cố!')));
    }



        $request_id = rand(100000000, 999999999);  //Mã đơn hàng của bạn
        $command = 'charging';  // Nap the
        $partner_id = $_get_brick['partner_id'];
        $partner_key = $_get_brick['partner_key'];

        $dataPost = array();
        $dataPost['request_id'] = $request_id;
        $dataPost['code'] = $pin;
        $dataPost['partner_id'] = $partner_id;
        $dataPost['serial'] = $serial;
        $dataPost['telco'] = $type;
        $dataPost['command'] = $command;
        ksort($dataPost);
        $sign = $partner_key;
        foreach ($dataPost as $item) {
            $sign .= $item;
        }
        
        $mysign = md5($sign);

        $dataPost['amount'] = $amount;
        $dataPost['sign'] = $mysign;

        $data = http_build_query($dataPost);


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        curl_setopt($ch, CURLOPT_REFERER, $actual_link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        $obj = json_decode($result);

        if ($obj->status == 99) {
            //Gửi thẻ thành công, đợi duyệt.
                           $cmd = "INSERT INTO `napthe` SET `username` = '".$user['username']."', `type` = '".$type."', `amount` = '".$amount."', `serial` = '".$serial."', `pin` = '".$pin."', `tranid` = '".$request_id."', `status` = '2', `time` = '".time()."'";
                           mysqli_query($kun->connect_db(), $cmd);
                        die(json_encode(array('status' => true, 'msg' => 'Thẻ '.$type.' mệnh giá '.number_format($amount).'đ đã được lưu vào hệ thống thành công! Vui lòng chờ duyệt thẻ trong 30s - 2 phút!')));

        } elseif ($obj->status == 1) {
            $cmd = "INSERT INTO `napthe` SET `username` = '".$user['username']."', `type` = '".$type."', `amount` = '".$amount."', `serial` = '".$serial."', `pin` = '".$pin."', `tranid` = '".$request_id."', `status` = '2', `time` = '".time()."'";
            mysqli_query($kun->connect_db(), $cmd);
            die(json_encode(array('status' => true, 'msg' => 'Thẻ '.$type.' mệnh giá '.number_format($amount).'đ đã được lưu vào hệ thống thành công! Vui lòng chờ duyệt thẻ trong 30s - 2 phút!')));
        } elseif ($obj->status == 2) {
                        die(json_encode(array('status' => false, 'msg' => 'Sai Mệnh Giá Thẻ!')));
        } elseif ($obj->status == 3) {
                        die(json_encode(array('status' => false, 'msg' => 'Thẻ Lỗi!')));
        } elseif ($obj->status == 4) {
                        die(json_encode(array('status' => false, 'msg' => 'Hệ Thống Nạp Thẻ Đang Bảo Trì!')));
        } else {
                        die(json_encode(array('status' => false, 'msg' => $obj->message)));
        }


        break;
}

