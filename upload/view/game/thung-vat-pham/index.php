<?php
defined('KUNKEYPR') or exit('Restricted Access');
$ros = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_bingo`"));
?>

<style>
    .btn+.btn {
        margin-left: 0 !important;
    }

    .btn-right .btn {
        float: left;
        width: 100%;
        background: #fb236a;
        font-size: 13px;
        color: #ffffff;
        text-align: center;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
        border-radius: 8px;
        border: 2px solid #fb236a;
        padding: 11px 0;
        margin-top: 10px;
        font-size: 20px;
        font-weight: bold;
    }

    .btn-right .btn:hover {
        background-color: #ff8db2;
        border: 2px solid #ff8db2;
    }

    .square {
        width: 100%;
    }

    #squaredesktop .box {
        min-width: 40px;
        min-height: 40px;
        /*background-color: #ccc;*/

        padding: 10px;
    }

    #squaremobile .box {
        padding: 5px;
    }

    .box img.active {
        box-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #49fff7, 0 0 35px #49fff7
    }

    .outer-btn {
        width: 100%
    }

    .outer-btn:hover {
        opacity: 0.7
    }

    .list-roll-inner {
        width: 105%;
        margin-top: 30px;
        max-height: 500px;
        overflow-y: scroll;
        margin: 0 auto;
    }

    #squaremobile .outer-btn {
        margin-bottom: -50px;
    }

    .nopadding {
        padding: 0;
    }

    a {
        color: #283593;
        text-decoration: none;
    }

    h3 {
        margin-top: 12px;
    }

    * {
        margin: 0px;
    }

    .game-list {
        width: 580px;
        margin: 0 auto;
    }

@media    screen and (max-width: 580px) {
	.fct{bottom: 35px!important;padding:0!important}
	.saleoff{height: 25px!important;left: -15px!important;}
	.saleoff input{padding: 6px 10px!important;font-size:14px!important;}
	.progress{bottom: -35px!important;height: 29px!important;width: 140px!important;right: -0px!important;}
	.persion_ppt{line-height: 25px!important;}
	.btn-right{margin-top:100px}
	.pltry{position:relative;z-index:100;position: absolute;bottom: -135px;left: 90px;}
	.dropdownlist{position: absolute;left: -16px;bottom: -53px;width: 100%;padding: 0!important;text-align: center;}
	#numrolllop{width:80%!important}
    .game-list{
        width: 320px;
    }
    #slot1, #slot2, #slot3{
        margin-left: 68px!important;
    }
	main{
			background: unset!important;
			border-radius: 5px!important;
			margin-top: 50px!important;
			padding-top: 0!important;
			padding-bottom: 0px!important;
			padding-left: unset!important;
			width: 100%!important;
		}
	section#Slots{background:unset!important;position: relative;top: 118px;margin-left: 54px !important;margin-right: 50px !important;}
	.game-list {
		width: 320px !important;
		height: 320px !important;
        background: url(https://shopgilgaming.com//storage/images/TMyTpg6Ydk_1630436583.png) no-repeat;
		position: relative !important;
		background-size: contain !important;
	}
	.wheeling{
		
	}
	#slot1, #slot2, #slot3{
			margin-top: -110px!important;
			margin-bottom:10px!important;
			margin-left: -30px!important;
			margin-right: 0px!important;
			background-size: 62px 60px!important;
			width: 290px!important;
			height: 100px!important;position: relative;border-radius: 3px;}
			#slot1{top:1px}
			#slot2{top:1px}
			#slot3{top:1px;margin-right:0!important}
	section#Gira{
	    position: relative;
	    top: 111px;
	}
	#Gira {
		position: absolute;
    width: 170px;
    height: 70px;
    background: url(/assets/frontend/play.png) no-repeat;
    background-color: rgba(0, 0, 0, 0);
    background-size: auto;
    background-size: 170px 70px;
    margin: auto;
    top: 85%;
    right: 70px;
		}
}
    @media  screen and (max-width: 580px){
        section#Slots {
            top: 130px;
        }
    }
    main {
        background: transparent;
        border-radius: 5px;
        margin-top: 50px;
        padding-top: 324px;
        padding-bottom: 20px;
        padding-left: 185px;
        width: 100%;
    }

    section#Slots {
        border-radius: 15px;
        background-color: #FAFAFA;
    }

    section#Gira {
        margin-top: 25px;
        padding-top: 25px;
        padding-bottom: 25px;
        border-radius: 5px;
        text-align: center;
        background-color: #00000;
        color: #ef5350;
        font-size: 25px;
        cursor: pointer;
    }
    #try{
        cursor: pointer;
    }

    section#Gira:hover {
        background-color: #0000;
    }

    .noticeModal .modal-body {
        color: #000
    }

    section#info {
        background-color: #616161;
        padding-left: 12px;
        padding-bottom: 12px;
        border-radius: 5px;
        overflow: hidden;
        animation-duration: 1s;
        color: #BDBDBD;
        margin-top: 50px;
        margin-left: 30%;
        margin-right: 30%;
        display: none;
    }

    #slot1,
    #slot2,
    #slot3 {
        display: inline-block;
        margin-top: 5px;
        margin-left: 15px;
        margin-right: 15px;
        background-size: 150px 150px;
        width: 150px;
        height: 150px;
    }
   
      

    @media  screen and (min-width: 580px) {
        .game-list {
            width: 659px;
            height: 568px;
            background: url(https://shopgilgaming.com//storage/images/TMyTpg6Ydk_1630436583.png) no-repeat;
            background-size: contain;
            position: relative;
        }

        main {
            background: transparent;
            border-radius: 5px;
            margin-top: 30px;
            padding-top: 246px;
            padding-bottom: 20px;
            padding-left: 111px;
            width: 100%;
        }

        #Slots {
            background: transparent !important;
        }

        #Gira{
       
    position: absolute;
    background: url(https://shopnttpheff.com/assets/frontend/play.png) no-repeat;
    background-color: rgba(0, 0, 0, 0);
    background-size: auto;
    left: 23%;
    bottom: 70px;
    padding: 0 !important;
    top: 85%;

        }

        #slot1,
        #slot2,
        #slot3 {
            display: inline-block;
            margin-top: -240px;
            margin-left: -100px;
            margin-right: 0px;
            background-size: 129px 118px;
            width: 550px;
            height: 118px;
            border-radius: 6px;
        }

        .scrollauto {
            overflow: auto !important
        }

        .dropdownlist {
            position: absolute;
            left: 0;
            bottom: 120px;
            width: 100%;
            padding: 0 70px;
            text-align: center;
        }

        .pltry {
            position: relative;
            z-index: 100;
            position: absolute;
            bottom: -20px;
            left: 290px
        }
    }

</style>
   
    <meta name="csrf-token" content="ukzEkN9kXqbUFz4UWIc8UqvyOe4JsLlF4lNOlOEk"> 
    
  <div class="container content-black">
    <link href="assets/frontend/vongquay/css/components.css" id="style_components" rel="stylesheet" type="text/css">
    <link href="assets/frontend/vongquay/css/style.css" rel="stylesheet" type="text/css">

    <div class="c-content-title-1 pd50">
        <h3 class="c-center c-font-uppercase c-font-bold">THÙNG VẬT PHẨM</h3>
            <div class="c-line-center c-theme-bg"></div>
    <style type="text/css">
        .online-out{
            color: #000; font-size: 12px; margin-left: 10px; margin-bottom: 10px
        }
        @media    screen and (min-width: 640px) {
            .online-out{
                margin-left: 100px
            }
        }
        .online{
            background-color: #04ab36; border-radius: 100%; border: 2px solid #fff; width: 15px; height: 15px; float: left; margin-right: 10px
        }

    </style>
   <?php
    // gán random giá trị nổ hũ 
$dangchoi = Rand(500, 1000);
$banchoichung = Rand(1, 10);

?>
    <div class="online-out">
        <div class="online"></div>
        Số người đang chơi: <?php echo number_format($dangchoi);?> (<?php echo number_format($banchoichung);?> bạn chung)    </div>
    </div>
<style>
    #rotate-play{
        width: 100%;
        max-width: 100%;
        opacity: 1;
        background: url(https://quanlyshop.vip//upload/doanhmuc/test/khung.png) no-repeat center center;
        background-size: contain;
    }
</style>
    <div id="boxfull" class="col-lg-6 col-md-12"> 
     <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl"> 
      <div class="row-flex-safari game-list" style="margin-bottom: 40px"> 
       <main> 
        <section id="status"></section> 
        <section id="Slots"> 
         <div id="slot1" class="a1">
          <img id="role_1" style="width: 100%;" src="https://shopgilgaming.com/storage/images/WlhWZzT8SO_1630436583.gif">
         </div> 
        </section> 
      

        <div id="Gira" title="Nổ hũ - khi đạt 100% sẽ có quà">
								<img src="https://shopgilgaming.com/storage/images/0V0ZTHqdqu_1630436583.png" id="quay">
							</div>
        <div class="clearfix"></div> 
       </main> 
       </div>
            </div>
        </div>
   




<style type="text/css">
    .list-roll-inner {
    width: 85%;
    margin-top: 30px;
    max-height: 380px;
    overflow-y: scroll;
    margin: 0 auto;
}
</style>

 <div class="col-lg-1 col-md-hidden"></div>
    <div class="col-lg-3 col-md-12 col-sm-12 btn-right" style="margin-top: 20px;">
        <!-- <div class="btn-top"> -->
        <a class="col-xs-12 thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
            <span>
                <i class="la la-cloud-upload"></i>
                <span>Thể Lệ</span>
            </span>
        </a>
        <a href="/user/history/bingo" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
            <span>
                <i class="la la-cloud-upload"></i>
                <span>Lịch sử quay</span>
            </span>
        </a>
        <div class="text-center"> &nbsp;</div>
        <!-- </div> -->
    </div>
<div class="modal fade" id="noticeModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
                </div>
				<div class="middle nohuthang" style="text-align: center;padding: 15px 0;"></div>
                <div class="modal-body content-popup" style="font-family: helvetica, arial, sans-serif;text-align:center">
                   
                </div>
                <div class="modal-footer">
					<a href="" id="btnWithdraw" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill" >Rút quà</a>
                    <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="noticeModalNoHu" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
                </div>

                <div class="modal-body content-popup" style="font-family: helvetica, arial, sans-serif;">
                   
                </div>
                <div class="modal-footer">
					<a href="" id="btnWithdraw" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill" >Rút quà</a>
                    <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
	
	
    <input type="hidden" id="numgift" value="8">
	<input type="hidden" id="ID_NROGEM" value="1802">
	<input type="hidden" id="ID_NROCOIN" value="1801">
	<input type="hidden" id="ID_NINJAXU" value="1795">
																															
<script type="text/javascript">
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
    if( isMobile.any() ) {
        $('#squaredesktop').remove();
        $('#boxfull').addClass('nopadding');
    }else{
        $('#squaremobile').remove();
    }
</script>
 
    <div class="modal fade" id="theleModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title"
                        style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thể Lệ
                    </h4>
                </div>

                <div class="modal-body" style="font-family: helvetica, arial, sans-serif;color:#000">
                    <p style="color:black;"><strong><p><strong><strong>1 Lần Quay <?php echo $kun->compact_number($ros['giatien']);?> - KHI BẠN C&Oacute; ĐỦ <?php echo $kun->compact_number($ros['giatien']);?> BẠN CHỈ CẦN NHẤP QUAY L&Agrave; N&Oacute; QUAY</strong></strong></p></strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="noticeModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title"
                        style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo <span style="color:red;font-weight: bold;" id="name_product">Quay thử</span>
                    </h4>
                </div>

                <div class="modal-body content-popup" style="font-family: helvetica, arial, sans-serif;color:#000">
                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase"
                        data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".thele").on("click", function () {
                $("#theleModal").modal('show');
            })
            $(".uytin").on("click", function () {
                $("#uytinModal").modal('show');
            })
            $(".luotquay").on("click", function () {
                $("#luotquayModal").modal('show');
            })
        });
    </script>
        <?php
        for($i=1; $i <= 7; $i++) { 
echo '<img style="display: none;" src="/assets/img/bingo/'.$i.'.png">';            
        }
?>


<script type="text/javascript">
$( document ).ready(function() {
});




    $('#quay').click(function (){

    document.getElementById("quay").disabled = true;
    document.getElementById("quay").innerHTML = "";

  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/thung-vat-pham', 
        data: {}, 
        success: function (json) {

            if(json.status == 3) {
     swal("Lỗi!", "Vui lòng đăng nhập để quay!", "error");   
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "";    
            }else if(json.status == 4) {
     swal("Lỗi!", "Bạn Không Đủ Tiền Trong Tài Khoản Vui Lòng Nạp Thêm!", "error");  
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "";
            }else if(json.status == 1) {

         document.getElementById("quay").disabled = true;
         document.getElementById("quay").innerHTML = "";

                var data = json.data;

                console.log("OK");

                 loop_wait(data.role_1, json.msg);

            }else {
     swal("Lỗi!", "Lỗi hệ thống!", "error");                
            }

    }
});

    });


function loop_wait(role_1, msg) {

    var items = [1,2,3,4,5,6,7];  // name of img random images

    var stop_bingo_1 = 70; 

  


// Bingo 1
for (let i=1; i<=stop_bingo_1; i++) {setTimeout( function timer(){
 var item_1 = items[Math.floor(Math.random() * items.length)];
  change_img("role_1", item_1);
 if(i == stop_bingo_1) {
  change_img("role_1", role_1); 
  return
 }
 }, i*40 );}



setTimeout( function show_ketqua(){
     swal("Thành Công!", msg, "success"); 
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "";   
         reload_money();
 }, 3200 );



}

function change_img(id, img_name) {
        roll = document.getElementById(id);
        roll.src = "";
        roll.src = '/assets/img/bingo/'+img_name+'.png';
}



</script>