<?php
if(!$kun->is_admin()) {
	 die('<center><h1>Access Denied!!!</h1></center>');
}else {
	mysqli_query($kun->connect_db(), "DELETE FROM `ruong_quan_huy` WHERE `id`='".$_GET['id']."' AND `status`='1'");
	echo '<script>location.href="/admin/?modun=ruong-quan-huy&act=index";</script>';
}
?>