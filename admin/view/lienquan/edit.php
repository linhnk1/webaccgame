<?php 
defined('KUNKEYPR') or exit('Restricted Access');
$row = mysqli_fetch_assoc(mysqli_query($kun->connect_db(), "SELECT * FROM `lienquan` WHERE `id`='".$_GET['id']."'"));

if(!$row['id']) die("<center><h1>Không Tìm Thấy!</center>");

?>
        <?php 

        if(isset($_POST['submit'])) {


                $taikhoan = $_POST['taikhoan'];
                $matkhau = $_POST['matkhau'];
                $giatien = $_POST['giatien'];
                $status = $_POST['status'];
                
                if($_POST['status'] == ''){
                    $thongbao = "Vui lòng chọn trạng thái";
                }else if($_POST['status'] <> ''){
                    
                mysqli_query($kun->connect_db(), "UPDATE `lienquan` SET `taikhoan` = '".$taikhoan."', `matkhau` = '".$matkhau."', `giatien` = '".$giatien."', `status` = '".$status."' WHERE `id`='".$_GET['id']."'");

                    echo '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">Cập Nhật Tài Khoản <b>"'.$taikhoan.'" Thành Công!</b></div>';
                    echo '<script>location.href="/admin/?modun=lienquan&act=list";</script>';
                }else{
                    echo '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><b>"'.$thongbao.'" Lỗi!</b></div>';
                }
}
        ?> 
        
<h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Chỉnh Sửa Acc ID #<?php echo $row['id'];?></h3><br>


            <form action="" onsubmit="return validate()" method="post" enctype="multipart/form-data">
<div class="form-body">
    <div class="row">

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tài Khoản</h4>
                                    <div class="form-group">
                                        <input type="text" id="taikhoan" name="taikhoan" class="form-control" placeholder="Nhập tài khoản" value="<?php echo $row['taikhoan'];?>">
                                    </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Mật khẩu</h4>
                                    <div class="form-group">
                                        <input type="text" id="matkhau" name="matkhau" class="form-control" placeholder="Nhập mật khẩu" value="<?php echo $row['matkhau'];?>">
                                    </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Giá tiền CARD</h4>
                                    <div class="form-group">
                                        <input type="number" id="giatien" name="giatien" class="form-control" placeholder="Nhập giá tiền" value="<?php echo $row['giatien'];?>">
                                    </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Giá tiền ATM (75%)</h4>
                                    <div class="form-group">
                                        <b><?php echo number_format($row['giatien']/100*75);?>đ</b>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if($row['status'] == 1){
                        $trangthai = "Đang hiển thị";
                    }else if($row['status'] == 0){
                        $trangthai = "Đang ẩn";
                    }else{
                        $trangthai = "Lỗi";
                    }
                    ?>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Trạng Thái (<?php echo $trangthai;?>)</h4>
                                    <div class="form-group">
                                        <select name="status" class="form-control show-tick" tabindex="-98">
                                                        <option value="">-- Chọn trạng thái --</option>
                                                        <option value="0">Ẩn</option>
                                                        <option value="1">Hiển Thị</option>
                                                    </select>
                                    </div>
                            </div>
                        </div>
                    </div>

                                    <div class="form-actions mt-4">
                                        <div class="text-center">
                                            <button type="submit" name="submit" class="btn btn-success waves-effect">
                                                <i class="fa fa-upload"></i>
                                                <span>Cập Nhập</span>
                                            </button>
                                        </div>
                                    </div>





    </div>
</div>


                            </form>