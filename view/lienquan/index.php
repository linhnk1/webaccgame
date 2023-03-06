<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kmess = 16; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $result = mysqli_query($kun->connect_db(), "SELECT * FROM `lienquan` WHERE `status`='1' AND `nguoimua`='null' ORDER BY time DESC LIMIT $start, $kmess");
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `lienquan` WHERE `status`='1' AND `nguoimua`='null'"));
$condition = "";
if(isset($_POST['loc'])) {



	if($_POST['maso']) {
		$condition .= " AND `id`='".$_POST['maso']."'";
	}
	if($_POST['tuong']) {
		$condition .= " AND `tuong`='".$_POST['tuong']."'";
	}
	if($_POST['skin']) {
		$condition .= " AND `skin`='".$_POST['skin']."'";
	}
	if($_POST['ngoc']) {
		$condition .= " AND `ngoc`='".$_POST['ngoc']."'";
	}	
	if($_POST['price']) {

		switch ($_POST['price']) {
			case 'duoi-50k':
				$condition .= " AND `giatien`<= 50000";
				break;
			case 'tu-50k-200k':
				$condition .= " AND `giatien` >= 50000 AND `giatien` <= 200000 ";
				break;
			case 'tu-500k-1-trieu':
				$condition .= " AND `giatien` >= 500000 AND `giatien` <= 1000000";
				break;
			case 'tren-1-trieu':
				$condition .= " AND `giatien` >= 1000000";
				break;
			case 'tren-5-trieu':
				$condition .= " AND `giatien` >= 5000000";
				break;
			case 'tren-10-trieu':
				$condition .= " AND `giatien`>= 1000000";
				break;
		}

	}

	if($_POST['rank']) {
		$condition .= " AND `rank`='".$_POST['rank']."'";
	}

}


?>

<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->

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
                    <h1 class="alert-heading" style="color:#000">Nick Free Fire Giá Rẻ</h1>
                    <p><p><span style="font-size:14px"><span style="color:#000000"><strong>Garena</strong> </span><strong><a href="https://ff.garena.vn/"><span style="color:#2980b9">Free Fire</span></a></strong><span style="color:#000000"> l&agrave; một tr&ograve; chơi nhiều người chơi do 111 Dots Studio ph&aacute;t triển v&agrave; do&nbsp;</span><strong><a href="https://www.garena.vn/" target="_blank"><span style="color:#2980b9">GARENA</span></a></strong><span style="color:#000000">&nbsp;Độc Quyền Ph&aacute;t H&agrave;nh Tại Việt Nam.</span></span></p>

<h2><strong><a href="#"><span style="color:#2980b9"><?=$_title['name'];?></span></a><span style="color:#000000">&nbsp;- Shop B&aacute;n Nick Free Fire Gi&aacute; Rẻ Nhất Việt Nam</span></strong></h2>

<p style="margin-left:40px"><span style="color:#000000"><span style="font-size:12px">- 100%&nbsp;Nick Đ&uacute;ng Mật Khẩu Trắng Th&ocirc;ng Tin.</span></span></p>

<p style="margin-left:40px"><span style="color:#000000"><span style="font-size:12px">- Ch&uacute; Ý&nbsp;Gỡ Bỏ Tất Cả T&agrave;i Khoản Tr&ecirc;n Ứng Dụng Facebook Sau Đ&oacute; Đăng Nhập Nick Bằng Mạng 3G 4G Để Hạn Chế Bị X&aacute;c Minh Danh T&iacute;nh.</span></span></p>

<p style="margin-left:40px"><span style="color:#000000"><span style="font-size:12px">- Đa Phần C&aacute;c Nick Đều C&oacute; M&atilde; X&aacute;c Nhận Ở&nbsp;Phần Th&ocirc;ng Tin Bổ Sung Nick Để Tr&aacute;nh Bị Checkpoin.</span></span></p>

<p style="margin-left:40px"><span style="color:#000000"><span style="font-size:12px">- Kh&aacute;ch H&agrave;ng Kh&ocirc;ng Được Thay Đổi&nbsp;Email ( V&igrave; Đ&oacute; L&agrave;&nbsp;&nbsp;Email Ảo Kh&ocirc;ng Ảnh Hưởng G&igrave;) Chỉ Cần Đổi Mật Khẩu.</span></span></p></p>

                </div>
                <div style="text-align: center;margin: 15px 0">
                    <span class="viewmore">Xem tất cả »</span>
                </div>

            </div>
        </div>
        <div class="row hidden-xs hidden-sm" style="margin-bottom: 15px">
            <div class="m-l-10 m-r-10">
              <form class="form-inline m-b-10" role="form" method="post" action="">


                    
                    <div class="col-md-3 col-sm-4 p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Mã số</span>
                            <input type="text" class="form-control c-square" value="" placeholder="Mã số" name="maso" >

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Giá tiền</span>
                            <select style="" class="form-control c-square" name="price">


                                <option value="">Chọn giá tiền</option>
                                <option value="duoi-50k" >Dưới 50K</option>
                                <option value="tu-50k-200k" >Từ 50K - 200K</option>
                                <option value="tu-200k-500k" >Từ 200K - 500K</option>
                                <option value="tu-500k-1-trieu" >Từ 500K - 1 Triệu</option>
                                <option value="tren-1-trieu" >Trên 1 Triệu</option>
                                <option value="tren-5-trieu" >Trên 5 Triệu</option>
                                <option value="tren-10-trieu" >Trên 10 Triệu</option>
                            </select>
                        </div>
                    </div>

                    


                     <div class="col-md-3 col-sm-4 p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Số Trang Phục:</span>
                            <input type="text" class="form-control c-square c-theme tooltips" title="" placeholder="1 200" name="skin" value="" data-original-title="Nhập 100 500 để tìm tài khoản có từ 10 đến 50 trang phục">
              

                        </div>
                    </div>
                     <div class="col-md-3 col-sm-4 p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Số Trang Ngọc:</span>
 <input type="text" class="form-control c-square c-theme tooltips" title="" placeholder="1 20" name="ngoc" value="" data-original-title="Nhập 10 20 để tìm tài khoản có từ 10 đến 20 trang ngọc">
                           

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                <div class="input-group c-square">
                    <span class="input-group-addon">Rank</span>
<select class="form-control c-square c-theme" name="rank">
                                title="-- Không chọn --">
                        <option value="0">Tất cả rank</option>
                        <option value="1">Rank Đồng</option>
                        <option value="2">Rank Bạc</option>
                        <option value="3">Rank Vàng</option>
                        <option value="4">Rank Bạch Kim</option>
                        <option value="5">Rank Kim Cương</option>
                        <option value="6">Rank Tinh Anh</option>
                        <option value="7">Rank Cao Thủ</option>
                        <option value="8">Rank Thách Đấu</option>
                                                                                                        </select>
                </div>
            </div>
                    
        
        
                                        <div class="col-md-3 col-sm-4 p-5 no-radius">
                                <button type="submit" name="loc" class="btn c-square c-theme c-btn-green" style="margin-right: 15px;margin-top: 15px">Tìm kiếm</button>
                                <a class="btn c-square m-l-0 btn-danger" href="/acclienquan" style="margin-top: 15px">Tất cả</a>
                            </div>
                        </form>

                    </div>
                </div>
       
        <style>
            .form-filter-right {

                position: fixed;
                top: 0;
                right: -300px;
                width: 300px;
                height: 100%;
                background: #fff;
                color: #444;
                z-index: 10;
                transition: 400ms ease;
                overflow-y: scroll;
                transform: translateX(0px);
                z-index: 10000;
            }

            .form-filter-right.open {
                display: unset;
                height: 100%;
                transform: translateX(-300px);

            }

            #togger-filter {
                visibility: hidden;
                background-color: #000000bf;
                z-index: 1;
                height: 100%;
                width: 100%;
                left: 0;
                top: 0;
                overflow: hidden;
                position: fixed;
                z-index: 9999;
            }

            #togger-filter.active {
                transition: 0.4s;
                visibility: visible;
                cursor: pointer;

            }

            .form-filter-content-mobile{
                padding: 15px;
            }

            .close-popup{
                color: #818e9a;
                font-size: 36px;
                left: 11px;
                top: 7px;
                position: absolute;
                font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            }

        </style>
        <script>

            $('.filter-right').click(function() {
                $('.form-filter-right').toggleClass('open');
                $("#togger-filter").toggleClass("active");
            });
            $('#togger-filter').click(function(e){
                $("#togger-filter").removeClass("active");
                $('.form-filter-right').removeClass('open');
            });

            $('#togger-filter').click(function(e){
                $("#togger-filter").removeClass("active");
                $('.form-filter-right').removeClass('open');
            });
            $('.form-filter-right .close-popup').click(function(e){
                $("#togger-filter").removeClass("active");
                $('.form-filter-right').removeClass('open');
            });

        </script>
                   
   <div class=" sc_prod_cate">
            <div class="m-l-10 m-r-10">

            <div class="list_prod_cate clearfix">

                    <div class="row row-flex  item-list">




<?php 
$getrank = array("Đồng", "Bạc", "Vàng", "B.Kim", "K.Cương", "T.Anh", "C.Thủ", "T.Đấu");
$getlk = array("NULL", "Liên Kết RIP", "Trắng Thông Tin");
while ($row = mysqli_fetch_array($result)) { ?>


<div class="col-sm-6 col-md-3">
    <div class="classWithPad">
        <div class="image">

            <a href="/Nick/lienquan/<?php echo $row['id'];?>">
                <img src="<?php echo $kun->get_thumb_lienquan($row['id']);?>">
                <span class="ms">MS: <?php echo $row['id'];?></span>
            </a>

        </div>
        <div class="description">

        </div>
        <div class="attribute_info">
            <div class="row">
                                            	<div class="col-xs-6 a_att">Số Tướng <span class="c-font-red"><?=$row['tuong']?> </div>
                                            	
												<div class="col-xs-6 a_att">Rank <span class="c-font-red"><?=$getrank[$row['rank']]?> </div>
						
                        						<div class="col-xs-6 a_att">Số Skin <span class="c-font-red"><?=$row['skin']?></div>
                
                        						<div class="col-xs-6 a_att">Ngọc <span class="c-font-red"><?=$row['ngoc']?></div>
						
                
            </div>
        </div>
        <div class="a-more">
            <div class="row">
                <div class="col-xs-6">
                    <div class="price_item">
                        <?php echo number_format($row['giatien']);?>đ

                    </div>
                </div>
                <div class="col-xs-6 ">
                    <div class="view">
                        				  


                        <a href="/Nick/lienquan/<?php echo $row['id'];?>">Chi tiết</a>
                        
                        
                                            </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php } ?>
                    </div>
                        <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
						<?php if ($tong > $kmess){
							echo '<center>' . $kun->phantrang('/nickfreefire/', $start, $tong, $kmess) . '</center>';
						} ?>

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

    <script type="text/javascript">
        $('body').delegate('.viewmore','click',function(){

            $(this).addClass('viewless').removeClass('viewmore');
            $(this).text('« Thu gọn');
            $('.hidetext').addClass('showtext').removeClass('hidetext');
        })
        $('body').delegate('.viewless','click',function(){
            $(this).addClass('viewmore').removeClass('viewless');
            $(this).text('Xem tất cả »');
            $('.showtext').addClass('hidetext').removeClass('showtext');
        })

        $('body').delegate('.btn-viewmore','click',function(){
            var ele=$(this).closest('.panel-body').find(".special-text").toggleClass('-expanded');
            if ($(ele).hasClass('-expanded')) {
                $(this).html('« Thu gọn');
            } else {
                $(this).html('Xem tất cả »');

            }
        })

    </script>


<style type="text/css">
    .pagination .hidden-xs{
        display: inline-block!important;
    }
</style>


<!-- END: PAGE CONTENT -->
</div>
<style type="text/css">
    iframe{
        width: 100%;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){
        var width = $('.c-layout-page iframe').width();
        console.log(width);
        $('.c-layout-page iframe').height($('.c-layout-page iframe').width()/(16/9))
        $(window).resize(function() {
            $('.c-layout-page iframe').height($('.c-layout-page iframe').width()/(16/9))
        });
    });
</script>
<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
        <div class="modal-content">
        </div>
    </div>
</div>

<!-- END: PAGE CONTAINER -->
</div></div></div></div></div>