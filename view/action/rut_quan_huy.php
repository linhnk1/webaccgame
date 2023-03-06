<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();
?>

<div class="c-layout-sidebar-content ">
    <div class="c-content-title-1">
        <h3 class="c-font-uppercase c-font-bold">Rút Quân Huy</h3>
                    <div class="c-line-left"></div>
                </div>

       



<style type="text/css">
.form-group {
    margin-bottom: 0px;
}
</style>
<form class="form-horizontal" method="POST">


  <?php

    if(isset($_POST['rutquanhuy'])) {

      require $_SERVER['DOCUMENT_ROOT'].'/lib/xss_anti/xss_anti.php';

      $xss = new Xss_Anti;

      $taikhoan = mysqli_real_escape_string($kun->connect_db(), $xss->xss_clean($_POST['taikhoan']));
      $quanhuy = intval($xss->xss_clean($_POST['quanhuy']));
      $matkhau = strip_tags(mysqli_real_escape_string($kun->connect_db(), $xss->xss_clean($_POST['matkhau'])));
      $check = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT * FROM `rut_quan_huy` WHERE `taikhoan`='".$taikhoan."' AND `status` = '2'"));


  if(empty($taikhoan) || empty($quanhuy)) {
    echo '<div class="alert alert-danger"> Xin vui lòng nhập đầy đủ thông tin!</div>';
  }else if($user['quanhuy'] < 105){
    echo '<div class="alert alert-danger"> Bạn Không Đủ Quân Huy Để Rút !</div>';
  }else if($quanhuy > $user['quanhuy']){
    echo '<div class="alert alert-danger"> Quân Huy Bạn Cần Rút Phải Nhỏ Hơn Số Quân Huy Hiện Tại !</div>';
  } else {

    // update quanhuy user
  mysqli_query($kun->connect_db(), "UPDATE `users` SET `quanhuy` = `quanhuy` - '".$quanhuy."' WHERE `username` = '".$user['username']."' ");
   // update vào lịch sử rút
  mysqli_query($kun->connect_db(), "INSERT INTO `rut_quan_huy` SET 
  `username` = '".$user['username']."',
  `taikhoan` = '".$taikhoan."',
  `quanhuy` = '".$quanhuy."',
  `matkhau` = '".$matkhau."',
  `status` = '2',
  `time` = '".time()."'");

        // Update vào lịch sử user
    mysqli_query($kun->connect_db(), "INSERT INTO `user_history_system` (`username`, `action`, `action_name`, `sotien`, `mota`, `time`) VALUES ('".$user['username']."', 'Rút Quân Huy', 'Rút Quân Huy', '-".number_format($quanhuy)." Quân Huy', 'Rút ".number_format($quanhuy)." Quân Huy vào ID ".$taikhoan."', '".time()."')");


    echo '<div class="alert alert-success"> Bạn rút quân huy thành công, xin chờ Admin duyệt! (Trừ '.$quanhuy.' Quân Huy Tại Hệ Thống )</div>
    <meta http-equiv="refresh" content="0;URL=/user/rutquanhuy"/>';  
}


    }



  ?>


      <div class="form-group">
            <label class="col-md-3 control-label">Quân Huy Hiện Tại:</label>
            <div class="col-md-6">
                       <div class="input-group c-square">
                           <p class="form-control c-square c-theme c-theme-static m-b-0"><?php echo $user['quanhuy'];?></p>
                           <span class="input-group-btn">
                               <span class="btn btn-default c-font-dark"><?php echo $user['username'];?></span>
                           </span>
                       </div>
                   </div>
               </div>
        <br>
        <div class="form-group">
            <label class="col-md-3 control-label">Quân Huy:</label>
            <div class="col-md-6">
                    <select class="form-control c-square c-theme" name="quanhuy">
                    <option value="105">Rút về gói 105 Quân Huy </option>
                    <option value="210">Rút về gói 210 Quân Huy </option>
                     <option value="1070">Rút Về Gói 1070 Quân Huy </option>
                       <option value="2140">Rút Về Gói 2140 Quân Huy</option>
                    </select>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="col-md-3 control-label">Tài khoản garena ( nếu là tài khoản fb , yêu cầu liên kết với garena trước khi rút ):</label>
                        <div class="col-md-6">
                            <div class="input-group c-square" style="width: 100%">
                                <input type="text" name="taikhoan"   style="width: 100%" class="form-control" />
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
            <label class="col-md-3 control-label">Mật Khẩu Game:</label>
            <div class="col-md-6">
                <input class="form-control c-square c-theme" type="text" name="matkhau" placeholder="Nhập Mật Khẩu Game Để Rút" required="required">
            </div>
        </div>
        <br>
        
        
        <div class="form-group c-margin-t-40">
            <div class="col-md-offset-3 col-md-6">
                <button type="submit" name="rutquanhuy" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block">THỰC HIỆN</button>
            </div>
        </div>
        <br>

    </form>





</div>
</div>