<?php
defined('KUNKEYPR') or exit('Restricted Access');
$ros = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `setting_may_xeng_hoa_phuong_ruc_lua`"));
?>
<div class="c-layout-page">


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
@media  screen and (max-width: 580px) {
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
		background:url(https://jintvshop.com/storage/images/H3LHzzYRTp_1624335914.png) no-repeat;
		position: relative !important;
		background-size: contain !important;
	}
	.wheeling{
		
	}
	#slot1, #slot2, #slot3{
			margin-top: -1px!important;
			margin-bottom:10px!important;
			margin-left: 0px!important;
			margin-right: 8px!important;
			background-size: 62px 60px!important;
			width: 62px!important;
			height: 60px!important;position: relative;border-radius: 3px;}
			#slot1{top:1px}
			#slot2{top:1px}
			#slot3{top:1px;margin-right:0!important}
	section#Gira{position: relative;top: 111px;left: -16px;}
	#Gira {
			position: absolute;
			width: 170px;
			height: 70px;
			background: url() no-repeat;
				background-color: rgba(0, 0, 0, 0);
				background-size: auto;
			background-size: 170px 70px;
			margin:auto
		}
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
}
section#Gira{
    margin-top: 25px;
    padding-top: 25px;
    padding-bottom: 25px;
    border-radius: 5px;
    text-align: center;
    background-color: #FFFFFF;
    color: #ef5350;
    font-size: 25px;
    cursor: pointer;
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
         .a1 {
        background-image: url("https://jintvshop.com/storage/images/4C6M2M9jZ3_1624336500.gif");
    }
        


@media  screen and (min-width: 580px) {
   .game-list{
        width: 659px;
		height: 568px;
        background:url(https://jintvshop.com//storage/images/H3LHzzYRTp_1624335914.png) no-repeat;
		background-size: 659px 405px;
		position: relative;
    } 
    main{
        background: transparent;
		border-radius: 5px;
		margin-top: 30px;
		padding-top: 229px;
		padding-bottom: 20px;
		padding-left: 111px;
		width: 100%;
    }
    #Slots{
        background:transparent !important;
    }
    #Gira{
        position: absolute;
        width: 170px;
        height: 70px;
        background:url() no-repeat;
        background-size: 170px 70px;
        left: 260px;
        bottom: 38px;       
    }
    #slot1, #slot2, #slot3 {
		display: inline-block;
		margin-top: 10px;
		margin-left: 0px;
		margin-right: 19px;
		background-size: 129px 118px;
		width: 130px;
		height: 118px;
		border-radius: 6px;
    }
	.scrollauto{overflow:auto!important}
	.dropdownlist{position: absolute;left: 0;bottom: 105px;width: 100%;padding: 0 70px;text-align: center;}
	.pltry{position:relative;z-index:100;position: absolute;bottom: 5px;left: 290px}
}
}


</style>
<meta name="csrf-token" content="ukzEkN9kXqbUFz4UWIc8UqvyOe4JsLlF4lNOlOEk">

<div class="container">
<div class="c-content-title-1 pd50">
    <h3 class="c-center c-font-uppercase c-font-bold" style="color:black">HOA PHƯỢNG RỰC LỬA</h3>
    <div class="c-line-center c-theme-bg"></div>
</div>
<div class="col-lg-1 col-md-hidden"></div>
<div id="boxfull" class="col-lg-6 col-md-12" >
    <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">

        <div class="row-flex-safari game-list" style="margin-bottom: 100px">
            <main>
                <section id="status"></section>
                <section id="Slots">
                    <div id="slot1" class=""><img id="role_1" style="width: 100%;" src="https://jintvshop.com/storage/images/4C6M2M9jZ3_1624336500.gif"></div>
                    <div id="slot2" class=""><img id="role_2" style="width: 100%;" src="https://jintvshop.com/storage/images/4C6M2M9jZ3_1624336500.gif"></div>
                    <div id="slot3" class=""><img id="role_3" style="width: 100%;" src="https://jintvshop.com/storage/images/4C6M2M9jZ3_1624336500.gif"></div>
                    </section>
                <section id="Gira">
         <img src="https://jintvshop.com/storage/images/nz1Wh5vCPt_1625779546.png" id="khoakillall">
        </section> 
           <div class='clearfix'></div>
                <section class="dropdownlist" style="color: black;">
         <select style="width:50%;color: black;margin: auto;padding:5px 10px;border: 1px solid #144ed7;" id="x" name="x"> 
         <option value="271">QUAY X1 -  <?php echo number_format($ros['giatien']);?> đ/ 1 Lần Quay</option>
         </select> 
        </section> 

   


            </main>
        </div>
    </div>
</div>
            
<div class="col-lg-2 col-md-hidden"></div>
<div class="col-lg-3 col-md-12 col-sm-12 btn-right">
    <!-- <div class="btn-top"> -->
    <div class="text-center">           
        <h3 class="num-play" style="" >còn <span><?php echo number_format($user['quanhuy']);?> Quân Huy</h3>

    </a>
    </div>

    <a href="#" class="col-xs-12 thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Thể Lệ</span>
        </span>
    </a>

        <a href="/html/kimcuong" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span></span>
            <i class="la la-cloud-upload"></i>
            <span>Rút quân huy</span>
        </span>
    </a>
        <a href="/html/lichsuquay" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Lịch sử quay</span>
        </span>
    </a>
        
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

            <div class="modal-body" style="font-family: helvetica, arial, sans-serif;color:black">
                <p>KHI BẠN CÓ ĐỦ <?php echo $kun->compact_number($ros['giatien']);?> BẠN CHỈ CẦN NHẤP QUAY LÀ NÓ QUAY

Khi 3 ô quà trùng nhau là bạn sẽ trúng giải , 
Khi 3 ô quà lệnh nhau bạn sẽ ngẫu nhiên nhận được mức kim cương nhất định



</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
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
<div class="modal fade" id="uytinModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Uy Tín</h4>
            </div>

            <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
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
echo '<img style="display: none;" src="/assets/img/may-xeng-hoa-phuong-ruc-lua/'.$i.'.gif">';            
        }
?>


<script type="text/javascript">
$( document ).ready(function() {
});




    $('#khoakillall').click(function (){

    document.getElementById("khoakillall").disabled = true;
    document.getElementById("khoakillall").innerHTML = "Đang Kiểm Tra!";

  $.ajax({ 
        type: 'post', 
        dataType: "JSON",
        url: '/system/may-xeng-hoa-phuong-ruc-lua', 
         data: { }, 
        success: function (json) {

            if(json.status == 3) {
     swal("Lỗi!", "Vui lòng đăng nhập để quay!", "error");   
         document.getElementById("khoakillall").disabled = false;
         document.getElementById("khoakillall").innerHTML = "Quay";    
            }else if(json.status == 4) {
     swal("Lỗi!", "Bạn Không Đủ Tiền Trong Tài Khoản Vui Lòng Nạp Thêm!", "error");  
         document.getElementById("khoakillall").disabled = false;
         document.getElementById("khoakillall").innerHTML = "Quay!";
            }else if(json.status == 1) {

         document.getElementById("khoakillall").disabled = true;
         document.getElementById("khoakillall").innerHTML = "Đang Quay";

                var data = json.data;

                console.log("OK");

                 loop_wait(data.role_1, data.role_2, data.role_3, json.msg);

            }else {
     swal("Lỗi!", "Lỗi hệ thống!", "error");                
            }

    }
});

    });


function loop_wait(role_1, role_2, role_3, msg) {

    var items = [1,2,3,4,5,6];  // name of img random images

    var stop_bingo_1 = 50; // 10s
    var stop_bingo_2 = 55; // 13s
    var stop_bingo_3 = 60; // 16s


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


setTimeout( function show_ketqua(){
     swal("Thành Công!", msg, "success"); 
         document.getElementById("khoakillall").disabled = false;
         document.getElementById("khoakillall").innerHTML = "Quay";   
         reload_money();
 }, 3200 );



}

function change_img(id, img_name) {
        roll = document.getElementById(id);
        roll.src = "";
        roll.src = '/assets/img/may-xeng-hoa-phuong-ruc-lua/'+img_name+'.gif';
}



</script>
</div>