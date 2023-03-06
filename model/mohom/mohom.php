<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user();

$kc = 1; //tỉ lẹ thấp nhất của kim cương hồng
$kc1 = 20; //tỉ lẹ cao nhất của kim cương hồng
//t nghỉ ông nên chỉnh trong file chứ khó quá :#


$luot = 1;
$taikhoan = $user['username'];
$kimcuonghong =  rand($kc,$kc1);
$luotquay = $user['luotquay'];

if(!$_SESSION['token']) {
    die("<script>swal('Lỗi', 'Vui lòng đăng nhập để mở quà!', 'error');setTimeout(function(){location.href='/login.html';}, 1500);</script>");
}
// check tiền
if(1 > $luotquay) {
		die("<script>swal('Lỗi', 'Bạn Không Đủ Lượt Để Mở Quà!', 'error');</script>");
}

  
$cmd = "UPDATE `users` SET
   
   `luotquay` = luotquay - $luot, `kimcuonghong` = kimcuonghong + $kimcuonghong Where `username` = '$taikhoan'
   ";
   mysqli_query($kun->connect_db(), "INSERT INTO `lichsumohom` (`id`, `taikhoan`, `kimcuong`, `time`) VALUES (NULL, '".$user['username']."', '$kimcuonghong', '".time()."')");
   mysqli_query($kun->connect_db(), $cmd);
   echo "<script>swal('Thông Báo!', 'Bạn Nhận Được ".$kimcuonghong." Kim Cương Hồng Từ Hòm  Này!', 'success');</script>";
   

    



?>