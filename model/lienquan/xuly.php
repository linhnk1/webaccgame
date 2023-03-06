<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user();

$id = $_POST['id'];

if(!$_SESSION['token']) {
    die("<script>swal('Lỗi', 'Bạn Cần Đăng Nhập', 'error');setTimeout(function(){location.href='/signin.html';}, 1500);</script>");
}

$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `lienquan` WHERE `id`='".$id."' AND `status`='1'"));


if($row['giatien'] > $user['money']) {
    die("<script>swal('Lỗi', 'Bạn Không Đủ Tiền Để Mua Nick Liên Quân Này!', 'error');</script>");
}



if(!$row['id']) {
    die("<script>swal('Lỗi', 'Nick Liên Quân Này Không Còn Tồn Tại!', 'error');</script>");
}

    	// Update vào lịch sử user
    mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`) VALUES ('".$user['username']."', 'Mua Nick Liên Quân', 'Mua Nick Liên Quân #".$row['id']."', '-".number_format($row['giatien'])."đ', 'Mua Nick Liên Quân #".$row['id']."', '".time()."')");
    	// Update Tiền User
    mysqli_query($kun->connect_db(),"UPDATE `users` SET `money` = `money` - '".$row['giatien']."' WHERE `username` = '".$user["username"]."'");
    	// Update Trạng thái hòm thính
    mysqli_query($kun->connect_db(),"UPDATE `lienquan` SET `nguoimua` = '".$user['username']."', `status`='0' WHERE `id` = '".$id."'");

    echo "<script>swal('Thông Báo!', 'Bạn Vừa Mua Nick Liên Quân #".$row['id']." Thành Công! Vui Lòng Kiểm Tra Lại Thông Tin Nick Trong Phần Tài Khoản Đã Mua!', 'success');reload_money();</script>";
?>
