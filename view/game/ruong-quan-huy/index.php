<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kmess = 16; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $result = mysqli_query($kun->connect_db(), "SELECT * FROM `ruong_quan_huy` WHERE `status`='1' AND `nguoimua`='null' ORDER BY RAND() LIMIT $start, $kmess");
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM ruong_quan_huy WHERE `status`='1' AND `nguoimua`='null'"));
?>



   <style type="text/css">
        @media        only screen and (min-width: 360px) {
            .hidetext {
                max-height: 140px;
                overflow: hidden;
            }
        }
        @media        only screen and (max-width: 420px) {
            .viewless,.viewmore{
                font-size: 14px !important;
            }
            .row-flex.item-list .col-sm-6{
                margin-right:  auto;
                margin-left:  auto;
            }
        }

        @media        only screen and (min-width: 500px) {
            .hidetext {
                max-height: 162px;
                overflow: hidden;
            }
        }
        @media        only screen and (min-width: 992px) {
            .hidetext {
                max-height: 162px;
                overflow: hidden;
            }
        }

        .box-text{
            margin-bottom: 5px;
        }
        .showtext {
            max-height:initial;
        }
        .viewless,.viewmore{

            cursor: pointer;
            color: #f1c40f;
            border: 1px solid #f1c40f;
            padding: 5px;
            text-align: center;
            font-size: 17px;
            margin: 20px 0;
        }


        /*tan code*/
        .special-text:not(.-expanded)::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient( rgba(255, 255, 255, 0), rgba(255, 255, 255, 0), rgba(255, 255, 255, 1) );
        }
        .special-text.-expanded {
            max-height: 900vh;
        }
        .special-text {
            line-height: 1.6;
            padding: 20px 20px;
            position: relative;
            max-height: 250px;
            overflow: hidden;
            background-color: #fff;
            margin-bottom: 20px;
        }



        .btn-viewmore {
            cursor: pointer;
            color: #f1c40f;
            border: 1px solid #f1c40f;
            padding: 5px;
            text-align: center;
            font-size: 17px;
            margin: 20px 0;
            float:right;
        }

    </style>
        <div class="container">

<div class="row">
            <div class="col-sm-12">
                <div class="alert alert-info box-text hidetext" role="alert">
                    <h2 class="alert-heading" style="color:#000">Rương Quân Huy</h2>
                    <p><h1 style="text-align:center"><span style="color:#e74c3c">Rương Qu&acirc;n Huy - 100% Tr&uacute;ng Qu&acirc;n Huy</span></h1>

<h1 style="text-align:center">Thử nh&acirc;n phẩm để nhận h&agrave;ng ng&agrave;n Qu&acirc;n Huy thả ga ti&ecirc;u s&agrave;i n&agrave;ooooo</h1></p>

                </div>
              

            </div>
        </div>



<div class="row item-list">

<?php 
while ($row = mysqli_fetch_array($result)) { ?>



	<div class="col-sm-6 col-md-3">
		<div class="classWithPad">
			<div class="image">
			<a href="#" class="load-modal" rel="/buyruby/201059">

			<img src="https://jintvshop.com/storage/images/PEVjYp8v6D_1631719471.gif">
			<span class="ms">MS: <?php echo $row['id'];?></span>
			</a>
			</div>

			<div class="attribute_info">
			<div class="row">
			<div class="col-xs-6 a_att">
			Tỉ lệ: <b>100% trúng</b>
			</div>
			<div class="col-xs-6 a_att">
			Thể loại: <b>Random</b>
			</div>

			<div class="a-more">
			<div class="row">
			<div class="col-xs-6">
			<div class="price_item">
			<?php echo number_format($row['giatien']);?>đ
			</div>
			</div>
			<div class="col-xs-6 ">
			<div class="view" style="background-image: url(/images/bgbtn.png) !important;background-size: 100% 100% !important;background-position: center;color: #000;">
			<a href="#" class="load-modal" onclick="getdata('<?php echo $row['id'];?>')">Mua ngay</a>
			</div>
			</div>


			</div>
			</div>


			</div>
			</div>
		</div>
	</div>

<?php } ?>

<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
	<center>
<?php
if ($tong > $kmess){
echo '<center>' . $kun->phantrang('/garena/ruong-quan-huy/', $start, $tong, $kmess) . '</center>';
}
?>
	</center>
</div>

</div>


</div>

<style type="text/css">
	.modal-dialog {
    top: 180;
}
</style>

<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            </div>
        </div>
    </div>



<script type="text/javascript">
	function getdata(id) {
		var curModal = $('#LoadModal');
		curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/img/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");


			$.ajax({
                method: "POST",
                url: "/model/game/ruong-quan-huy/laythongtin.php",
                data: {
                    id: id
                },
                success : function(response){
					curModal.modal('show').find('.modal-content').html(response);
                }
            });



	}
</script>