<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';

$kun = new System;
$user = $kun->user();
$_get_settings = $kun->settings('napthe');



if(!$_SESSION['token']) {
   die(json_encode(array('status' => false, 'msg' => 'Bạn Chưa Đăng Nhập!')));
}



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


        $api_key = '8ce2efd0-5112-4d82-8fd5-d4427a98883f';
        $request_id = rand(1000000, 9999999);  //Mã đơn hàng của bạn
        $callback = 'https://shopthanhhungff.com/model/ketqua_cbback.php';
        
$url = "http://gachthe.vn/API/NapThe?APIKey=$api_key&Network=$type&CardCode=$pin&CardSeri=$serial&CardValue=$amount&URLCallback=$callback&TrxID=$request_id";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
$json = json_decode($data, true);


 if($json['Code'] == 1)
 {
     // thẻ đúng
                                $cmd = "INSERT INTO `napthe` SET `username` = '".$user['username']."', `type` = '".$type."', `amount` = '".$amount."', `serial` = '".$serial."', `pin` = '".$pin."', `tranid` = '".$request_id."', `status` = '2', `time` = '".time()."'";
                           mysqli_query($kun->connect_db(), $cmd);
                        die(json_encode(array('status' => true, 'msg' => 'Thẻ '.$type.' mệnh giá '.number_format($amount).'đ đã được lưu vào hệ thống thành công! Vui lòng chờ duyệt thẻ trong 30s - 2 phút!')));
 }
 else if($json['Code'] == 0)
 {
     // thẻ sai
      die(json_encode(array('status' => false, 'msg' => $json['Message'])));
 }
 else 
 {
  // không xác định
                            die(json_encode(array('status' => false, 'msg' => 'Lỗi Không Xác Định!')));
 }
 

