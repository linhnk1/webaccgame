$('.price').mask('000,000,000,000,000', {reverse: true});
$('.number').mask('#',true);

$(document).ready(function () {
		App.init(); // init core
        $('.load-modal').each(function (index, elem) {
            $(elem).unbind().click(function (e) {
                e.preventDefault();
                e.preventDefault();
                var curModal = $('#LoadModal');
                curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");
                curModal.modal('show').find('.modal-content').load($(elem).attr('rel'));
            });
        });




            $('.load-modal').on('click', function(e){
                e.preventDefault();
                var curModal= $('#LoadModal');
                curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");
                curModal.modal('show').find('.modal-content').load($(this).attr('rel'));
            });


});

(function($){
    $.fn.extend({
        donetyping: function(callback,timeout){
            timeout = timeout || 1e3; // 1 second default timeout
            var timeoutReference,
                doneTyping = function(el){
                    if (!timeoutReference) return;
                    timeoutReference = null;
                    callback.call(el);
                };
            return this.each(function(i,el){
                var $el = $(el);
                // Chrome Fix (Use keyup over keypress to detect backspace)
                // thank you @palerdot
                $el.is(':input') && $el.on('keyup keypress paste',function(e){
                    // This catches the backspace button in chrome, but also prevents
                    // the event from triggering too preemptively. Without this line,
                    // using tab/shift+tab will make the focused element fire the callback.
                    if (e.type=='keyup' && e.keyCode!=8) return;

                    // Check if timeout has been set. If it has, "reset" the clock and
                    // start over again.
                    if (timeoutReference) clearTimeout(timeoutReference);
                    timeoutReference = setTimeout(function(){
                        // if we made it here, our timeout has elapsed. Fire the
                        // callback
                        doneTyping(el);
                    }, timeout);
                }).on('blur',function(){
                    // If we can, fire the event since we're leaving the field
                    doneTyping(el);
                });
            });
        }
    });
})(jQuery);

$(function () {
	if($('nav#menu_mobile').length > 0){
	$('nav#menu_mobile').mmenu({
		extensions: ['effect-slide-menu', 'shadow-page', 'shadow-panels'],
		keyboardNavigation: true,
		screenReader: true,
		counters: false,
		navbar: {
			title: 'Trang chủ'
		},
		navbars: [
			{
				height: 3,
				position: 'top',
				content: [
					'<div id="logo" class="site-logo"><img src="{{Setting::getCacheSettings(SETTING_SYSTEM_LOGO)}}" style="max-width: 150px;"></div>'

				],
			}
				]
	});
	}
});


$('img').each(function(){
		var currentSrc = $(this).attr('src');
		var hostURL = $('#vlUR').val();
		console.log(currentSrc);
		$(this).attr("src","https://azgame.vn" + currentSrc);
})


	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})


    $(".menu-main-mobile a").click(function() {

        if( $(this).closest("li").hasClass("c-open")){
            $(this).closest("li").removeClass("c-open");
		}
		else{
            $(this).closest("li").addClass("c-open");
		}
    });

        $phone_number_account = "";
        $counttime=600;
        $minuetime=0;
        var tuk;
        $("#resendOTP").click(function () {
			$counttime=600;
            //disiable button 30s
            document.getElementById("resendOTP").disabled = true;
           tuk = setInterval(function(){
                $counttime = $counttime -1;
                $minuetime = Math.floor($counttime/60);
                if($minuetime > 0) {
                    $('#resendOTP').html("Bạn có thể lấy lại OTP sau "+$minuetime+" phút " + ($counttime - ($minuetime*60)) + " giây");
                }
                else {
                    $('#resendOTP').html("Bạn có thể lấy lại OTP sau " + $counttime + " giây");
                }
                $('#resendOTP').addClass("disableTag");
                if($counttime < 1)
                {
                    stopInteval();
                    $('#resendOTP').removeClass("disableTag");
                    document.getElementById("resendOTP").disabled = false;
                    $('#resendOTP').html("Gửi lại mã OTP");
                }
            }, 1000);


            $(".help-block").html("<strong>Đang thực hiện gửi OPT đến số điện thoại...</strong>");
            document.getElementById("sumitButton").disabled = true;
            $(".loadingbox").show();
            var username =$("input[name=username]").val();
            var password =$("input[name=password]").val();
            if($phone_number_account.length>0) {
                sendOTPAuthentication(username, password, $phone_number_account)
            }
            else {
                document.getElementById("sumitButton").disabled = false;
                $(".help-block").html("<strong>Không thể tìm thấy số điện thoại để gửi OTP</strong>");
            }
        });
        function stopInteval() {
            clearInterval(tuk);
        }
        $("#sumitButton").click(function () {
            $("#sumitButton").html("Đang xác thực OTP...");
            document.getElementById("sumitButton").disabled = true;
            $(".loadingbox").show();
            var username =$("input[name=username]").val();
            var password =$("input[name=password]").val();
            var odp_code =$("input[name=odp_code]").val();
            if(odp_code.length < 1)
            {
                $(".help-block").html("<strong>Vui lòng nhập OTP</strong>");
                $(".loadingbox").hide();
                $("#sumitButton").html("Xác nhận");
                document.getElementById("sumitButton").disabled = false;
                return;
            }
            jQuery.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/checkodpcode",
                method: 'post',
                dataType: "json",
                data: {
                    username: username,
                    password: password,
                    odp_code:odp_code
                },
                success: function (result) {
                    if(result.status == 1)
                    {
                        console.log(result)
                        //Send OPT to Member
                        $("#sumitButton_Login").click();
                    }
                    else
                    {
                        $("#sumitButton").html("Xác nhận");
                        document.getElementById("sumitButton").disabled = false;
                        $(".loadingbox").hide();
                        $(".help-block").html("<strong>"+result.message+"</strong>");
                    }
                },
                error: function (data, textStatus, errorThrown) {
                    $(".loadingbox").hide();
                    $("#sumitButton").html("Xác nhận");
                    document.getElementById("sumitButton").disabled = false;
                    alert('Có lỗi xảy ra. Vui lòng thử lại sau!');
                    console.log(data);
                }
            });
        })

        $("#getIdentityCode").click(function () {
			$("#sumitButton_Login").click();
            $(".help-block").html("");
            $(".loadingbox").show();
            $("#getIdentityCode").html("Đang đăng nhập...");
            document.getElementById("getIdentityCode").disabled = true;
            var username =$("input[name=username]").val();
            var password =$("input[name=password]").val();
            if(username.length<1)
            {
                $(".help-block").html("<strong>Vui lòng nhập tên đăng nhập</strong>");
                $(".loadingbox").hide();
                $("#getIdentityCode").html("Đăng nhập");
                document.getElementById("getIdentityCode").disabled = false;
                return;
            }
            if(password.length<1)
            {
                $(".help-block").html("<strong>Vui lòng nhập mật khẩu</strong>");
                $(".loadingbox").hide();
                $("#getIdentityCode").html("Đăng nhập");
                document.getElementById("getIdentityCode").disabled = false;
                return;
            }
                jQuery.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "/checkuserinfo",
                    method: 'post',
                    dataType: "json",
                    data: {
                        username: username,
                        password: password
                    },
                    success: function (result) {
                        if(result.status == 1)
                        {
                            console.log(result)
                            //Send OPT to Member
                            if(result.info.phone != null && result.info.phone.length > 0)
                            {
                                $phone_number_account = result.info.phone;
                                sendOTPAuthentication(username,password,result.info.phone)
                            }
                            else {
                                $(".loadingbox").hide();
                                $(".help-block").html("<strong>Tài khoản chưa được cập nhật Số điện thoại để nhận OTP. Vui lòng liên hệ quản trị viên</strong>");
                            }
                        }
                        else if(result.status == 2){
                            $("#sumitButton_Login").click();
                        }
						else if(result.status == 3) {
							$phone_number_account = result.info.phone;
							document.getElementById("sumitButton").disabled = false;
							//Update success
							$(".help-block").html("<strong>Hãy nhập mã OTP để đăng nhập. Bạn có thể sử dụng mã OTP nhận được cho lần đăng nhập cuối cùng 24h trước đó.</strong>");
							$("#getIdentityCode").hide();
							$("#sumitButton").show();
							$(".infox_box").hide();
							$(".otp_code_box").show();
							$(".loadingbox").hide();
						}
                        else
                        {
                            $(".loadingbox").hide();
                            $("#getIdentityCode").html("Đăng nhập");
                            document.getElementById("getIdentityCode").disabled = false;
                            $(".help-block").html("<strong>"+result.message+"</strong>");
                        }
                    },
                    error: function (data, textStatus, errorThrown) {
                        $(".loadingbox").hide();
                        $("#getIdentityCode").html("Đăng nhập");
                        document.getElementById("getIdentityCode").disabled = false;
                        alert('Có lỗi xảy ra. Vui lòng thử lại sau!');
                        console.log(data);
                    }
                });
        });

        function sendOTPAuthentication (username,password,numberphone) {
            jQuery.ajax({
                headers: {
                    'Access-Control-Allow-Origin':'*',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Access-Control-Allow-Headers':'Content-Type, X-Auth-Token, Origin, Authorization',
                    'Access-Control-Allow-Methods':'POST, GET, OPTIONS, PUT, DELETE'
                },

                url: "/",
                method: 'get',
                dataType: "json",
                success: function (result) {
                    if(result.status == 1)
                    {
                        console.log(result)
                        //Update OTP to Account
                        updateOTPAccount(username,password,result.code);
                    }
                    else
                    {
                        $("#sumitButton").html("Xác nhận");
                        document.getElementById("sumitButton").disabled = false;
                        $(".loadingbox").hide();
                        $("#getIdentityCode").html("Đăng nhập");
                        document.getElementById("getIdentityCode").disabled = false;
                        $(".help-block").html("<strong>Tài khoản này đã được kích hoạt OTP nhưng số điện thoại không hợp lệ. Vui lòng liên hệ quản trị viên - Lỗi: "+result.message+"</strong>");
                    }
                },
                error: function (data, textStatus, errorThrown) {
                    $("#sumitButton").html("Xác nhận");
                    document.getElementById("sumitButton").disabled = false;
                    $(".loadingbox").hide();
                    $("#getIdentityCode").html("Đăng nhập");
                    document.getElementById("getIdentityCode").disabled = false;
                    alert('Có lỗi xảy ra. Vui lòng thử lại sau!');
                    console.log(data);
                }
            });
        };

        function updateOTPAccount(username,password,code) {
            jQuery.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/updateOTPCode",
                method: 'post',
                dataType: "json",
                data: {
                    username: username,
                    password: password,
                    code:code
                },
                success: function (result) {
                    if(result.status == 1)
                    {
                        document.getElementById("sumitButton").disabled = false;
                        console.log(result)
                        //Update success
                        $(".help-block").html("<strong>Chúng tôi đã gửi mã OTP đến số điện thoại mà bạn đăng ký. Vui lòng xác nhận</strong>");
                        $("#getIdentityCode").hide();
                        $("#sumitButton").show();
                        $(".infox_box").hide();
                        $(".otp_code_box").show();
                        $(".loadingbox").hide();
                    }
                    else
                    {
                        (".loadingbox").hide();
                        $("#getIdentityCode").html("Đăng nhập");
                        document.getElementById("sumitButton").disabled = false;
                        document.getElementById("getIdentityCode").disabled = false;
                        $(".help-block").html("<strong>"+result.message+"</strong>");
                    }
                },
                error: function (data, textStatus, errorThrown) {
                    $(".loadingbox").hide();
                    alert('Có lỗi xảy ra. Vui lòng thử lại sau!');
                    $("#getIdentityCode").html("Đăng nhập");
                    document.getElementById("sumitButton").disabled = false;
                    document.getElementById("getIdentityCode").disabled = false;
                    console.log(data);
                }
            });
        };

        function runScript(event) {
            if (event.which == 13 || event.keyCode == 13) {
                //code to execute here
                $("#getIdentityCode").click();
                return false;
            }
            return true;
        };

        function runScriptOTP(event) {
            if (event.which == 13 || event.keyCode == 13) {
                //code to execute here
                $("#sumitButton").click();
                return false;
            }
            return true;
        };
