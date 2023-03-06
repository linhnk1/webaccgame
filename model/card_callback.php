<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
require $_SERVER['DOCUMENT_ROOT'].'/lib/Pusher/Pusher.php';
$kun = new System;
$user = $kun->user();
	
	// Pusher RealTime Noti By Kunkey
	$options = array(
	    'encrypted' => true
	);
	$pusher = new Pusher(
	        '10d5ea7e7b632db09c72', 'a496a6f084ba9c65fffb', '234217', $options
	);


	$time = time();

        ///Chỗ này để lưu lại biến GET sang cho dễ làm, chạy web thực nhớ bỏ đi
        $myfile = fopen("log_card/log.txt", "a") or die("Unable to open file!");
        $txt = $_GET['request_id'] . "|" . $_GET['status'] . "|" . $_GET['message']  . "|" . date('d/m/y H:i:s', $time) . "\n";
        fwrite($myfile, $txt);
        fclose($myfile);


				if(isset($_GET['status'])) {

			$code = $_GET['status'];
			$tranid = $_GET['request_id'];

			$get = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `napthe` WHERE `tranid` = '".$tranid."' "));

 			$money = $get['amount'];

                            if($_GET['status'] == 1){
		                            	// thành công
					// update tiền
				 mysqli_query($kun->connect_db(), "UPDATE `users` SET `money` = `money` + '".$money."' WHERE `username` = '".$get['username']."' ");
				 	// update tiền nạp
				 mysqli_query($kun->connect_db(), "UPDATE `users` SET `money_nap` = `money_nap` + '".$money."' WHERE `username` = '".$get['username']."' ");
				 	// update trạng thái thẻ
			 	 mysqli_query($kun->connect_db(), "UPDATE `napthe` SET `status` = '1' WHERE `tranid`='".$tranid."'");   
				 	// update lịch sử giao dịch
				 mysqli_query($kun->connect_db(), "UPDATE `users` SET `diemtichluy` = `diemtichluy` + '5' WHERE `uid` = '".$get['username']."' ");
		    	// Update vào lịch sử user
			     mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`) VALUES ('".$get['username']."', 'Nạp Thẻ', 'Nạp Thẻ Tự Động', '+".number_format($money)."đ', 'Nạp Thẻ ".$get['type']." Thành Công!', '".time()."')");
			    // Pusher
				$data['type'] = 'success';
				$data['title'] = 'Nạp Thẻ Thành Công!';
				$data['message'] = 'Nạp Thẻ '.$get['type'].' Mệnh Giá '.number_format($money).'đ Thành Công!';
				$pusher->trigger($get['username'], 'realtime', $data);

                            }else {

	                            	// thất pại
	 		 	mysqli_query($kun->connect_db(), "UPDATE `napthe` SET `status` = '0' WHERE `tranid`='".$tranid."'");  
				$data['type'] = 'error';
				$data['title'] = 'Nạp Thẻ Thất Bại!';
				$data['message'] = 'Nạp Thẻ '.$get['type'].' Mệnh Giá '.number_format($money).'đ Thất Bại!';
				$pusher->trigger($get['username'], 'realtime', $data);


                            }

				}
