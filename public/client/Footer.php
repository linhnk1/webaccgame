<div id="thongbao"></div>
<div class="snowflakes" aria-hidden="true">
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
  <div class="snowflake">❅</div>
  <div class="snowflake">❆</div>
</div>

<style>
  @-webkit-keyframes snowflakes-fall {
    0% {top:-10%}
    100% {top:100%}
  }
  @-webkit-keyframes snowflakes-shake {
    0%,100% {-webkit-transform:translateX(0);transform:translateX(0)}
    50% {-webkit-transform:translateX(80px);transform:translateX(80px)}
  }
  @keyframes snowflakes-fall {
    0% {top:-10%}
    100% {top:100%}
  }
  @keyframes snowflakes-shake {
    0%,100%{ transform:translateX(0)}
    50% {transform:translateX(80px)}
  }
  .snowflake {
    color: #fff;
    font-size: 1em;
    font-family: Arial, sans-serif;
    text-shadow: 0 0 5px #000;
    position:fixed;
    top:-10%;
    z-index:9999;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none;
    cursor:default;
    -webkit-animation-name:snowflakes-fall,snowflakes-shake;
    -webkit-animation-duration:10s,3s;
    -webkit-animation-timing-function:linear,ease-in-out;
    -webkit-animation-iteration-count:infinite,infinite;
    -webkit-animation-play-state:running,running;
    animation-name:snowflakes-fall,snowflakes-shake;
    animation-duration:10s,3s;
    animation-timing-function:linear,ease-in-out;
    animation-iteration-count:infinite,infinite;
    animation-play-state:running,running;
  }
  .snowflake:nth-of-type(0){
    left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s
  }
  .snowflake:nth-of-type(1){
    left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s
  }
  .snowflake:nth-of-type(2){
    left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s
  }
  .snowflake:nth-of-type(3){
    left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s
  }
  .snowflake:nth-of-type(4){
    left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s
  }
  .snowflake:nth-of-type(5){
    left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s
  }
  .snowflake:nth-of-type(6){
    left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s
  }
  .snowflake:nth-of-type(7){
    left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s
  }
  .snowflake:nth-of-type(8){
    left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s
  }
  .snowflake:nth-of-type(9){
    left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s
  }
  .snowflake:nth-of-type(10){
    left:25%;-webkit-animation-delay:2s,0s;animation-delay:2s,0s
  }
  .snowflake:nth-of-type(11){
    left:65%;-webkit-animation-delay:4s,2.5s;animation-delay:4s,2.5s
  }
</style>
<script src="<?=BASE_URL('template/theme/assets/frontend/js/footer.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
<script>
new ClipboardJS('.copy');
</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=281459696201789&autoLogAppEvents=1"
    nonce="ubP0EsuB"></script>


<footer>
    <svg viewBox="0 0 120 28">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="1" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="
           1 0 0 0 0  
           0 1 0 0 0  
           0 0 1 0 0  
           0 0 0 13 -9" result="goo" />
                <xfeBlend in="SourceGraphic" in2="goo" />
            </filter>
            <path id="wave"
                d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
        </defs>
        <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2"></use>
        <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0"></use>
        <g class="gooeff" filter="url(#goo)">
            <circle class="drop drop1" cx="20" cy="2" r="8.8" />
            <circle class="drop drop2" cx="25" cy="2.5" r="7.5" />
            <circle class="drop drop3" cx="16" cy="2.8" r="9.2" />
            <circle class="drop drop4" cx="18" cy="2" r="8.8" />
            <circle class="drop drop5" cx="22" cy="2.5" r="7.5" />
            <circle class="drop drop6" cx="26" cy="2.8" r="9.2" />
            <circle class="drop drop1" cx="5" cy="4.4" r="8.8" />
            <circle class="drop drop2" cx="5" cy="4.1" r="7.5" />
            <circle class="drop drop3" cx="8" cy="3.8" r="9.2" />
            <circle class="drop drop4" cx="3" cy="4.4" r="8.8" />
            <circle class="drop drop5" cx="7" cy="4.1" r="7.5" />
            <circle class="drop drop6" cx="10" cy="4.3" r="9.2" />
            <circle class="drop drop1" cx="1.2" cy="5.4" r="8.8" />
            <circle class="drop drop2" cx="5.2" cy="5.1" r="7.5" />
            <circle class="drop drop3" cx="10.2" cy="5.3" r="9.2" />
            <circle class="drop drop4" cx="3.2" cy="5.4" r="8.8" />
            <circle class="drop drop5" cx="14.2" cy="5.1" r="7.5" />
            <circle class="drop drop6" cx="17.2" cy="4.8" r="9.2" />
            <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />
        </g>
    </svg>
    </div>
    </div>
    </div>
    <div class="py-3" style="background: #1b1a1a">
        <div
            class="mt-2 mb-32 md:mb-0 px-4 md:px-0 relative max-w-6xl w-full mx-auto text-white grid grid-cols-12 gap-4 font-semibold text-gray-300">
            <div class="col-span-12 md:col-span-4 py-2">
                <span class="mt-4 py-4 px-4 flex flex-col items-center"><img src="<?=$CMSNT->site('logo');?>"
                        class="mb-2" style="max-width:250px;"> <span
                        class="text-center"> HỆ THỐNG BÁN ACC TỰ ĐỘNG<br>
ĐẢM BẢO UY TÍN VÀ CHẤT LƯỢNG.</span></span>
            </div>
            <div class="col-span-12 md:col-span-5 py-2">
                CHÚNG TÔI LUÔN LẤY UY TÍN LÀM HÀNG ĐẦU ĐỐI VỚI KHÁCH HÀNG.<br>
HI VỌNG SẼ ĐƯỢC PHỤC VỤ CÁC BẠN. CẢM ƠN!'' </div>
            <div class="col-span-12 md:col-span-3 py-2">
               
            </div>
        </div>
    </div>


    <div class="py-2 text-white font-medium" style="background: #151212" bis_skin_checked="1">
        <div class="max-w-6xl mx-auto text-center" bis_skin_checked="1">
            Vận hành bởi <a href="https://tuanori.vn/">TUANORI.VN</a> - Developer by <a target="_blank"
                href="https://tuanori.vn/">TUANORI.VN</a>
        </div>
    </div>
</footer>

 
<div class="hotline-phone-ring-wrap">
	<div class="hotline-phone-ring">
		<div class="hotline-phone-ring-circle"></div>
		<div class="hotline-phone-ring-circle-fill"></div>
		<div class="hotline-phone-ring-img-circle">
		<a href="tel:<?=$CMSNT->site('hotline');?>" class="pps-btn-img">
			<img src="<?=BASE_URL('assets/img/icon-call.png');?>" alt="Gọi điện thoại" width="50">
		</a>
		</div>
	</div>
</div>
<button type="button"
    class="cd-top h-10 w-10 border-2 border-blue-600 fixed opacity-90 rounded text-2xl text-white bg-blue-500 rounded-full font-bold flex items-center justify-center focus:outline-none"
    style="right:2%;bottom:14%;"><i class="bx bx-up-arrow-alt"></i></button>
</html>