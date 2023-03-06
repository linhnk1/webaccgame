<?php
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user();

if(!$_SESSION['token']) {
    die("<script>swal('Lỗi', 'Bạn Cần Đăng Nhập', 'error');setTimeout(function(){location.href='/signin.html';}, 1500);</script>");
}


$id = $_POST['id'];
$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `ruong_quan_huy` WHERE `id`='".$id."'"));
?>

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <h4 class="modal-title">Xác nhận mua rương</h4>
</div>
                <div class="modal-body" id="buy">
                    <p style="display: none;" id="result"></p>
				<table class="table table-striped" style="color:#000;">
					<tbody><tr>
						<th colspan="2">Xác nhận mua rương mã số #<?php echo $row['id'];?></th>
					</tr>
						<tr>
							<td>Nhà phát hành:</td>
							<th class="text-danger">Garena</th>
						</tr>
						<tr>
							<td>Loại:</td>
							<th class="text-danger">Rương Quân Huy</th>
						</tr>
						<tr>
							<td>Giá tiền:</td>
							<th class="text-info"><?php echo number_format($row['giatien']);?>đ</th>
						</tr>
				</tbody></table>

					                        <div class="modal-footer">
							<button id="mua" type="submit" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" Onclick="muahomthinh('<?php echo $row['id'];?>')">Mua luôn</button>
                            <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                        </div>
										                </div>


</div>
	</div>
</div>
<script>
function muahomthinh(id) {
    document.getElementById("mua").disabled = true;

$.ajax({
                method: "POST",
                url: "/model/game/ruong-quan-huy/xuly.php",
                data: {
                    id: id
                },
                success : function(response){
                    $('.close').click();
                        $('#result').html(response);
                }
            });


}

</script>
  
 
</div>