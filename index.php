<?php
<<<<<<< HEAD
// Kiểm tra trạng thái cài đặt website
if (!(file_exists('KHOAKILLALL_SYSTEM/khoa_config.php'))) {   
header("Location: /install");            
}
=======
    require_once(__DIR__."/config/config.php");
    require_once(__DIR__."/config/function.php");
    $title = 'HOME | '.$CMSNT->site('tenweb');
    require_once(__DIR__."/public/client/Header.php");
    require_once(__DIR__."/public/client/Nav.php");
?>
<div class="v-theme">
    <div class="my-6">
        <div class="w-full border-4 border-trueGray-800 bg-trueGray-800 max-w-6xl mx-auto relative">
            <div class="flex md:flex-row-reverse flex-wrap">
                <div class="w-full md:w-4/6 pb-0">
                    <div class="ml-0 border-2 border-trueGray">
                    <iframe src="https://youtube.com/embed/<?=$CMSNT->site('id_video_youtube');?>" frameborder="0" width="100%" height="350" allowfullscreen=""></iframe>
                    </div>
                    
                </div>
                <div class="w-full md:w-2/6">
                    <div class="bg-trueGray-800 w-full" style="min-height: 338px;">
                        <div class="flex color-grant font-bold">
                            <div class="cursor-pointer bg-trueGray-800 tablinks" onclick="Tab('nap')">
                                <h2 class="py-1 px-2 w-32 text-center title-grant font-extrabold text-xl md:text-2xl">
                                    NẠP THẺ
                                </h2>
                            </div>
                            <div class="cursor-pointer w-full bg-trueGray-900 tablinks" onclick="Tab('top')">
                                <h2 class="py-1 text-center px-3 title-grant font-extrabold text-xl md:text-2xl">
                                    TOP NẠP TIỀN </h2>
                            </div>
                        </div>
                        <span class="tabcontent" id="nap" style="display:block;">
                            <form class="w-full form-header">
                                <div class="py-3 px-5">
                                    <span class="mb-2 block">
                                        <div class="flex items-center relative">
                                            <select id="loaithe"
                                                class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600">
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-trueGray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    class="fill-current h-4 w-4">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </span>
                                    <span class="mb-2 block">
                                        <div class="flex items-center relative">
                                            <select id="menhgia"
                                                class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600">
                                            </select>
                                            <div
                                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-trueGray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    class="fill-current h-4 w-4">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </span>
                                    <span class="mb-2 block">
                                        <div class="flex items-center relative">
                                            <input type="text" id="pin" placeholder="Mã số thẻ"
                                                class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600" />
                                        </div>
                                    </span>
                                    <span class="mb-2 block">
                                        <div class="flex items-center relative">
                                            <input type="text" id="seri" placeholder="Số serial"
                                                class="border-2 rounded block w-full bg-trueGray-900 focus:border-yellow-500 focus:bg-trueGray-900 text-white appearance-none w-full py-2 px-3 leading-tight focus:outline-none border-trueGray-600" />
                                        </div>
                                    </span>
                                    <div class="mt-4">
                                        <button type="button" id="NapThe"
                                            class="homepayin uppercase flex items-center justify-center h-10 w-full ff-lalezar pt-1 text-2xl rounded focus:outline-none px-4 text-center btn-inner"
                                            style="color: rgb(51, 51, 51);">
                                            Nạp Ngay
                                        </button>
                                    </div>
                                    <div class="text-center mt-2 text-white font-semibold text-sm">
                                        Hãy chọn đúng mệnh giá. Sai sẽ mất thẻ
                                    </div>
                                </div>
                            </form>
>>>>>>> 9239ecc3e5e2c5d8d867a5de763d2f2b31a20a5f

 // Define Chống vào thẳng file
define("KUNKEYPR", true); // gán defined chống khách vào thẳng file

<<<<<<< HEAD
 // Require Hàm hệ thống
require $_SERVER['DOCUMENT_ROOT'].'/Core.php';
$kun = new System;
$user = $kun->user(); // gọi giá trị user đang login

	// web setting

$_logo = $kun->settings('logo');
$_banner = $kun->settings('banner');
$_title = $kun->settings('title');
$_admin = $kun->settings('admin');
$_color = $kun->settings('color');
$_thongbao = $kun->settings('thongbao');
$_topnap = $kun->settings('topnap');
=======
                                <?php $i=0; foreach($CMSNT->get_list("SELECT * FROM `users` ORDER BY `total_money` DESC LIMIT 6 ") as $top) { ?>
                                <div class="flex items-center justify-between px-2 py-1">
                                    <div class="flex items-center">
                                        <div class="v-star relative">
                                            <i class="bx text-3xl text-red-500 bxs-star"></i>
                                            <span class="absolute font-bold text-white" style="top: 4px; left: 11px;">
                                                <?=$i++;?> </span>
                                        </div>
                                        <span class="ml-1 text-white w-full font-bold truncate"
                                            style="max-width: 8rem;">
                                            <?=$top['username'];?>
                                        </span>
                                    </div>
                                    <div class="font-bold text-lg">
                                        <span class="bg-red-600 w-32 text-white rounded-sm text-center inline-block">
                                            <?=format_cash($top['total_money']);?> <span
                                                class="text-xs"><small>VND</small></span>
                                        </span>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-10">
        <div class="v-card w-full max-w-6xl mx-auto">
            <div class="md:mx-0">
                <div class="py-2">
                    <div class="mb-16">
                        <div class="mb-6 block">
                            <div class="fade-in text-center uppercase py-1 text-gray-700 text-3xl font-extrabold my-2">
                                Danh Mục Các Game
                            </div>
                            <div class="mb-2"><span class="mx-auto block w-40 border-2 border-red-500"></span></div>
                        </div>
                        <div class="fade-in grid grid-cols-8 gap-2 px-2 md:px-0">
                            <?php foreach($CMSNT->get_list("SELECT * FROM `category` WHERE `display` = 'SHOW' ") as $category) { ?>
                            <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 relative rounded border border-gray-300"
                                style="padding: 1px; padding: 1px;border: 3px solid #122d65;">
                                <!---->
                                <a href="<?=BASE_URL('Groups/'.$category['id']);?>">
                                    <img data-src="<?=BASE_URL($category['img']);?>"
                                        class="rounded-t h-28 md:h-48 w-full object-fill object-center lazyLoad" />
                                    <div class="py-1">
                                        <div class="py-1 font-bold text-md px-1 truncate text-center uppercase"
                                            style="color: rgb(247, 176, 60);">
                                            <?=$category['title'];?>
                                        </div>
                                        <ul
                                            class="px-2 flex items-center justify-center font-medium rounded-sm w-full font-medium text-gray-700">
                                            <span>
                                                Số tài khoản:
                                                <b>8,876 </b>
                                            </span>
                                            <!---->
                                        </ul>
                                        <div class="flex px-2 mt-2 justify-center">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="mt-2 mb-2 px-2 py-1 flex items-center justify-center mt-9">
                                            <a class="focus:outline-none acc-lien-minh-tu-chon-bb2716012b"
                                                href="<?=BASE_URL('Groups/'.$category['id']);?>">
                                                <div>
                                                    <style scoped="">
                                                    .acc-lien-minh-tu-chon-bb2716012b:hover {
                                                        filter: brightness(130%);
                                                    }
                                                    </style>
                                                </div> <img
                                                    src="https://cdns.diongame.com/static/image-60bf62c0-1d16-4c36-8c1e-a29003fec9c1.png"
                                                    class="lazyLoad isLoaded">
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php }?>
                            <!--LIÊN QUÂN-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-10">
        <div class="v-card w-full max-w-6xl mx-auto">
            <div class="md:mx-0">
                <div class="py-2">
                    <div class="mb-16">
                        <div class="mb-6 block">
                            <div class="fade-in text-center uppercase py-1 text-gray-700 text-3xl font-extrabold my-2">
                                DANH MỤC DỊCH VỤ
                            </div>
                            <div class="mb-2"><span class="mx-auto block w-40 border-2 border-red-500"></span></div>
                        </div>
                        <div class="fade-in grid grid-cols-8 gap-2 px-2 md:px-0">
                            <?php foreach($CMSNT->get_list("SELECT * FROM `category_caythue` WHERE `display` = 'SHOW' ") as $category) { ?>
                            <div class="hover:shadow-lg col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-2 xl:col-span-2 relative rounded border border-gray-300"
                                style="padding: 1px; padding: 1px;border: 3px solid #122d65;">
                                <!---->
                                <a href="<?=BASE_URL('dich-vu/'.$category['id']);?>">
                                    <img data-src="<?=BASE_URL($category['img']);?>"
                                        class="rounded-t h-28 md:h-48 w-full object-fill object-center lazyLoad" />
                                    <div class="py-1">
                                        <div class="py-1 font-bold text-md px-1 truncate text-center uppercase"
                                            style="color: rgb(247, 176, 60);">
                                            <?=$category['title'];?>
                                        </div>
                                        <div class="flex px-2 mt-2 justify-center">
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="mt-2 mb-2 px-2 py-1 flex items-center justify-center mt-9">
                                            <a class="focus:outline-none acc-lien-minh-tu-chon-bb2716012b"
                                                href="<?=BASE_URL('dich-vu/'.$category['id']);?>">
                                                <div>
                                                    <style scoped="">
                                                    .acc-lien-minh-tu-chon-bb2716012b:hover {
                                                        filter: brightness(130%);
                                                    }
                                                    </style>
                                                </div> <img
                                                    src="https://cdns.diongame.com/static/image-60bf62c0-1d16-4c36-8c1e-a29003fec9c1.png"
                                                    class="lazyLoad isLoaded">
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php }?>
                            <!--LIÊN QUÂN-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="animated modal fadeIn is-visible fixed z-50 pin bg-smoke-dark flex p-2 md:p-0 top-0 left-0 bottom-0 right-0"
        style="z-index: 999;" id="indexModal">
        <div
            class="animated fadeInDown fixed shadow-inner max-w-md md:max-w-lg relative pin-b pin-x align-top m-auto justify-center bg-white rounded w-full h-auto md:shadow-lg flex flex-col">
            <div class="modal-content">
                <div class="text-red-600 font-bold text-lg text-center mb-3 p-3 uppercase border-b border-gray-300">
                    Thông báo
                </div>
                <div class="overflow-auto p-2 md:px-4" style="max-height: 600px;">
                    <div class="relative px-2 pb-4 text-gray-900">
                        <div class="md:px-4 overflow-auto p-2" style="max-height:400px">
                            <div class="pb-4 px-2 relative text-gray-900">
                                <?=$CMSNT->site('thongbao');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
>>>>>>> 9239ecc3e5e2c5d8d867a5de763d2f2b31a20a5f


	// Title

$exec_url = $_SERVER['REQUEST_URI'];
	
	if($exec_url == '/' || $exec_url == '/home' || $exec_url == '/index.php' || $exec_url == '/index.html') {
		$title = $_title['title'].' - '.$_title['name'];
	}else if ($kun->tim_chuoi($exec_url, 'vongquaykimcuong')) {
		$title = 'Vòng Quay Kim Cương';
	}else if ($kun->tim_chuoi($exec_url, 'homthinhbian')) {
		$title = 'Hòm Thính Bí Ẩn';
	}else if ($kun->tim_chuoi($exec_url, 'vanmaybingo')) {
		$title = 'Vận May Bingo';
	}else if ($kun->tim_chuoi($exec_url, 'nickfreefire')) {
		$title = 'Tài Khoản FreeFire';
	}else if ($kun->tim_chuoi($exec_url, 'napthe')) {
		$title = 'Nạp Thẻ';
	}else if ($kun->tim_chuoi($exec_url, 'doimatkhau')) {
		$title = 'Đổi Mật Khẩu';
	}else if ($kun->tim_chuoi($exec_url, 'lichsugiaodich')) {
		$title = 'Lịch Sử Giao Dịch';
	}else if ($kun->tim_chuoi($exec_url, 'lichsunapthe')) {
		$title = 'Lịch Sử Nạp Thẻ';
	}else if ($kun->tim_chuoi($exec_url, '/user/rutkimcuong')) {
		$title = 'Rút Kim Cương Freefire';
	}else if ($kun->tim_chuoi($exec_url, 'lichsurutkimcuong')) {
		$title = 'Lịch Sử Rút Kim Cương Freefire';
	}else if ($kun->tim_chuoi($exec_url, 'rutkimcuong')) {
		$title = 'Rút Kim Cương Freefire';
	}else if ($kun->tim_chuoi($exec_url, 'user/accfreefire')) {
		$title = 'Tài Khoản Freefire Đã Mua';
	}else if ($kun->tim_chuoi($exec_url, '/user/thongtin')) {
		$title = 'Thông Tin Tài Khoản';
	}else if ($kun->tim_chuoi($exec_url, '/user/doimatkhau')) {
		$title = 'Đổi Mật Khẩu';
	}else if ($kun->tim_chuoi($exec_url, '/user/lichsugiaodich')) {
		$title = 'Lịch Sử Giao Dịch';
	}else if ($kun->tim_chuoi($exec_url, '/user/napthe')) {
		$title = 'Nạp Thẻ';
	}else if ($kun->tim_chuoi($exec_url, '/user/lichsunapthe')) {
		$title = 'Lịch Sử Nạp Thẻ';
	}else if ($kun->tim_chuoi($exec_url, '/latthe')) {
		$title = 'Lật Hình May Mắn';
	}else if ($kun->tim_chuoi($exec_url, '/sieucap')) {
		$title = 'Vòng Quay Siêu Cấp'; 
	}else if ($kun->tim_chuoi($exec_url, '/random-freefire/')) {
		$title = 'Random Nick Freefire';
	}else if ($kun->tim_chuoi($exec_url, '/user/random-freefire')) {
		$title = 'Nick Random Nick Freefire Đã Mua';
	}else if ($kun->tim_chuoi($exec_url, '/signin.html')) {
		$title = 'Đăng Nhập';
	}else if ($kun->tim_chuoi($exec_url, '/register.html')) {
		$title = 'Đăng Kí';
	}else if ($kun->tim_chuoi($exec_url, 'vongquaycodesung.html')) {
		$title = 'Vòng Quay Code Súng';
	}



 // một vài cái linh tinh
$token = $_SESSION['token'];
if($token) $btn_login = $user['name'].' - <o id="head_money">$ '.number_format($user['money']).'</o>'; else $btn_login = "Đăng nhập";
if($token) $btn_reg = "Đăng Xuất"; else $btn_reg = "Đăng Kí";
if($token) $href_login = '/user/thongtin'; else $href_login = "/signin.html";
if($token) $href_reg = "/signout.html"; else $href_reg = "/register.html";
if($kun->is_admin()) $btn_admin = '<li><a href="/admin" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-uppercase c-btn-sbold"><i class="icon-user"></i> Admin Panel</a></li>'; else $btn_admin = '';

    require $root.'/view/header.php';

		if(!$_GET['modun'] && !$_GET['act']) {
		    require $root.'/view/index.php';
		}else {
			$modun = $_GET['modun'];
			$act = $_GET['act'];

					if (file_exists($root.'/view/'.$modun.'/'.$act.'.php')){
		    			require $root.'/view/'.$modun.'/'.$act.'.php';
					}else{
					    echo "<center>404 - Not Found</center>";
					}

		}

    require $root.'/view/footer.php';
