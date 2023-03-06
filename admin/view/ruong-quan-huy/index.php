<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kmess = 8; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);


 $sql = mysqli_query($kun->connect_db(), "SELECT * FROM `ruong_quan_huy` WHERE `status`='1' ORDER BY `time` DESC LIMIT $start, $kmess");
 $sql2 = mysqli_query($kun->connect_db(), "SELECT * FROM `ruong_quan_huy` WHERE `status`='0' ORDER BY `time` DESC LIMIT $start, $kmess");
 $tong1 = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `ruong_quan_huy` WHERE `status`='1'"));
 $tong2 = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `ruong_quan_huy` WHERE `status`='0"));
?>



<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>ĐĂNG BÁN RƯƠNG QUÂN HUY</b>
                            </h2>
                        </div>
                        <div class="body" style="height: 250px;">



<?php 
if(isset($_POST['submit'])) {

$quanhuy = intval($_POST['quanhuy']);
$soluong = intval($_POST['soluong']);

    if($quanhuy  && $soluong) {

    $i = 1;
    for($i; $i <= $soluong; $i++) {

        mysqli_query($kun->connect_db(), "INSERT INTO `ruong_quan_huy` SET 
            `quanhuy`='$quanhuy',
            `giatien`='9000',  
            `nguoimua` = 'null',         
            `status` = '1',
            `time`='".time()."'
        ");

    }

echo '<div class="alert alert-success fade in alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
    <strong>Success!</strong> Đăng bán rương thành công
</div>';
echo '<meta http-equiv=refresh content="1; URL=">';

    }else {
echo '<div class="alert alert-danger fade in alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
    <strong>Lỗi!</strong> Vui lòng nhập đầy đủ thông tin!
</div>';        
    }

}
?>



                            <form method="post" action="">

                            <div class="col-md-4 col-sm-12 col-lg-4">

                                <label for="quanhuy">Quân Huy:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="quanhuy" type="text" class="form-control" placeholder="Nhập Số Quân Huy Xuất Hiện Trong Rương">
                                    </div>
                                </div>
                            </div>

                            

                            <div class="col-md-4 col-sm-12 col-lg-4">

                                <label for="giatien">Số Lượng :</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="soluong" type="number" min="1" max="50" value="1" class="form-control" placeholder="Nhập Số Lượng...." required="">
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-12"> 
                                <center><button type="submit" name="submit" class="btn bg-light-blue">ĐĂNG BÁN RƯƠNG</button></center>
                            </div>
                               

                             </form>
                           </div>
</div>


<div class="row clearfix">



                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>RƯƠNG ĐANG BÁN</b>
                            </h2>

                        </div>
                        <div class="body">

<div class="table-responsive">  

<table class="table table-hover c-margin-t-40">
<thead>
   <tr>
	   <th>ID #</th>
	   <th>Quân Huy</th>
	   <th>Giá Tiền</th>
	   <th>Thời Gian</th>
	   <th>Thao tác</th>
   </tr>
</thead>
<tbody>

	<?php
		while ($row = mysqli_fetch_array($sql)) {
			?>

		<tr>
		   <th scope="row">#<?php echo $row['id'];?></th>
		   <td><?php echo $row['quanhuy'];?></td>
		   <td><?php echo number_format($row['giatien']);?> <sup>vnđ</sup></td>
		   <td><?php echo date('H:i d/m', $row['time']);?></td>
		<td>
		   <button onclick="del(<?php echo $row['id'];?>)" type="button" class="btn btn-danger btn-outline btn-xs m-r-5 tooltip-danger"><i class="material-icons">delete</i></button>
		</td>
		</tr> 

		<?php
		}
		?>

</tbody>
</table>
<!-- Phần hiển thị Nick -->
</div>
<?php
if ($tong1 > $kmess){
echo '<center>' . $kun->phantrang('/admin/ruong-quan-huy/', $start, $tong1, $kmess) . '</center>';
}
?>
</div>
</div>

</div>

<script type="text/javascript">
function del(id, name) {
	 if (confirm('Bạn có chắc muốn xóa hòm thính này?')) {
	 		location.href = '?modun=ruong-quan-huy&act=delete&id='+id;
		} else {
			alert('Hãy suy nghĩ kĩ trước khi xóa gì đó nhé!');
		}
}
</script>







                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>RƯƠNG ĐÃ BÁN</b>
                            </h2>

                        </div>
                        <div class="body">

<div class="table-responsive">  

<table class="table table-hover c-margin-t-40">
<thead>
   <tr>
	   <th>ID #</th>
	   <th>Người Mua</th>
	   <th>Quân Huy</th>
	   <th>Giá Tiền</th>
	   <th>Thời Gian</th>
   </tr>
</thead>
<tbody>

	<?php
		while ($row = mysqli_fetch_array($sql2)) {
			?>

		<tr>
		   <th scope="row">#<?php echo $row['id'];?></th>
		   <td><?php echo $row['nguoimua'];?></td>
		   <td><?php echo number_format($row['quanhuy']);?> <sup>Quân Huy</sup></td>
		   <td><?php echo number_format($row['giatien']);?> <sup>vnđ</sup></td>
		   <td><?php echo date('H:i d/m', $row['time']);?></td>
		</tr> 

		<?php
		}
		?>

</tbody>
</table>
<!-- Phần hiển thị Nick -->

</div>
<?php
if ($tong2 > $kmess){
echo '<center>' . $kun->phantrang('/admin/ruong-quan-huy/', $start, $tong2, $kmess) . '</center>';
}
?>
</div>
</div>

</div></div>



