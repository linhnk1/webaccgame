<?php
if($_SESSION['token']) {
    die('<meta http-equiv="refresh" content="0;URL=/home"/>');
}
?>

<link rel="stylesheet" href="/assets/Scripts/toastr/toastr.min.css"/>
<o id="result"></o>

<div class="c-layout-page">
	<!-- BEGIN: PAGE CONTENT -->
	<div class="login-box">

        <!-- /.login-logo -->
        <div class="login-box-body box-custom">
            <p class="login-box-msg">Đăng nhập hệ thống</p>
			<span class="help-block" style="text-align: center;color: #dd4b39">
                       <strong>



          

			</strong>
                </span>
							
						<div class="panel-body c-panel-body">
							<form class="c-form-login" method="post">
							<div class="form-group has-feedback">
									<input type="text" class="form-control" placeholder="Nhập Tài Khoản"  id="username" name="username">
								<span class="glyphicon glyphicon-user form-control-feedback c-font-grey"></span>
								</div>
								<div class="form-group has-feedback">
									<input type="password" class="form-control"  placeholder="Password" id="password" name="password">
									<span class="glyphicon glyphicon-lock form-control-feedback c-font-grey"></span>
								</div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="checkbox icheck">
                            <label style="color: #666">
                                <input type="checkbox" name="remember" id="remember"> Ghi nhớ
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                </div>

                <div class="row">

                    <!-- /.col -->
                    <div class="col-xs-12">
										<button type="submit" id="submit" class="btn btn-primary btn-block btn-flat" style="margin: 0 auto;">Đăng nhập</button>
                    </div>





                    <!-- /.col -->
                </div>



            </form>
						<div class="social-auth-links text-center">
						                <p style="margin-top: 5px">- HOẶC -</p>



						                <a href="/register.html" class="btn  btn-social btn-google btn-flat"><i class="icon-key icons"></i>Tạo tài khoản</a>
						            </div>

            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->



	




        <!-- END: PAGE CONTENT -->



<script src="/assets/Scripts/toastr/toastr.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

    $('#submit').click(function() {
        document.getElementById("submit").disabled = true;
        document.getElementById('submit').innerHTML = "Đang đăng nhập";

    $.ajax({
        type: "POST",
        url: 'system/user',
        data: {
            type : 'login',
            username: $("#username").val(),
            password: $("#password").val()
        },
        success: function(result)
        {
                    document.getElementById("submit").disabled = false;
            document.getElementById('submit').innerHTML = "Đăng nhập";

           $("#result").html(result);
        }
    });

});

});

$(document).on('keypress',function(e) {
    if(e.which == 13) {
        $('#submit').click();
    }
});

</script>


<script>
    $(document).ready(function () {
        toastr.options = {
            "debug": false,
            "newestOnTop": false,
            "positionClass": "toast-top-right",
            "closeButton": true,
            "progressBar": true
        };
    });
</script>
