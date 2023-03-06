<?php 
    if($_SESSION['token'] != $user['token']) {
        session_destroy();
        header("Location: /");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
        <meta charset="utf-8"/>
<title><?php echo $title;?></title>
<meta name="description" content="Shop Chính Thức Của <?php echo $_admin['name']; ?>, Nick Free Fire Giá Rẻ, Vòng Quay Kim Cương Nhận Thưởng 99.999 Kim Cương. Truy Cập Ngay Nhận KC Miễn Phí">
<meta name="keywords" content="vòng quay free fire miễn phí,nhận kim cương miễn phí trong free fire,nhận quà free fire miễn phí 2021,kimcuongfreefire,nhận kim cương miễn phí,shop nhận kc miễn phí,vòng quay free fire miễn phí 2021,vòng quay kim cương miễn phí ff,vòng quay miễn phí ff,tặng kim cương free fire,vòng quay kim cương free fire miễn phí 2021,nhận kc miễn phí garena,kim cương free fire miễn phí 2021,nhận kc miễn phí ff,tặng kc free fire miễn phí,vòng quay kc miễn phí,tặng kim cương free fire miễn phí 2021,shop nhận kc miễn phí ff,as mobile shop,as mobile,as mobile free fire,shop as mobile,shop as mobile free fire,shop as mobile 10k ,as mobile mua acc,shop chinhthuc as mobile,shop acc as mobile,shop acc ff,shop acc free fire,shop alice 50k,shop alice rút kim cương,shopalice,alice shop kim cương,alice nạp kim cương,alice vòng quay kim cương,alice bán acc,shop chính thức alice, shop độc quyền alice,mua nick free giá rẻ, mua nick free fire">
<link rel="shortcut icon" href="https://i.imgur.com/G8FERQS.png" type="image/x-icon">
<link rel="canonical" href="index.html">
<meta content="" name="author"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="https://shopasmobi.vn"/>
<meta property="og:title" content="<?php echo $title;?>"/>
<meta property="og:description" content="Shop Chính Thức Của <?php echo $_admin['name']; ?>, Nick Free Fire Giá Rẻ, Vòng Quay Kim Cương Nhận Thưởng 99.999 Kim Cương. Truy Cập Ngay Nhận KC Miễn Phí"/>
<meta property="og:image" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <meta name="csrf-token" content="Sb1BBIXQvuYS5AAZj8LPdcexBv7ZX0OidGhmVap6">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <!--<link href="/assets/frontend/theme/assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>-->
    <!--<link href="/assets/frontend/theme/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>-->
    <link href="/assets/frontend/theme/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <!--<link href="/assets/frontend/theme/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>-->
    <link href="/assets/frontend/theme/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- SweetAlert Plugin Js -->
    <script src="/assets/Scripts/sweetalert/sweetalert.min.js"></script>
    <script src='/assets/js/jquery.min.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Sweetalert Css -->
    <link href="/assets/Scripts/sweetalert/sweetalert.css" rel="stylesheet" />
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="/assets/frontend/theme/assets/global/plugins/magnific/magnific.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/plugins/fancybox/dist/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"/>
    <!--link href="/assets/frontend/theme/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>-->
    <link href="/assets/frontend/theme/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
    <!-- END: PAGE STYLES -->
    <!-- Vòng Quay STYLES -->
    <link href="/assets/frontend/css/vongquaykimcuong.css" rel="stylesheet" type="text/css" />
    <script src="/assets/frontend/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/frontend/plugins/owl-carousel/slider.js"></script>

    <script src="/assets/frontend/plugins/jquery-cookie/jquery.cookie.js"></script>
    <link href="/assets/frontend/css/style.css?tom=" rel="stylesheet" type="text/css" />
    <link href="/assets/frontend/css/util.css" rel="stylesheet" type="text/css" />
    <link href="/assets/frontend/theme/assets/global/plugins/magnific/magnific.css" rel="stylesheet" type="text/css" />
    <script src="/assets/frontend/theme/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
    <!-- BEGIN THEME STYLES -->
    <link href="/assets/frontend/theme/assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="/assets/frontend/theme/assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
    <link href="/assets/frontend/theme/assets/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/assets/frontend/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/assets/frontend/plugins/owl-carousel/owl.theme.css">
    <!--<link rel="stylesheet" href="/assets/frontend/plugins/owl-carousel/owl.transitions.css">-->
    <script src="/assets/frontend/plugins/jquery/jquery-2.1.0.min.js"></script>
    <script src="/assets/frontend/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/frontend/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="/assets/frontend/plugins/owl-carousel/slider.js"></script>
    <script src="/assets/frontend/plugins/jquery-cookie/jquery.cookie.js"></script>
    <!--<script src='/assets/js/jquery.min.js'></script>-->
    <link href="/assets/frontend/css/style.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link href="/assets/frontend/theme/assets/global/plugins/magnific/magnific.css" rel="stylesheet" type="text/css"/>
    <!-- ROTAGE PLUGIN -->
    <script type="text/javascript" src="/assets/Scripts/rotate.js"></script>
    <!-- Global site tag (gtag.js) - Google Ads: 631228161 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-631228161"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-631228161');
    </script>
    <!--Facebook PiXel-->
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2573324336212300');
        fbq('track', 'PageView');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KDT4M9X');</script>
    <!-- End Google Tag Manager -->
    <noscript><img height="1" width="1" style="display:none"
                   src="tr_id_2573324336212300_ev_pageview_noscript_1_jpg.gif"
        /></noscript>
      
    <!-- End Facebook Pixel Code -->
    <!--End-->
    <script src="/assets/frontend/theme/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/plugins/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/assets/frontend/theme/assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/base/js/components.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/base/js/app.js" type="text/javascript"></script>
    <script src="/assets/frontend/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/theme/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/plugins/jquery-mask-plugin-master/dist/jquery.mask.min.js" type="text/javascript"></script>
    <script src="/assets/frontend/js/common_vn.js" type="text/javascript"></script>
    <?php if($user['username']) { ?>
    <!-- PUSHER LIB BY KUNKEY -->
    <script type="text/javascript" src="/assets/Scripts/pusher.js"></script>
    <script src="https://js.pusher.com/3.2/pusher.min.js"></script>

        <script type="text/javascript">
            var pusher = new Pusher('10d5ea7e7b632db09c72', {
                encrypted: true
            });
            var channel = pusher.subscribe('<?php echo $user['username'];?>');
            channel.bind('realtime', function (data) {
                    console.log(data.message);
                    if(data.message) {
                        if(data.type == 'success') {
                            reload_money();
                        }
                            swal(data.title, data.message, data.type);
                    }
                });
        </script>
        

<?php } ?>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M7GP3V6');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="5WL4GvLW5LpkveruQVH8NAUyWDmYA-E6MxXIZlcAWHk" />
</head>
<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7GP3V6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDT4M9X"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="108946381451218"
  theme_color="#fa3c4c"
  logged_in_greeting="Chat với Shop AS Mobi"
  logged_out_greeting="Chat với Shop AS Mobi">
      </div>
</div>
<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
    <div class="c-navbar">
        <div class="container">
            <!-- BEGIN: BRAND -->
            <div class="c-navbar-wrapper clearfix">
                <div class="c-brand c-pull-left">
                    <h1 style="margin: 0px;display: inline-block">
                        <a href="/" class="c-logo" alt="Logo">
                        <!-- <img height="35px" src="/images/QJBppzyHSq_1610609623.png" alt="" class="c-desktop-logo"> -->
                            <img style="display:none"  height="67px" src="<?php echo $_logo ['url'];?>" alt="" class="c-desktop-logo-inverse">
							<img style="display:none" height="35px" src="<?php echo $_logo ['url'];?>" alt="" class="c-mobile-logo">
						</a>
                    </h1>
                    <style type="text/css">
                        @media (min-width: 992px){
                            .c-layout-header .c-brand {
                                margin: 10px 0 17px 0;
                            }
                        }
                    </style>
                    <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                    </button>
                    <style>
                        @media (min-width: 768px){
                            .info-area{display: none !important;}
                        }
                        .info-area a{
                            font-family:Roboto, Arial, Helvetica;
                            font-size:14px;float:right;
                            display:inline-block;
                            width: auto !important;
                            height:auto !important;
                            background: -webkit-linear-gradient(bottom, #FFE900 0%, #F2AC00 100%)!important;
                            padding: 6px 15px;margin-right:15px;border-radius: 5px;
                        }
                        @media (max-width: 992px){
                            .c-layout-header.c-layout-header-default-mobile .c-brand > .c-hor-nav-toggler{top:2px !important;}
                        }
                    </style>
                    <span class="info-area" >
                                                    <a class="" href="<?php echo $href_login;?>" >
                                <?php echo $btn_login;?>
                            </a>
                            <a class="" href="<?php echo $href_reg;?>" >
                                <?php echo $btn_reg;?>
                            </a>
                                            </span>
                    <!--    <button class="c-cart-toggler" type="button">
                            <i class="icon-handbag"></i>
                            <span class="c-cart-number c-theme-bg">2</span>
                        </button>-->
                </div>
                <!-- END: BRAND -->
                <!-- BEGIN: QUICK SEARCH -->
                <form class="c-quick-search" action="#">
                    <input type="text" name="query" placeholder="Tìm kiếm..." value="" class="form-control" autocomplete="off">
                    <span class="c-theme-link">&times;</span>
                </form>
                <!-- END: QUICK SEARCH -->                        <!-- BEGIN: HOR NAV -->
                <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- BEGIN: MEGA MENU -->
                <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
            <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold d-none hidden-xs hidden-sm">
<ul  class="nav navbar-nav c-theme-nav">
<li class="c-menu-type-classic"><a  rel=""  href="index.html" class="c-link dropdown-toggle ">Trang chủ</a></li><li class="c-menu-type-classic"><a  rel=""  href="#" class="c-link dropdown-toggle ">Nạp Tiền<span class="c-arrow c-toggler1"></span></a>
<ul id="children-of-1265" class="dropdown-menu c-menu-type-classic c-pull-left " >
<li class="c-menu-type-classic"><a  rel="" href="/user/napthe" class="">Nạp Thẻ C&agrave;o</a></li><li class="c-menu-type-classic"><a  rel="/atm" href="atm.html" class="load-modal">Nạp ATM/V&iacute;</a></li></ul>
</li><?php echo $btn_admin;?>
<li><a href="<?php echo $href_login;?>" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                    <i class="icon-user"></i> <?php echo $btn_login;?></a>
                    </li><li><a href="<?php echo $href_reg;?>" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                    <i class="icon-user"></i> <?php echo $btn_reg;?></a>
                    </li></ul>
</nav>
<nav class="menu-main-mobile c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold hidden-md hidden-lg">
<ul  class="nav navbar-nav c-theme-nav">
<li class="c-menu-type-classic"><a  rel=""  href="index.html" class="c-link dropdown-toggle ">Trang chủ</a></li><li class="c-menu-type-classic"><a  rel=""  href="#" class="c-link dropdown-toggle ">Nạp Tiền<span class="c-arrow c-toggler1"></span></a>
<ul id="children-of-1265" class="dropdown-menu c-menu-type-classic c-pull-left " >
<li class="c-menu-type-classic"><a  rel="" href="nap-the.html" class="">Nạp Thẻ C&agrave;o</a></li><li class="c-menu-type-classic"><a  rel="/atm" href="atm.html" class="load-modal">Nạp ATM/V&iacute;</a></li></ul>
</li><?php echo $btn_admin;?>  
<li><a href="<?php echo $href_login;?>" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                    <i class="icon-user"></i> <?php echo $btn_login;?></a>
                    </li><li><a href="<?php echo $href_reg;?>" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                    <i class="icon-user"></i> <?php echo $btn_reg;?></a>
                    </li></ul>
</nav>
            <!-- END: MEGA MENU -->
                <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- END: HOR NAV -->
            </div>
            <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
            <!-- BEGIN: CART MENU -->
            <!-- END: CART MENU -->
            <!-- END: LAYOUT/HEADERS/QUICK-CART -->
        </div>
    </div>
</header>
<!-- END: HEADER -->
<!-- END: LAYOUT/HEADERS/HEADER-1 -->