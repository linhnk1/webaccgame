<?php 
defined('KUNKEYPR') or exit('Restricted Access');

$topnap = $kun->settings('topnap');

if(isset($_POST['submit'])) {

	$_topnap = json_encode(array('tentop1'=> $_POST['tentop1'], 'tentop2'=> $_POST['tentop2'], 'tentop3'=> $_POST['tentop3'], 'tentop4'=> $_POST['tentop4'], 'tentop5'=> $_POST['tentop5'],'giatop1'=> $_POST['giatop1'], 'giatop2'=> $_POST['giatop2'],'giatop3'=> $_POST['giatop3'],'giatop4'=> $_POST['giatop4'],'giatop5'=> $_POST['giatop5']));


	mysqli_query($kun->connect_db(), "UPDATE `settings` SET `value` = '".mysqli_escape_string($kun->connect_db(), $_topnap)."' WHERE `key` = 'web_topnap'");
    

        echo '<div class="alert alert-success fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a><strong>Success!</strong> Chỉnh sửa thành công</div>';
		echo '<meta http-equiv="refresh" content="1;URL=" /> ';
}


?>



<div class="row clearfix">





                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>CÀI ĐẶT TOP NẠP ẢO</b>
                            </h2>
                        </div>
                        <div class="body">
                           <form method="post" action="">



                        <div class="col-md-6 col-sm-12 col-lg-6">

                                <label for="tieude">Tên Top1:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="tentop1" type="text" class="form-control" value="<?php echo $topnap['tentop1'];?>">
                                    </div>
                                </div>

                            </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                                <label for="tenweb">Giá Top1:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="giatop1" type="number" class="form-control" value="<?php echo $topnap['giatop1'];?>">
                                    </div>
                                </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">

                                <label for="tieude">Tên Top2:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="tentop2" type="text" class="form-control" value="<?php echo $topnap['tentop2'];?>">
                                    </div>
                                </div>

                            </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                                <label for="tenweb">Giá Top2:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="giatop2" type="number" class="form-control" value="<?php echo $topnap['giatop2'];?>">
                                    </div>
                                </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-12 col-lg-6">

                                <label for="tieude">Tên Top3:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="tentop3" type="text" class="form-control" value="<?php echo $topnap['tentop3'];?>">
                                    </div>
                                </div>

                            </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                                <label for="tenweb">Giá Top3:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="giatop3" type="number" class="form-control" value="<?php echo $topnap['giatop3'];?>">
                                    </div>
                                </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-12 col-lg-6">

                                <label for="tieude">Tên Top4:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="tentop4" type="text" class="form-control" value="<?php echo $topnap['tentop4'];?>">
                                    </div>
                                </div>

                            </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                                <label for="tenweb">Giá Top4:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="giatop4" type="number" class="form-control" value="<?php echo $topnap['giatop4'];?>">
                                    </div>
                                </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-12 col-lg-6">

                                <label for="tieude">Tên Top5:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="tentop5" type="text" class="form-control" value="<?php echo $topnap['tentop5'];?>">
                                    </div>
                                </div>

                            </div>

                        <div class="col-md-6 col-sm-12 col-lg-6">
                                <label for="tenweb">Giá Top5:</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input name="giatop5" type="number" class="form-control" value="<?php echo $topnap['giatop5'];?>">
                                    </div>
                                </div>
                        </div>

						<button type="submit" name="submit" class="btn bg-indigo">SỬA CÀI ĐẶT</button>
						    </form>

                    </div>
                </div>
            </div>
        </div>