<?php
defined('KUNKEYPR') or exit('Restricted Access');
$cname = $_GET['cname'];

 $sql1 = mysqli_query($kun->connect_db(), "SELECT * FROM `random_lienquan_nick` WHERE `cname`='".$cname."' AND `status`='true' ORDER BY `time` DESC");

 $sql2 = mysqli_query($kun->connect_db(), "SELECT * FROM `random_lienquan_nick` WHERE `cname`='".$cname."' AND `status`='false' ORDER BY `time` DESC");

?>



			<div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>DANH SÁCH ACC RANDOM LIÊN QUÂN ĐANG BÁN</b>
                            </h2>

                        </div>
                        <div class="body">

	
<div class="table-responsive">  
<table class="table table-hover c-margin-t-40">
<thead>
   <tr>
	   <th>STT</th>
	   <th>Username</th>
	   <th>Password</th>
	   <th>Thời Gian</th>
     <th>Thao Tác</th>
   </tr>
</thead>
<tbody>
                        	<?php 

                        	while ($row = mysqli_fetch_array($sql1)) {
                        		?>
<tr>
   <th scope="row">#<?php echo $row['id'];?></th>
   <td><?php echo $row['username'];?></td>
   <td><?php echo $row['password'];?></td>
   <td><?php echo date('d/m G:i', $row['time']);?></td>
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

						</div>
						</div>

						</div>

<script type="text/javascript">
function del(id) {
	 if (confirm('Bạn có chắc muốn xóa acc random này?')) {
	 		location.href = '/admin/?modun=random_lienquan&act=delete_acc&id='+id;
		} else {
			alert('Hãy suy nghĩ kĩ trước khi xóa gì đó nhé!');
		}
}
</script>










                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>DANH SÁCH ACC RANDOM LIÊN QUÂN ĐÃ BÁN</b>
                            </h2>

                        </div>
                        <div class="body">

	
<div class="table-responsive">  
<table class="table table-hover c-margin-t-40">
<thead>
   <tr>
	   <th>STT</th>
	   <th>Username</th>
	   <th>Password</th>
	   <th>Thời Gian</th>
   </tr>
</thead>
<tbody>
                        	<?php 

                        	while ($row2 = mysqli_fetch_array($sql2)) {
                        		?>
<tr>
   <th scope="row">#<?php echo $row2['id'];?></th>
   <td><?php echo $row2['username'];?></td>
   <td><?php echo $row2['password'];?></td>
   <td><?php echo date('d/m G:i', $row2['time']);?></td>
</tr> 


                        	<?php
                        		}
                        	?>


</tbody>
</table>
<!-- Phần hiển thị Nick -->
</div>

						</div>
						</div>

						</div>











			</div>