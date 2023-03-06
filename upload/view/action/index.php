	<?php
defined('KUNKEYPR') or exit('Restricted Access');
$kun->login_required();
?>

<?php
if($kun->is_admin()) {
    $level = 'Administrator'; 
}else { 
    $level = 'Thành Viên';
}
//echo var_dump($user);


if($user['fbid'] != 0) {
    $avatar = 'https://graph.facebook.com/100070088770333/picture?type=large&width=500&height=500&access_token=6628568379%7Cc1e620fa708a1d5696fb991c1bde5662';
}else {
    $avatar = 'https://graph.facebook.com/100070088770333/picture?type=large&width=500&height=500&access_token=6628568379%7Cc1e620fa708a1d5696fb991c1bde5662';
}
?>


<div class="container c-size-md ">
    <div class="col-md-12">
        <div class="text-center" style="margin-top: 128px;">
            <center>
                        <img style="height: 200px; width: 200px;" class="img-responsive img-thumbnail" width="256" height="256" src="<?php echo $avatar;?>" alt="">
                        <h2 class="c-font-bold c-font-28">
                            <p><?php echo $user['name'];?></p>
                        </h2>
                        <h2 class="c-font-22"><?php echo $level;?></h2>
                        <h2 class="c-font-22 c-font-red">Số Dư: <?php echo number_format($user['money']);?>đ</h2>
            </center>

        </div>

    </div>
</div>

<?php require $root.'/view/action/right_menu.php';?>

<?php 
if($_GET['cmd']) {
    require $root.'/view/action/'.$_GET['cmd'].'.php';
}else {
?>

Chức Năng này không tồn tại!


<?php
}
?>