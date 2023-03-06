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
            <p class="login-box-msg">Đăng ký thành viên</p>

                <span class="help-block" style="text-align: center;color: #dd4b39">
                       <strong></strong>
                </span>

            <form action="" method="post">
            					<input type="hidden" name="ci_csrf_token" value="" />

<div class="form-group has-feedback">
									<input type="text" class="form-control" placeholder="Họ và Tên" id="name" name="name" required>
									<span class="glyphicon  form-control-feedback c-font-grey"></span>
								</div>
							
								<div class="form-group has-feedback">
									<input type="text" class="form-control" placeholder="Tên Tài Khoản" id="username" name="username" required>
									<span class="glyphicon glyphicon-user form-control-feedback c-font-grey"></span>
								</div>
								
								<div class="form-group has-feedback">
									<input type="text" class="form-control" placeholder="Email" id="email" name="email" required>
									<span class="glyphicon glyphicon-user form-control-feedback c-font-grey"></span>
								</div>
								
								<div class="form-group has-feedback">
									<input type="password" class="form-control" placeholder="Nhập Mật Khẩu" id="password" name="password" required>
									<span class="glyphicon glyphicon-lock form-control-feedback c-font-grey"></span>
								</div>
								
								<div class="form-group has-feedback">
									<input type="password" class="form-control" placeholder="Nhập Lại Mật Khẩu" id="repassword" name="repassword" required>
									<span class="glyphicon glyphicon-lock form-control-feedback c-font-grey"></span>
								</div>

								<div class="c-margin-t-40 c-center">
										<button type="submit" id="submit" class="btn btn-primary btn-block btn-flat" >Đăng Kí</button>
								</div>
							</form>
							<div class="social-auth-links text-center">
						                <p style="margin-top: 5px">- HOẶC -</p>



						                <a href="#" class="btn  btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Google+</a>
						            </div>
						</div>
					</div>
				</div>
			</div>


<script src="/assets/Scripts/toastr/toastr.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

    $('#submit').click(function() {
        document.getElementById("submit").disabled = true;
        document.getElementById('submit').innerHTML = "Đang kiểm tra";

    $.ajax({
        type: "POST",
        url: 'system/user',
        data: {
            type : 'register',
            name: $("#name").val(),   
            username: $("#username").val(),         
            email: $("#email").val(),
            password: $("#password").val(),
            repassword: $("#repassword").val()
        },
        success: function(result)
        {
                    document.getElementById("submit").disabled = false;
            document.getElementById('submit').innerHTML = "Đăng kí";

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


   
</body>
</html>
