<?php
defined('KUNKEYPR') or exit('Restricted Access');
$ros = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_may_xeng_ban_banh_mi`"));
?>
	<div class="c-layout-page">

	    <div class="container content-black">
  <style>

    .btn + .btn{
        margin-left: 0!important;
    }
	.pd50{padding-top:50px}
    .btn-right .btn{
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

    .btn-right .btn:hover{
        background-color: #ff8db2;
        border: 2px solid #ff8db2;
    }
    .square{
        width: 100%;
    }
    #squaredesktop .box{
        min-width: 40px;
        min-height: 40px;
        /*background-color: #ccc;*/
        padding: 10px;
    }
    #squaremobile .box{
        padding: 5px;
    }
    .box img.active{

          box-shadow:
            0 0  5px #fff, 
            0 0  10px #fff, 
            0 0  15px #fff, 
            0 0  20px #49fff7, 
            0 0  35px #49fff7
    }
    .outer-btn{
        width: 100%
    }
    .outer-btn:hover{
        opacity: 0.7
    }
    #squaremobile .outer-btn{
        margin-bottom: -50px;
    }
    .nopadding{
        padding: 0;
    }
</style>
<style>

@import  url('https://fonts.googleapis.com/css?family=Roboto');
@import  url('https://fonts.googleapis.com/css?family=Roboto+Mono');
a{
    color: #283593;
    text-decoration: none;
}
h3{
    margin-top: 12px;
}
*{
    margin:0px;
}
.game-list{
    width: 580px;
    margin: 0 auto;
}




main{
 background: transparent;
border-radius: 5px;
margin-top: 50px;
padding-top: 324px;
padding-bottom: 20px;
padding-left: 185px;
width: 100%;
}
section#Slots{
    border-radius: 15px;
    background-color: #FAFAFA;
	margin-bottom: 35px;
}
section#Gira{
    
    border-radius: 5px;
    text-align: center;
    color: #ef5350;
    font-size: 25px;
    cursor: pointer;
	margin: auto;
	margin-top: 5px;
}
section#Gira:hover{
   
}
section#info{
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
#slot1, #slot2, #slot3{
    display: inline-block;
    margin-top: 5px;
    margin-left: 15px;
    margin-right: 21px;
    background-size: 150px 150px;
    width: 150px;
    height: 150px;
}
         .a1{
        background-image: url("https://shopgilgaming.com/storage/images/rhjZa9tKYy_1630437967.gif");
    }
        .a2{
        background-image: url("/assets/img/bingo/2.gif");
    }
        .a3{
        background-image: url("/assets/img/bingo/3.gif");
    }
        .a4{
        background-image: url("/assets/img/bingo/4.gif");
    }
        .a5{
        background-image: url("/assets/img/bingo/5.gif");
    
    }
        .a6{
        background-image: url("/assets/img/bingo/6.gif");
    
    }
/*.a1{
    background-image: url("/res/tiles/seven.png");
}
.a2{
    background-image: url("/res/tiles/cherries.png");
}
.a3{
    background-image: url("/res/tiles/club.png");
}
.a4{
    background-image: url("/res/tiles/diamond.png");
}
.a5{
    background-image: url("/res/tiles/heart.png");
}
.a6{
    background-image: url("/res/tiles/spade.png");
}
.a7{
    background-image: url("/res/tiles/joker.png");
}*/

@media  screen and (max-width: 580px) {
	.game-list img {
			width: auto;
			height: 100%;
		}
		.pltry{text-align:center}
	.num-play-try{position:relative;z-index:100}
    .game-list{
        width: 320px;
    }
	main{
			background: unset !important;
			border-radius: 5px !important;
			margin-top: 0px !important;
			padding-top: 122px !important;
			padding-bottom: 0px !important;
			padding-left: 38px !important;
			padding-right: 38px !important;
			width: 100% !important;
		}
	
	.game-list {
		width: 340px!important;
		height: 340px!important;
		background: url(https://shopgilgaming.com/storage/images/K07of8nlNX_1630436748.png) no-repeat top center!important;
		position: relative!important;background-size: contain !important;
	}
    #Slots{
        background:transparent !important;
    }
    #Gira{
        position: relative;
		width: 100%;
		height: 35px;
		/* background: url(/assets/frontend/play.png) no-repeat; */
			background-color: rgba(0, 0, 0, 0);
			background-size: auto;
		background-size: 70px 35px;
		padding: 0 !important;      
    }
    #slot1, #slot2, #slot3, #slot4, #slot5 {
        display: inline-block;
		margin-top: 8px;
		margin-left: 0px;
		margin-right: 0px;
		background-size: 50px 48px;	
		width: 50px;
		height: 48px;
		border-radius: 4px;
    }
	#slot2{margin-right: 0px;}
	#slot3{margin-right: 0px;}
	#slot4{margin-right: -1px;}
	#slot5{margin-right: -2px;}
	.dropdownlist{	position: relative;
					width: 100%;
					padding: 0 0px;
					text-align: center;}
					#numrolllop{width: 60%!important;
						margin: auto!important;
						padding: 1px 5px!important;
						border: 1px solid #144ed7!important;}
}

@media  screen and (min-width: 580px) {
	.pltry{text-align:center}
	.num-play-try{position:relative;z-index:100}
   .game-list{
        width: 720px;
        height: 630px;
        background:url(https://shopgilgaming.com/storage/images/K07of8nlNX_1630436748.png) no-repeat top center;
        background-size: 720px 400px;
        position: relative;
    } 
    main{
        background: transparent;
		border-radius: 5px;
		margin-top: 30px;
		padding-top: 273px;
		padding-bottom: 20px;
		padding-left: 81px;
		padding-right: 70px;
		width: 100%;
    }
    #Slots{
        background:transparent !important;
    }
    #Gira{
        position: relative;
        width: 100%;
        height: 70px; 
    }
	#Gira img{height: 70px;width: auto;}
    #slot1, #slot2, #slot3, #slot4, #slot5 {
        display: inline-block;
		margin-top: -10px;
		margin-left: -1px;
		margin-right: 5px;
		background-size: 105px 98px;
		width: 105px;
		height: 98px;
		border-radius:10px
    }
	#slot2{margin-right: 5px;}
	#slot3{margin-right: 5px;}
	#slot4{margin-right: 5px;}
	#slot5{margin-right: 3px;}
	.dropdownlist{	position: relative;
		
					width: 100%;
					padding: 0 70px;
					text-align: center;}
}
</style>
   
   
   <meta name="csrf-token" content="aB2DLg2UUxnMCMM0f0YCFjwx8crudcFi3pvdg517">
<div class="container">
    <div class="c-content-title-1">
        <h1 class="c-center c-font-uppercase c-font-bold">Máy Xèng Bán Bánh Mì</h1>
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
    <div class="col-lg-1 col-md-hidden"></div> 
    <div id="boxfull" class="col-lg-6 col-md-12"> 
     <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl"> 
      <div class="row-flex-safari game-list" style="margin-bottom: 40px"> 
       <main> 
        <section id="status"></section> 
        <section id="Slots"> 
         <div id="slot1" class="a1">
          <img id="role_1" style="width: 100%;" src="">
         </div> 
         <div id="slot2" class="a1">
          <img id="role_2" style="width: 100%;" src="">
         </div> 
         <div id="slot3" class="a1">
          <img id="role_3" style="width: 100%;" src="">
         </div> 
         <div id="slot4" class="a1">
          <img id="role_4" style="width: 100%;" src="">
         </div> 
         <div id="slot5" class="a1">
          <img id="role_5" style="width: 100%;" src="">
         </div> 
        </section> 
        <section id="Gira">
         <img src="https://shopgilgaming.com/storage/images/qtkf7GnHNu_1625297377.png" id="quay">
        </section> 
        <div class="clearfix"></div> 
        <section class="dropdownlist" style="color: black;"> 
         <select style="width:50%;color: black;margin: auto;padding:5px 10px;border: 1px solid #144ed7;" id="x" name="x"> <option value="271">QUAY X1 - 18k/ 1 Lần Quay</option> </select> 
        </section> 
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

<div class="col-lg-3 col-md-12 col-sm-12 btn-right">
    <!-- <div class="btn-top"> -->
    <div class="text-center">           
                            <h3 class="num-play" style="color:white">Bạn còn <span><?php echo number_format($user['kimcuong']);?></span>Kim Cương.</h3>
                                          <li><a style="" class="ani-zoom btn-img deposit-btn disabled" href="/nap-tien.html" ><img src="https://shopchinhthuc.vn/mualuot.png" alt=""></a></li>

                                                          </a>
    </div>
    <a href="#" class="col-xs-12 thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Thể Lệ</span>
        </span>
    </a>
    <!--<a href="#" class="col-xs-12 luotquay btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Lượt quay gần đây</span>
        </span>
    </a>-->
    <a href="/html/lichsuquay" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Lịch sử quay trúng vật phẩm</span>
        </span>
    </a>
    <!--<a href="/slotmachine/logaccgame/880" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Lịch sử quay trúng nick</span>
        </span>
    </a>-->
    <a href="/html/kimcuong" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Rút vật phẩm</span>
        </span>
    </a>
   <!-- <a href="/user/withdrawservice/0" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Rút dịch vụ</span>
        </span>
    </a>-->
        
    <div class="text-center"> &nbsp</div>
    <!-- </div> -->
</div>
<div class="col-lg-2 col-md-hidden"></div>
<div class="modal fade" id="theleModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thể Lệ</h4>
            </div>

            <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                <b style="color:black">                         VÒNG QUAY BINGO <?php echo $kun->compact_number($ros['giatien']);?> <br>
Các bạn có thể mua lượt quay với số nhân giá rẻ<br>
Quay 1 Phát Với X1 Chỉ Tốn <?php echo $kun->compact_number($ros['giatien']);?> <br>

-----------------------------------------------------------------<br>
------------------------------------------------------------------<br>
Nếu Quay Trúng 5 Ô Giống Nhau Các Bạn Sẽ Được số kim cương đó<br>
Ví Dụ : Bạn Đang Mua X1 và Quay Trúng 5 Hình Giống Nhau Sẽ Được  <br>
Và Số Kim Cương Bạn Trúng Ở Thời Điểm Đó Là 500Kc Thì Sẽ Được 500 Kim Cương<br>
------------------------------------------------------------------<br>
------------------------------------------------------------------<br>
Nếu Quay các Không Giống Nhau Các Bạn Sẽ Không nhận được kim cương<br> <br>

Quay Ngay Để Trúng Các Phần Quà Hấp Dẫn Từ BQT <br>

------------CHÚC CÁC BẠN MAY MẮN------------<br> </b>            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
</div></div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $(".thele").on("click", function(){
            $("#theleModal").modal('show');
        })
        $(".uytin").on("click", function(){
            $("#uytinModal").modal('show');
        })
        $(".luotquay").on("click", function(){
            $("#luotquayModal").modal('show');
        })
    });
</script>
        <?php
        for($i=1; $i <= 7; $i++) { 
echo '<img style="display: none;" src="/assets/img/may-xeng-ban-banh-mi/'.$i.'.gif">';            
        }
?>


<script type="text/javascript">
$( document ).ready(function() {
});




    $('#quay').click(function (){

    document.getElementById("quay").disabled = true;
    document.getElementById("quay").innerHTML = "Đang Kiểm Tra!";

  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/may-xeng-ban-banh-mi', 
        data: {}, 
        success: function (json) {

            if(json.status == 3) {
     swal("Lỗi!", "Vui lòng đăng nhập để quay!", "error");   
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "Quay";    
            }else if(json.status == 4) {
     swal("Lỗi!", "Bạn Không Đủ Tiền Trong Tài Khoản Vui Lòng Nạp Thêm!", "error");  
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "Quay!";
            }else if(json.status == 1) {

         document.getElementById("quay").disabled = true;
         document.getElementById("quay").innerHTML = "Đang Quay";

                var data = json.data;

                console.log("OK");

                 loop_wait(data.role_1, data.role_2, data.role_3, data.role_4, data.role_5, json.msg);

            }else {
     swal("Lỗi!", "Lỗi hệ thống!", "error");                
            }

    }
});

    });


function loop_wait(role_1, role_2, role_3, role_4, role_5, msg) {

    var items = [1,2,3,4,5,6,7];  // name of img random images

    var stop_bingo_1 = 50; // 5s
    var stop_bingo_2 = 55; // 5s
    var stop_bingo_3 = 60; // 5s
    var stop_bingo_4 = 65; // 5s
    var stop_bingo_5 = 70; // 6s


// Bingo 1
for (let i=1; i<=stop_bingo_1; i++) {setTimeout( function timer(){
 var item_1 = items[Math.floor(Math.random() * items.length)];
  change_img("role_1", item_1);
 if(i == stop_bingo_1) {
  change_img("role_1", role_1); 
  return
 }
 }, i*40 );}

// Bingo 2
for (let i=1; i<=stop_bingo_2; i++) {setTimeout( function timer(){
 var item_2 = items[Math.floor(Math.random() * items.length)];
 change_img("role_2", item_2);
  if(i == stop_bingo_2) {
  change_img("role_2", role_2); 
  return
 }
 }, i*40 );}

// Bingo 3
for (let i=1; i<=stop_bingo_3; i++) {setTimeout( function timer(){
 var item_3 = items[Math.floor(Math.random() * items.length)];
 change_img("role_3", item_3);
  if(i == stop_bingo_3) {
  change_img("role_3", role_3);
  return
 }
 }, i*40 );}

// Bingo 4
for (let i=1; i<=stop_bingo_4; i++) {setTimeout( function timer(){
 var item_4 = items[Math.floor(Math.random() * items.length)];
 change_img("role_4", item_4);
  if(i == stop_bingo_4) {
  change_img("role_4", role_4);
  return
 }
 }, i*40 );}

// Bingo 5
for (let i=1; i<=stop_bingo_5; i++) {setTimeout( function timer(){
 var item_5 = items[Math.floor(Math.random() * items.length)];
 change_img("role_5", item_5);
  if(i == stop_bingo_5) {
  change_img("role_5", role_5);
  return
 }
 }, i*40 );}


setTimeout( function show_ketqua(){
     swal("Thành Công!", msg, "success"); 
         document.getElementById("quay").disabled = false;
         document.getElementById("quay").innerHTML = "Quay";   
         reload_money();
 }, 3200 );



}

function change_img(id, img_name) {
        roll = document.getElementById(id);
        roll.src = "";
        roll.src = '/assets/img/may-xeng-ban-banh-mi/'+img_name+'.gif';
}



</script>