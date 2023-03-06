<?php
if(!$kun->is_admin()) {
	 die('<center><h1>Access Denied!!!</h1></center>');
}else {
	mysqli_query($kun->connect_db(), "DELETE FROM `vongquay_quanhuy` WHERE `id`='".$_GET['id']."'");
	mysqli_query($kun->connect_db(), "DELETE FROM `vongquay_quanhuy_gift` WHERE `id_vongquay`='".$_GET['id']."'");
	echo '<script>location.href="/admin/?modun=vongquay_quanhuy&act=index";</script>';
}
?>