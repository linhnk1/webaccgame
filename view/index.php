<?php require $root.'/view/Widget/Top_Widget.php'; ?>
<br><br>
	<div style="padding-bottom:0;min-height:0;margin-bottom:20px">
	<div class="container" style="border: 1px solid green;">
	<div class="c-line-center c-theme-bg c-theme-marquee"></div>			
	        <div class="">
            <marquee id="slideText"> <p><strong><span style="color:#e74c3c"><b>Cực Sốc Shop Tưng Bừng Khai Trương Giảm Giá Cực Ngon </b></span><b><span style="color:#2ecc71">cuahangkasalq.com - Website Bán Nick Game/Thử Vận May Kim Cương Uy Tín Chất Lượng </span></b></strong><b><strong><span style="color:#e74c3c"> Giảm Giá Tất Cả Các Loại Vòng Quay Mới Trên Shop</span><span style="color:#2ecc71"> Rút Quân Huy Nhanh Chóng Chỉ 1p Về Nick!</span><span style="color:#2ecc71"> Phi Tiêu Phá Bóng Tỉ Lệ Cực Cao!!</span><span style="color:gree"> Anh Em Nhanh Tay Thử Vận May Nào!</span></strong></b></p> </marquee>
       </div>
				</div>
	</div>
<div id="lockmoney_taget" class="c-content-box c-size-md c-bg-white">
    <div class="container">
        <!-- Begin: Testimonals 1 component -->
        <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
            <!-- Begin: Title 1 component -->
           <div class="box-title-menu-game">
                MINI GAME LIÊN QUÂN
                    <br>
            </div>
               <div class="row row-flex-safari game-list">
                  <?php if($kun->hienthi_game('vanmayff') == 1) { ?>
                  
                       <?php
$ross = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_may_xeng_hoa_phuong_ruc_lua`"));
 ?>
            <div class="col-sm-3 col-xs-6 p-5 ppk">
                            <div class="classWithPad">
                                <div class="bgclassWithPad"></div>
                                <div class="news_image">
                                    <a href="/may-xeng-hoa-phuong-ruc-lua" style="position: relative;display: block"
                                       title="HOA PHƯỢNG RỰC LỬA" class="">
                                                                                    <img
                                                style="position: absolute;max-width: 79px;height: auto;top: -8px;right: -8px;"
                                                src="https://shopalice.vn/storage/images/mA3mcqepgl_1619005828.png"/>
                                        <img
                                            src="https://cloud.babyshark.me/files/images/image-af7a9961-985e-4ac7-b59f-fbc039707e2c.gif"
                                            alt="HOA PHƯỢNG RỰC LỬA"></a>
                                </div>
                                <div class="news_title">
                                    <h2>
                                        <a href="index.html"
                                           title="HOA PHƯỢNG RỰC LỬA">
                               <p><span style="color:#f1c40f"><span style="font-size:14px"><strong>HOA PHƯỢNG RỰC LỬA</strong></span></span></p>
                                                                                    </a>
                                    </h2>
                                </div>
                                <div class="news_description">
                                         <p>
                        Đã quay: <?php echo number_format($ross['sudung']);?>
                    </p>
                                   <span class="oldPrice"><?php echo number_format($ross['giatien'] * 2);?>đ</span>
																								 
																							<span class="newPrice"><?php echo number_format($ross['giatien']);?>đ</span>
                                                                    </div>
                                <div class="a-more">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="view customchoi">
                                                <a href="/may-xeng-hoa-phuong-ruc-lua"
                                                   title="HOA PHƯỢNG RỰC LỬA">
                                                                                                            &nbsp;
                                                                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             </div>
            <?php } ?>
       <?php
$ross = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `ruong_quan_huy`"));
 ?>
            <div class="col-sm-3 col-xs-6 p-5 ppk">
                            <div class="classWithPad">
                                <div class="bgclassWithPad"></div>
                                <div class="news_image">
                                    <a href="/garena/ruong-quan-huy" style="position: relative;display: block"
                                       title="RƯƠNG QUÂN HUY" class="">
                                                                                    <img
                                                style="position: absolute;max-width: 79px;height: auto;top: -8px;right: -8px;"
                                                src="https://shopalice.vn/storage/images/mA3mcqepgl_1619005828.png"/>
                                        <img
                                            src="https://cloud.babyshark.me/files/images/image-ba04d835-365b-42d0-ae7d-b85ac791bad2.gif"
                                            alt="RƯƠNG QUÂN HUY"></a>
                                </div>
                                <div class="news_title">
                                    <h2>
                                        <a href="index.html"
                                           title="RƯƠNG QUÂN HUY">
                               <p><span style="color:#f1c40f"><span style="font-size:14px"><strong>RƯƠNG QUÂN HUY</strong></span></span></p>
                                                                                    </a>
                                    </h2>
                                </div>
                                <div class="news_description">
                                         <p>
                        Đã quay: <?php echo number_format($ross['sudung']);?>
                    </p>
                                   <span class="oldPrice"><?php echo number_format($ross['giatien'] * 2);?>đ</span>
																								 
																							<span class="newPrice"><?php echo number_format($ross['giatien']);?>đ</span>
                                                                    </div>
                                <div class="a-more">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="view customchoi">
                                                <a href="/garena/ruong-quan-huy"
                                                   title="RƯƠNG QUÂN HUY">
                                                                                                            &nbsp;
                                                                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             </div>
           
                                     

         
            <?php if($kun->hienthi_web('vongquay') == 1) { ?>
            <?php 
            	$res = mysqli_query($kun->connect_db(), "SELECT * FROM `vongquay_quanhuy` ORDER BY `id` DESC");
            	while ($row = mysqli_fetch_array($res)) {
            		if($row['status'] == 'true') {
            ?>
				                <div class="col-sm-3 col-xs-6 p-5 ppk">
            <div class="classWithPad">
                <div class="bgclassWithPad"></div>
                <div class="news_image">
                    <a href="/vongquayquanhuy/<?php echo $kun->rewrite($row['name'])?>-<?php echo $row['id'];?>.html" class=""  style="position: relative;display: block">
                        <img
                                                style="position: absolute;max-width: 79px;height: auto;top: -8px;right: -8px;"
                                                src="https://shopnamlay.com/upload-usr/images/NRIDhoaHcT_1626079216.png"/>
                        <img
                            src="<?php echo $kun->vongquayquanhuy_image($row['id'], 'thumb');?>"
                            alt="<?php echo $row['name'];?>"></a></div>
                <div class="news_title"><h2><a href="/vongquayquanhuy/<?php echo $kun->rewrite($row['name'])?>-<?php echo $row['id'];?>.html">
                                                            <p><span style="color:#f1c40f"><span style="font-size:14px"><strong><?php echo $row['name'];?></strong></span></span></p>
                                                    </a></h2></div>
                                                    <div class="sl-prifbot">
                                                                        <ul>
                                               <p>
                        Đã quay: <?php echo number_format($row['sudung']);?>
                    </p>
                                    </ul>
                                        <span class="oldPrice"><?php echo number_format($row['giatien'] *2)?>đ</span>
                                        <span class="newPrice"><?php echo number_format($row['giatien'])?>đ</span>
                                                                    </div>
              
                <div class="a-more">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="view  customchoi">
                                <a href="/vongquayquanhuy/<?php echo $kun->rewrite($row['name'])?>-<?php echo $row['id'];?>.html">
                                                                            &nbsp;
                                                                    </a>
                                                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <?php } } ?>
           
      
            
        <?php } ?>
        
</div>
      
    </div>
</div>
<div id="freefire_taget" class="c-content-box c-size-md c-bg-white">
    <div class="container">
        <!-- Begin: Testimonals 1 component -->
        <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
            <!-- Begin: Title 1 component -->
            <div class="box-title-menu-game">
                BÁN NICK LIÊN QUÂN
                    <br>
            </div>
                        <div class="row row-flex-safari game-list">
            
        <?php if($kun->hienthi_game('banacclq') == 1) { ?>
        <div class="col-sm-3 col-xs-6 p-5 ppk">
                            <div class="classWithPad">
                                <div class="bgclassWithPad"></div>
                                <div class="news_image">
                                    <a href="/Nick/lienquan" style="position: relative;display: block"
                                       title="Nick Liên Quân Giá Rẻ" class="">
                                                                                    <img
                                                style="position: absolute;max-width: 79px;height: auto;top: -8px;right: -8px;"
                                                src="https://shopalice.vn/storage/images/mA3mcqepgl_1619005828.png"/>
                                        <img
                                            src="<?php echo $kun->hinhanh_game('banacclq');?>"
                                            alt="Nick Liên Quân Giá Rẻ"></a>
                                </div>
                                <div class="news_title">
                                    <h2>
                                        <a href="/Nick/lienquan"
                                           title="Nick Liên Quân Giá Rẻ">
                                                                                            <p><span style="color:#f1c40f"><span style="font-size:14px"><strong>Nick Liên Quân Giá Cắt Cổ</strong></span></span></p>
                                                                                    </a>
                                    </h2>
                                </div>
                                <div class="news_description">
                                        <p>
                                            Đã bán: 25,492 Acc
                                        </p>
                                    <span class="newPrice">Giảm 50%</span>
                                                                    </div>
                                <div class="a-more">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="view custommua">
                                                <a href="/Nick/lienquan"
                                                   title="Nick Free Fire Giá Rẻ">
                                                                                                            &nbsp;
                                                                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php } ?>
         <?php if($kun->hienthi_web('random') == 1) { ?>
            <?php 
            	$res = mysqli_query($kun->connect_db(), "SELECT * FROM `random_lienquan` ORDER BY `id` DESC");
            	while ($row = mysqli_fetch_array($res)) {
            		if($row['status'] == 'true') {
            			$count = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `random_lienquan_nick` WHERE `status`='true' AND `cname`='".$row['cname']."'"));
            ?>
            <div class="col-sm-3 col-xs-6 p-5 ppk">
                            <div class="classWithPad">
                                <div class="bgclassWithPad"></div>
                                <div class="news_image">
                                    <a href="/random-lienquan/<?php echo $row['cname'];?>" style="position: relative;display: block"
                                       title="<?php echo $row['name'];?>" class="">
                                        <img
                                            src="<?php echo $row['thumb'];?>"
                                            alt="<?php echo $row['name'];?>"></a>
                                </div>
                                <div class="news_title">
                                    <h2>
                                        <a href="/random-lienquan/<?php echo $row['cname'];?>"
                                           title="<?php echo $row['name'];?>">
                                                                                            <p><span style="color:#f1c40f"><span style="font-size:14px"><strong><?php echo $row['name'];?></strong></span></span></p>
                                                                                    </a>
                                    </h2>
                                </div>
                                <div class="news_description">
                                    <p>
                                        Đã Bán: <?php echo number_format($count)?> Acc
                                    </p>
                                                                                                                    <span class="newPrice "><?php echo number_format($row['giatien'])?>đ</span>
                                                                    </div>
                                <div class="a-more">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="view custommua">
                                                <a href="/random-lienquan/<?php echo $row['cname'];?>"
                                                   title="<?php echo $row['name'];?>">
                                                                                                            &nbsp;

                                                                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php } } ?>
            <?php } ?>
            </div>
      
    </div>
</div></div>

     
<style type="text/css">
    .news_image, .image, .news_title, .a-more, .news_description {
        position: relative;
        z-index: 200;
    }

    span.sale {
        position: absolute;
        z-index: 1000;
        left: 8px;
        background: rgba(255, 212, 36, .9);
        padding: 5px;
        text-align: center;
        color: #ee4d2d;
        width: 50px;
        font-weight: 700;
        font-size: 15px;
    }

    .bgclassWithPad {
        position: absolute;
        top: -2px;
        z-index: 10;
        left: 4px;
        width: calc(100% + -7px);
        background: url("") no-repeat center center;
        background-size: 100% 100%;
        height: calc(100% + 2px);
        padding: 12px;
    }

    .sale:after {
        content: "";
        width: 0;
        height: 0;
        left: 0;
        bottom: -4px;
        position: absolute;
        border-color: transparent rgba(255, 212, 36, .9);
        border-style: solid;
        border-width: 0 25px 4px;
    }

    .outPrice {
        padding-top: 20px;
        text-align: center;
        width: 100px;
        margin: 0 auto;
        margin-top: 10px;
        display: flex;
        justify-content: center;
    }

    .oldPrice {
        text-decoration: line-through;
        color: #3f0;
        border: 2px solid;
        padding: 5px 15px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: bold;
    }

    .newPrice {
        border: 2px solid red;
        padding: 5px 15px;
        color: red;
        display: inline-block;
        border-radius: 5px;
        margin-left: 10px;;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    @media (max-width: 550px) {
        .outPrice {
            flex-direction: column;
        }

        .newPrice {
            margin-left: 0;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    }
</style>
<style type="text/css">
    @media    only screen and (max-width: 580px) {
        .hidetext {
          max-height: 220px;
          overflow: hidden;
        }
    }
    @media    only screen and (min-width: 580px) {
        .hidetext {
          max-height: 220px;
          overflow: hidden;
        }
    }
    .showtext {
        max-height:initial;
    }
    .viewless,.viewmore{
        display: block;
        cursor: pointer;
        color: #f1c40f;
        padding-top: 10px;
        float: right;
        font-size: 18px;
    }
</style>
	<style type="text/css">
        #bonus{
            position: fixed;
            bottom: 15px;
            left: 15px;
            width: 13%;
            z-index: 1000;
            cursor: pointer;
        }
        #bonus img{
            width: 100%;
        }
        #bonus_login{
            display:block;
            position: fixed;
            bottom: 15px;
            left: 15px;
            width: 13%;
            z-index: 1000;
            cursor: pointer;
        }
        #bonus_login img{
            width: 100%;
        }
        .mobile{
            width: 30%!important;
        }
        @media  only screen and (max-width: 640px) {
            #bonus_login{width: 50%!important;!important;}
            #bonus{width: 50%!important;!important;}
        }
        #bonusModal .modal-body p,#bonusModal .modal-body b{display:inline;color:#000}
    </style>
<div class="modal fade" id="noticeModal" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
                    </div>

                    <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                        <p style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><strong><?php echo nl2br($_thongbao['thongbao']);?></strong></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-turnoff-noti btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Tắt trong 24h</button>
                        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <script>

            $(document).ready(function(){

                if ($.cookie('noticeModal') != '1') {

                    $('#noticeModal').modal('show')
                    //show popup here
                }
                $('.btn-turnoff-noti').click(function (e) {
                    var date = new Date();
                    var minutes = 60*12;
                    date.setTime(date.getTime() + (minutes * 60 * 1000));
                    $.cookie('noticeModal', '1', { expires: date});
                });


            });
        </script>