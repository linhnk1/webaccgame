<?php
defined('KUNKEYPR') or exit('Restricted Access');
$id = intval($_GET['id']);

$check = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT COUNT(*) FROM `lienquan` WHERE `id`='".$id."'"));

if($check < 1){
	die ('<div style="padding-left:20px;font-size: 30px;text-align:center"><b style="color:red">Tài khoản Không tồn tại trên hệ thống!</b></div>');
}


$getrank = array("Đồng", "Bạc", "Vàng", "B.Kim", "K.Cương", "T.Anh", "C.Thủ", "T.Đấu");
$getlk = array("NULL", "Liên Kết RIP", "Trắng Thông Tin");
$result = mysqli_query($kun->connect_db(), "SELECT * FROM `lienquan` WHERE `id` = '".$id."' LIMIT 1");

while($getdv = mysqli_fetch_assoc($result)){
?>
<style>

.swal2-container {
  zoom: 1.5;
}

</style>





<div class="container">


<div class="c-content-title-1">
				<h3 class="c-font-uppercase c-center c-font-bold" style="    color: #ffffff !important">THÔNG TIN TÀI KHOẢN <span class="c-font-red">#<?=$getdv['id']?></span></h3>
				<div class="c-line-center c-theme-bg"></div>

				<h2 class="c-font-red c-font-center"><?=$getdv['noibat']?></h2>

				<p class="c-font-center">Để Xem thêm chi tiết về tài khoản vui lòng kéo xuống bên dưới.</p>
			</div>


<div class="row">
			<div class="col-md-4 col-xs-6 wow animate fadeInLeft" style="opacity: 1; visibility: visible; animation-name: fadeInLeft;">
				<div class="c-content-step-1 c-opt-1">
					<div class="c-icon"><span class="c-hr c-hr-first"><i class="fa fa-star c-font-70 c-font-green"></i></span></div>
					<div class="c-title c-font-red c-font-20 c-font-bold c-font-uppercase">#<?=$getdv['id']?></div>
					<div class="c-title c-font-20 c-font-bold c-font-uppercase">Liên Quân</div>

				</div>
			</div>
			<div class="col-md-4 col-xs-6 wow animate fadeInLeft" data-wow-delay="0.2s" style="opacity: 1; visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
				<div class="c-content-step-1 c-opt-1">
					<div class="c-icon"><span class="c-hr"><i class="fa fa-money c-font-70 c-font-green"></i></span></div>
										<div class="c-title c-font-20 c-font-bold c-font-uppercase"> GIÁ NICK: <span class="c-font-red"><?=number_format($getdv['giatien']);?> VNĐ</span></div>
				</div>
			</div>

			<div class="col-md-4 col-xs-12 wow animate fadeInLeft" data-wow-delay="0.4s" style="opacity: 1; visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
				<div class="c-content-step-1 c-opt-1">
					<div class="c-icon"><span class="c-hr c-hr-last"><i class="fa fa-shopping-cart c-font-70 c-font-green" aria-hidden="true"></i></span></span></div>
                    <div class="c-title c-font-20 c-font-bold c-font-uppercase" style="margin-top: 17px;"><button  class="btn btn-info c-btn-square c-btn-uppercase c-btn-bold load-modal" onclick="get_data('<?=$getdv['id']?>')" data-id="<?=$getdv['id']?>"> MUA NGAY </button></div>
					<div class="c-title c-font-20 c-font-bold c-font-uppercase" style="margin-top: 13px;"><button type="button" class="btn btn-success c-btn-square c-btn-uppercase c-btn-bold ajax" href="/infoatm.php"> MUA BẰNG VÍ ĐIỆN TỬ</button></div>
				</div>
			</div>
</div>
<br>
<br>


<div class="row">
    
    <div class="col-md-3">
    	<div class="c-content-title-2">
    		<div class="c-line c-dot c-theme-bg c-theme-bg-after"></div>
    		<p class="c-center c-font-uppercase c-font-bold">Rank <span class="c-font-red"><?=$getrank[$getdv['rank']]?></span></p>
    	</div>
    </div>
    <div class="col-md-3">
    	<div class="c-content-title-2">
    		<div class="c-line c-dot c-theme-bg c-theme-bg-after"></div>
    		<p class="c-center c-font-uppercase c-font-bold">Số Tướng <span class="c-font-red"><?=$getdv['tuong']?></span></p>
    	</div>
    </div>
    <div class="col-md-3">
    	<div class="c-content-title-2">
    		<div class="c-line c-dot c-theme-bg c-theme-bg-after"></div>
    		<p class="c-center c-font-uppercase c-font-bold">Trang Phục <span class="c-font-red"><?=$getdv['skin']?></span></p>
    	</div>
    </div>
    <div class="col-md-3">
    	<div class="c-content-title-2">
    		<div class="c-line c-dot c-theme-bg c-theme-bg-after"></div>
    		<p class="c-center c-font-uppercase c-font-bold">Bậc Ngọc <span class="c-font-red"><?=$getdv['ngoc']?></span></p>
    	</div>
    </div>


    
</div>





<div class="m-t-20">

    <div class="text-center">
        <b class="c-font-20">Hình ảnh chi tiết của tài khoản <span class="c-font-red">Liên Quân #<?=$getdv['id']?></span></b>
    <br>
    <br>
    <div class="c-content-title-2">
    		<div class="c-line c-dot c-theme-bg c-theme-bg-after"></div>
    </div>
    			<div>




 									 <div class="gallery m-t-20">
  <?php 
        $path = $_SERVER["DOCUMENT_ROOT"]."/upload/lienquan/";
        $dir = $path.'info/'.$id;

                  if ($opendirectory = opendir($dir)){
                    while (($file = readdir($opendirectory)) !== false){

                        if ($file != "." && $file != "..") {
                        echo '<a href="/upload/lienquan/info/'.$id.'/'.$file.'"><img src="/upload/lienquan/info/'.$id.'/'.$file.'" class="img-responsive img-thumbnail"></a>';
        				}
                  	}

                    closedir($opendirectory);
                  }
    ?>

 
                                                    </a>


                    </div>





				</div>

			</div>
		</div>

    </div>


    <div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
            <div class="modal-content">
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.load-modal').each(function (index, elem) {
                $(elem).unbind().click(function (e) {
                    e.preventDefault();
                    e.preventDefault();
                    var curModal = $('#LoadModal');
                    curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");
                    curModal.modal('show').find('.modal-content').load($(elem).attr('rel'));
                });
            });
        });
    </script>


<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            </div>
        </div>
    </div>



<script type="text/javascript">
  function get_data(id) {
    var curModal = $('#LoadModal');
    curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/img/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");


      $.ajax({
                method: "POST",
                url: "/model/lienquan/laythongtin.php",
                data: {
                    id: id
                },
                success : function(response){
          curModal.modal('show').find('.modal-content').html(response);
                }
            });

  }
</script>

<?php } ?>  