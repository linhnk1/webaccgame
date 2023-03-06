<?php
defined('KUNKEYPR') or exit('Restricted Access');

// phân trang trang 2 trở đi bị lỗi nên phải thêm đoạn này
if($kun->tim_chuoi($_GET['cname'], '/page=')) {
	$exp = explode("/page=", $_GET['cname']);
	$_GET['cname'] = $exp[0];
	$_REQUEST['page'] = $exp[1];
}


$kmess = 16; // Số phim hiện trong mỗi page
$page = isset($_REQUEST['page']) && $_REQUEST['page'] > 0 ? intval($_REQUEST['page']) : 1;
$start = isset($_REQUEST['page']) ? $page * $kmess - $kmess : (isset($_GET['start']) ? abs(intval($_GET['start'])) : 0);

 $thread = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `random_lienquan` WHERE `cname`='".$_GET['cname']."'"));

 $result = mysqli_query($kun->connect_db(), "SELECT * FROM `random_lienquan_nick` WHERE `status`='true' AND `cname`='".$_GET['cname']."' ORDER BY time DESC LIMIT $start, $kmess");
 $tong = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `random_lienquan_nick` WHERE `status`='true' AND `cname`='".$_GET['cname']."'"));
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
                    <h1 class="alert-heading" style="color:#000"><?php echo strtoupper($thread['name']);?></h1>
                    <p><p><span style="color:#000000"><strong><span style="font-size:14px">Thử Vận May Liên Quân Vip</span></strong><span style="font-size:14px"> l&agrave; h&igrave;nh thức <strong>mua nick Liên Quân Random gi&aacute; rẻ</strong> với mệnh gi&aacute; cố định, t&ugrave;y thuộc v&agrave;o gi&aacute; thử vận may shop quy định. Hiện nay h&igrave;nh thức <strong>mua nick FF</strong> bằng thử may đang rất phổ biến.</span></span></p>

<p><span style="color:#000000"><span style="font-size:14px">Ưu điểm của <strong>mua nick Liên Quân Vip</strong> bằng h&igrave;nh thức thử may n&agrave;y l&agrave; cơ hội ra được <strong>nick Liên Quân Vip Gi&aacute; Rẻ</strong>. Nhưng&nbsp;</span><span style="font-size:16px"><strong>Thử Vận May Phải Chấp Nhận H&ecirc;n Xui</strong>.</span></span></p>

<p><span style="font-size:16px"><span style="color:#000000">Tại </span><strong><a href="#"><span style="color:#3498db"><?=$_title['name'];?></span></a></strong><span style="color:#000000">&nbsp;khi tham gia&nbsp;</span></span><span style="color:#000000"><span style="font-size:14px"><?php echo strtoupper($thread['name']);?> đảm bảo c&aacute;c điều sau đ&acirc;y:</span></span></p>

<p style="margin-left:40px"><span style="color:#000000"><strong><span style="font-size:14px">- 100% Nick Đ&uacute;ng Mật Khẩu</span><br />
<span style="font-size:14px">- 20% Nick C&oacute; Skin Hot</span><br />
<span style="font-size:14px">- 30% Nick C&oacute; 3000 KC</span><br />
<span style="font-size:14px">- 25% Nick C&ugrave;i</span><br />
<span style="font-size:14px">- 5% Nick Bị X&aacute;c Minh</span></strong></span></p>

<p><span style="color:#000000"><span style="font-size:14px">Tất cả t&agrave;i khoản đăng nhập bằng&nbsp;Facebook. Kh&ocirc;ng hỗ trợ những&nbsp;nick tự x&aacute;c minh ảnh. Ch&uacute; &yacute; gỡ bỏ tất cả t&agrave;i khoản tr&ecirc;n ứng dụng Facebook, sau đ&oacute; đăng nhập nick bằng 3G 4G để hạn chế bị x&aacute;c minh danh t&iacute;nh. Kh&aacute;ch h&agrave;ng kh&ocirc;ng được thay đổi email ( v&igrave; đ&oacute; l&agrave; email ảo, kh&ocirc;ng ảnh hưởng g&igrave; ) Chỉ cần đổi mật khẩu. Tự &yacute; thay th&ocirc;ng tin sẽ&nbsp;kh&ocirc;ng được&nbsp;hỗ trợ.</span></span></p></p>

                </div>
                <div style="text-align: center;margin: 15px 0">
                    <span class="viewmore">Xem tất cả »</span>
                </div>

            </div>
        </div>
        <div class="row " style="margin-bottom: 15px">
            <div class="m-l-10 m-r-10">
              
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



                    <div class="row row-flex  item-list">
					<?php while ($row = mysqli_fetch_array($result)) { ?>
                		<div class="col-sm-6 col-md-3">
                            <div class="classWithPad">
                                <div class="image">
                                    <a href="#" class="load-modal" onclick="getdata('<?php echo $row['id'];?>')">
                                        <img src="<?php echo $thread['thumb'];?>">
                                        <span class="ms">MS: <?php echo $row['id'];?></span>
                                    </a>
                                </div>
                                <div class="description">
                                </div>
                                <div class="attribute_info">
                                    <div class="row">          
                                <div class="col-xs-6 a_att">
                                    Kiểu Nick: <b>Random</b>
                                </div>                                                                                                                                                                                                   
                                <div class="col-xs-6 a_att">
                                    Tỉ Lệ: <b>5% acc bị khóa</b>
                                </div>
                                    </div>
                                    </div>
                                <div class="a-more">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="price_item"><?php echo number_format($thread['giatien']);?>đ</div>
                                        </div>
										<div class="col-xs-6 ">
                                            <div class="view">
											<a href="#" class="load-modal" onclick="getdata('<?php echo $row['id'];?>')">Mua ngay</a>
                                            </div>
                                        </div>
										<div class="col-xs-12 "></div>
                                    </div>
                                </div>
                            </div>
                        </div>
					<?php } ?>
                    </div>
                        <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
            <ul class="pagination pagination-sm">
			<?php if ($tong > $kmess){
				echo '<center>' . $kun->phantrang('/random-freefire/'.$_GET['cname'].'/', $start, $tong, $kmess) . '</center>';
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
                url: "/model/random_lienquan/laythongtin.php",
                data: {
                    id: id
                },
                success : function(response){
					curModal.modal('show').find('.modal-content').html(response);
                }
            });



	}
</script>