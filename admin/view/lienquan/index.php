<?php
defined('KUNKEYPR') or exit('Restricted Access');
?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <B>ĐĂNG BÁN TÀI KHOẢN LIÊN QUÂN</B>
                            </h2>
                        </div>
                        <div class="body">
<?php 
if(isset($_POST['submit'])) {


$taikhoan = $_POST['taikhoan'];
$matkhau = $_POST['matkhau'];
$giatien = $_POST['giatien'];
$rank = $_POST['rank'];
$lienket = $_POST['lienket'];
$tuong = $_POST['tuong'];
$skin = $_POST['skin'];
$ngoc = $_POST['ngoc'];
$noibat = $_POST['noibat'];


$check = mysqli_num_rows(mysqli_query($kun->connect_db(), "SELECT COUNT(*) FROM `lienquan` WHERE `taikhoan`='$taikhoan'"), 0);

if($check >= 1){
echo '<div class="alert alert-danger bg-danger text-white border-0" role="alert"><strong>Error!</strong> Tài khoản đã tồn tại trên hệ thống!
</div>';
} else {


mysqli_query($kun->connect_db(), "INSERT INTO `lienquan` SET 
    `taikhoan`='$taikhoan',  
    `matkhau`='$matkhau',
    `giatien`='".abs($giatien)."',
    `rank`='$rank', 
    `lienket`='$lienket',
    `tuong`='$tuong',
    `skin`='$skin', 
    `ngoc`='$ngoc', 
    `noibat`='$noibat',
    `nguoimua` = 'null',
    `status` = '1',
    `time` = '".time()."' 
");

$last_id = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `lienquan` order by `id` desc limit 1"));
$id_new = $last_id['id'];

  // ảnh thumb
$path = $_SERVER["DOCUMENT_ROOT"]."/upload/lienquan";

        if ($_FILES["thumb"]["error"] == 0) {
            $arr = explode(".", $_FILES["thumb"]["name"]);
            move_uploaded_file($_FILES["thumb"]["tmp_name"], $path."/thumb/".$id_new.".".end($arr));
        }

       // ảnh thông tin
$dir = $path.'/info/'.$id_new;
if(is_dir($dir) === false) mkdir($dir);

foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
    $file_name=$_FILES["files"]["name"][$key];
    $file_tmp=$_FILES["files"]["tmp_name"][$key];
    move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key], $dir."/".$key.'.jpg');
}

echo '<div class="alert alert-info bg-info text-white border-0" role="alert"> Đăng bán tài khoản thành công</div>';
echo '<meta http-equiv=refresh content="1; URL=">';

?>


<?php

}
}
?>



                            <form method="post" action="" enctype="multipart/form-data">


                    <div class="col-md-4 col-lg-4 col-sm-12">         
                                <label for="taikhoan">Tài khoản:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="taikhoan" type="text" class="form-control" placeholder="Nhập tài khoản ...">
                                    </div>
                                </div>
                    </div>


                    <div class="col-md-4 col-lg-4 col-sm-12">   
                                <label for="matkhau">Mật khẩu:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="matkhau" type="text" class="form-control" placeholder="Nhập mật khẩu ...">
                                    </div>
                                </div>
                    </div>
 <div class="col-md-4 col-lg-4 col-sm-12">   
                                <label for="matkhau">Tướng:</label>
                                <div class="form-group">
                                    <div class="form-line">
                <input name="tuong" type="number" class="form-control" placeholder="Nhập Số Tướng ...">                                    </div>
                                </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12">   
                                <label for="matkhau">Skin:</label>
                                <div class="form-group">
                                    <div class="form-line">
                <input name="skin" type="number" class="form-control" placeholder="Nhập Số Tướng ...">                                    </div>
                                </div>
                    </div>
<div class="col-md-4 col-lg-4 col-sm-12">   
                                <label for="matkhau">Bậc Ngọc:</label>
                                <div class="form-group">
                                    <div class="form-line">
                <input name="ngoc" type="number" class="form-control" placeholder="Nhập Số Ngọc ...">                                    </div>
                                </div>
                    </div>
                    





                                <div class="col-md-3 col-lg-3 col-sm-3">
                                <label for="username">Loại:</label>
                                    <select name="lienket" class="form-control show-tick" tabindex="-98">
                                        <option value="0">Liên Kết Rip</option>
                                                        <option value="1">Trắng Thông Tin</option>
                                    </select>
                                </div>



                                <div class="col-md-3 col-lg-3 col-sm-3">
                                <label for="username">Rank:</label>
                                     <select name="rank" class="form-control show-tick" tabindex="-98">
                                                        <option value="1">Rank Đồng</option>
                                                        <option value="2">Rank Bạc</option>
                                                        <option value="3">Rank Vàng</option>
                                                        <option value="4">Rank Bạch Kim</option>
                                                        <option value="5">Rank Kim Cương</option>
                                                        <option value="6">Rank Tinh Anh</option>
                                                        <option value="7">Rank Cao Thủ</option>
                                                        <option value="8">Rank Thách Đấu</option>
                                                    </select>
                                </div>



                               



                                







                    <div class="col-md-6 col-lg-6 col-sm-12">   

                            <label for="noibat">Thông Tin Nổi Bật:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="noibat" type="text" class="form-control" placeholder="Nhập thông tin nổi bật ...">
                                    </div>
                                </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">   
                                <label for="giatien">Giá tiền:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="giatien" type="number" class="form-control" placeholder="Nhập giá card cần bán ...">
                                    </div>
                                </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">  
                                <label for="exampleTextarea">Ảnh Mô Tả:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="currency form-control" id="thumb" type="file" name="thumb" accept="image/*"/>
                                    </div>
                                </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">  
                                 <label for="exampleTextarea">Ảnh Thông Tin:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="currency form-control" accept="image/*" id="images" type="file" name="files[]" multiple accept="image/*"/>
                                    </div>
                                </div>
                    </div>

              <div class="text-center "><button type="submit" name="submit" class="btn btn-primary waves-effect">
                                        <i class="material-icons">update</i>
                                        <span>Đăng Bán</span>
                                    </button></div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>



