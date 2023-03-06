<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user();

$id = base64_decode(base64_decode(base64_decode($_POST['csrf'])));

$vongquay = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `vongquay_quanhuy` WHERE `id`='".$id."'"));
if(!$vongquay) die(json_encode(array('status' => false,'item' => '','location' => '', 'msg' => 'Lỗi hệ thống!')));


// 1 - Thành Công
// 3 - Chưa đăng nhập
// 4 - ko đủ tiền
$tile = $_POST['tile']; //lát nhớ bọc chuổi cái nầy

if(empty($_POST['tile'])){
    $status = 4;
    $msg = 'Vui lòng nhập đầy đủ thông tin';
} else {
    
    
    
    if($tile == 1) {
        $nhan = 1;
    }
    
        if($tile == 2) {
        $nhan = 2;
    }
    
        if($tile == 3) {
        $nhan = 5;
    }
        if($tile == 4) {
        $nhan = 10;
    }

	require $_SERVER['DOCUMENT_ROOT'].'/lib/BiasedRandom/Element.php';
	require $_SERVER['DOCUMENT_ROOT'].'/lib/BiasedRandom/Randomizer.php';

	  $randomizer = new Randomizer();
  
	  $randomizer          ->add( new Element('1', $kun->vongquayquanhuy_gift($id, 1, 'tyle'))) 
	                       ->add( new Element('2', $kun->vongquayquanhuy_gift($id, 2, 'tyle'))) 
	                       ->add( new Element('3', $kun->vongquayquanhuy_gift($id, 3, 'tyle')))
	                       ->add( new Element('4', $kun->vongquayquanhuy_gift($id, 4, 'tyle'))) 
	                       ->add( new Element('5', $kun->vongquayquanhuy_gift($id, 5, 'tyle')))
	                       ->add( new Element('6', $kun->vongquayquanhuy_gift($id, 6, 'tyle'))) 
	                       ->add( new Element('7', $kun->vongquayquanhuy_gift($id, 7, 'tyle'))) 
	                       ->add( new Element('8', 100)) 
	                          ;
      	$kundeptrai = $randomizer->get();       
 	
		switch ($kundeptrai) {
		    case '1':
		    $location = 360;
		        break;
		    case '2':
		    $location = 320;        
		        break;
		    case '3':
		    $location = 270;        
		        break;
		    case '4':
		    $location = 230;        
		        break;
		    case '5':
		    $location = 180;       
		        break;
		    case '6':
		    $location = 130;        
		        break;
		    case '7':
		    $location = 85;        
		        break;
		    case '8':
		    $location = 44;        
		        break;
		    default:
		    $location = "";   
		        break;
		}
   $quanh = $kun->vongquayquanhuy_gift($id, $kundeptrai, 'quanhuy');
    $qh = $kun->vongquayquanhuy_gift($id, $kundeptrai, 'quanhuy') * $nhan;
    $text = $kun->vongquayquanhuy_gift($id, $kundeptrai, 'text');

	$status = 1; // true

    $msg = 'Chơi Thử: '.$text.'('.$quanh.' x '.$nhan.' = '.number_format($qh).' Quân Huy )';


}


echo json_encode(array('status' => $status, 'item' => $kundeptrai,'location' => $location, 'msg' =>$msg));