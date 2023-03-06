<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin Panel</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/admin/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap Select Css -->  
    <link href="/admin/assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/admin/assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/admin/assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="/admin/assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="/admin/assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="/admin/assets/css/themes/all-themes.css" rel="stylesheet" />

    <!-- Jquery Core Js -->
    <script src="/admin/assets/plugins/jquery/jquery.min.js"></script>

</head>

<body class="theme-orange">

    <div class="page-loader-wrapper" id="loading-page">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Vui lòng chờ... (Shop đc tạo bởi khoakillall)</p>
        </div>
    </div>



    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <?php if($_SERVER['REQUEST_URI'] == '/admin/') { ?>
                <a href="javascript:void(reload_analytic());" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapses" aria-expanded="false"></a>
                <?php } ?>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/admin">Quản trị viên</a>
            </div>
                <?php if($_SERVER['REQUEST_URI'] == '/admin/') { ?>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right"><a href="javascript:void(reload_analytic());" class="js-right-sidebar" data-close="true"><i class="material-icons">refresh</i></a></li>
                </ul>
            </div>
                <?php } ?>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="/admin/assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $user['name'];?></div>
                    <div class="email"><?php echo $user['email'];?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="/signout.html"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN MENU</li>
                    <li class="active">
                        <a href="/admin">
                            <i class="material-icons">home</i>
                            <span>Trang Chủ</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/?modun=vongquay_quanhuy&act=index">
                            <i class="material-icons">layers</i>
                            <span>Vòng Quay Liên Quân</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">pie_chart</i>
                            <span>Game Liên Quân</span>
                        </a>
                        <ul class="ml-menu" style="display: none;">
                            <li>
                                <a href="/admin/may-xeng-hoa-phuong-ruc-lua">
                                    <i class="material-icons">layers</i>
                                    <span>HOA PHƯỢNG RỰC LỬA</span>
                                </a>
                            </li>    
                            <li>
                                <a href="/admin/ruong-quan-huy">
                                    <i class="material-icons">layers</i>
                                    <span>RƯƠNG QUÂN HUY 9K</span>
                                </a>
                            </li>  
                           

   <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">pie_chart</i>
                            <span>Bán Nick Liên Quân</span>
                        </a>
                        <ul class="ml-menu" style="display: none;">
                            <li>
                                <a href="/admin/?modun=lienquan&act=index">
                                    <i class="material-icons">layers</i>
                                    <span>Đăng Bán Nick</span>
                                </a>
                            </li>     
                            <li>
                                <a href="/admin/?modun=lienquan&act=list">
                                    <i class="material-icons">layers</i>
                                    <span>Danh Sách Nick</span>
                                </a>
                            </li>                    
                        </ul>
                    </li>

  
</ul>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">pie_chart</i>
                            <span>Random Liên Quân</span>
                        </a>
                        <ul class="ml-menu" style="display: none;">
                            <li>
                                <a href="/admin/?modun=random_lienquan&act=add_nick">
                                    <i class="material-icons">layers</i>
                                    <span>Đăng Bán Random</span>
                                </a>
                            </li>     
                            <li>
                                <a href="/admin/?modun=random_lienquan&act=index">
                                    <i class="material-icons">layers</i>
                                    <span>Danh Sách Gói Random</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                    <i class="material-icons">layers</i>
                                    <span>Danh Sách Acc Random</span>
                                </a>
                                <ul class="ml-menu" style="display: none;">

                                    <?php 
                                    $quas = mysqli_query($kun->connect_db(), "SELECT * FROM `random_lienquan`");
                                    while ($rose = mysqli_fetch_array($quas)) {
                                            ?>
                                    <li>
                                        <a href="/admin/list_acc_random/<?php echo $rose['cname'];?>" class=" waves-effect waves-block">
                                            <span><?php echo $rose['name'];?></span>
                                        </a>
                                    </li>
                                    <?php
                                        }
                                    ?>





                                </ul>
                            </li>


                            <li> 
                        </ul>
                    </li>






                    <li>
                        <?php if(mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `status`='2'")) > 0) $new = '<span class="btn btn-danger btn-xs">'.mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_kim_cuong` WHERE `status`='2'")).'</span>'; ?>
                        <a href="/admin/?modun=rut_quan_huy&act=index">
                            <i class="material-icons">layers</i>
                            <span>Duyệt Quân Huy<?=$new;?></span>
                        </a>
                    </li>
                    <li>
                        <?php if(mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `napthe` WHERE `status`='2'")) > 0) $new = '<span class="btn btn-danger btn-xs">'.mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `napthe` WHERE `status`='2'")).'</span>'; ?>
                        <a href="/admin/thenap">
                            <i class="material-icons">layers</i>
                            <span>Danh Sách Thẻ Nạp<?=$new;?></span>
                        </a>
                    </li>                
                    <li>
                        <a href="/admin/users">
                            <i class="material-icons">layers</i>
                            <span>Thành Viên</span>
                        </a>
                    </li>         
 
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">settings</i>
                            <span>Cài Đặt</span>
                        </a>
                        <ul class="ml-menu" style="display: none;">
                            <li>
                                <a href="/admin/?modun=web_setting&act=chung" class=" waves-effect waves-block">Cài Đặt Chung</a>
                            </li>
                            <li>
                                <a href="/admin/?modun=web_setting&act=topnap" class=" waves-effect waves-block">Cài Đặt Top Nạp Ảo</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                    <span>Cài Đặt Hiển Thị</span>
                                </a>
                                <ul class="ml-menu" style="display: none;">
                                    <li>
                                        <a href="/admin/?modun=web_setting&act=danh_muc" class=" waves-effect waves-block">
                                            <span>Hiển Thị Danh Mục</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/?modun=web_setting&act=game_status" class=" waves-effect waves-block">
                                            <span>Hiển Thị Game</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/admin/?modun=web_setting&act=game_images" class=" waves-effect waves-block">Cài Đặt Ảnh Game</a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
            <!-- #Menu -->



            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 20<?=date("y");?> - 20<?=date("y") + 1;?> <a href="javascript:void(0);">Khoakillall</a>
                </div>
                <div class="version">
                    <b>Version: </b> <?php echo $config['version'];?>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->


    </section>




        <section class="content">
        <div class="container-fluid">

            <!-- Body Copy -->
