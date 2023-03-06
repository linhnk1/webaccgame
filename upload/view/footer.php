<style type="text/css">
    #bonus{
        position: fixed;
        bottom: 15px;
        left: 15px;
        width: 13%;
        z-index: 1000;
        cursor: pointer;
    }
    #bonus img{
        width: 100%;
    }
	#bonus_login{
		display:block;
        position: fixed;
        bottom: 15px;
        left: 15px;
        width: 13%;
        z-index: 1000;
        cursor: pointer;
    }
    #bonus_login img{
        width: 100%;
    }
    .mobile{
        width: 30%!important;
    }
	@media  only screen and (max-width: 640px) {
		#bonus_login{width: 50%!important;!important;}
		#bonus{width: 50%!important;!important;}
	}
	#bonusModal .modal-body p,#bonusModal .modal-body b{display:inline;color:#000}
</style>


<?php
if(!$_SESSION['token']) {
        ?>
        <a id="bonus_login" href="/signin.html" title="Click để nhận thưởng!" class="">
        <img src="https://i.imgur.com/FqGKtqz.gif" width="500">
</a>
<?php
    }else {
        if($kun->check_user_nhan_qua() == true) {
?>
<?php }else { ?>
        <a id="bonus_login" title="Click để nhận thưởng!" class="">
        <img src="https://i.imgur.com/FqGKtqz.gif" width="500">
</a>
<div id="modal_register_gift"></div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#bonus_login').click(function() {
            $('#bonus_login').hide();
            $("#modal_register_gift").load("/model/register_gift.php");
        });
    });
</script>
<?php } } ?>
    <script>
        $(document).ready(function () {

            $(".int").inputmask("integer", { radixPoint: ",", autoGroup: true, groupSeparator: ".", groupSize: 3 });
            $(".dec").inputmask("decimal", { radixPoint: ",", autoGroup: true, groupSeparator: ".", groupSize: 3 });

            function detectmob() {
                if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
                    return true;
                } else { return false; }
            }
            var t = { delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button") };
            setTimeout(function () { $("div.fb-livechat").fadeIn() }, 8 * t.delay);
            if (!detectmob()) {
                $(".ctrlq").on("click", function (e) { e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({ bottom: 0, opacity: 0 }, 2 * t.delay, function () { $(this).hide("slow"), t.button.show() })) : t.button.fadeOut("medium", function () { t.widget.stop().show().animate({ bottom: "30px", opacity: 1 }, 2 * t.delay), t.overlay.fadeIn(t.delay) }) })
            }


        });

        function reload_money() {
                              $.ajax({ 
                        type: 'post', 
                        dataType: "JSON",
                        url: '/system/user', 
                        data: {
                            type: 'get-money',
                            token: '<?php if(isset($_SESSION['token'])) echo $_SESSION['token'];?>'
                        }, 
                        success: function (json) {
                            if(json.status == false) {
                     swal("Lỗi!", "Vui lòng đăng nhập lại!", "error");          
                            }else if(json.status == true) {
                            $("#head_money").numAnim({
                                endAt: json.money,
                                duration: 3
                            });
                              return json.money;
                            }else {
                     swal("Lỗi!", "Lỗi hệ thống!", "error");                
                            }
                    }
                });

        }


(function($){
    $.fn.extend({
        numAnim: function(options) {
            if ( ! this.length)
                return false;

            this.defaults = {
                endAt: 2560,
                numClass: 'autogen-num',
                duration: 5,   // seconds
                interval: 90  // ms
            };
            var settings = $.extend({}, this.defaults, options);

            var $num = $('<span/>', {
                'class': settings.numClass 
            });

            return this.each(function() {
                var $this = $(this);

                // Wrap each number in a tag.
                var frag = document.createDocumentFragment(),
                    numLen = settings.endAt.toString().length;
                for (x = 0; x < numLen; x++) {
                    var rand_num = Math.floor( Math.random() * 10 );
                    frag.appendChild( $num.clone().text(rand_num)[0] )
                }
                $this.empty().append(frag);

                var get_next_num = function(num) {
                    ++num;
                    if (num > 9) return 0;
                    return num;
                };

                // Iterate each number.
                $this.find('.' + settings.numClass).each(function() {
                    var $num = $(this),
                        num = parseInt( $num.text() );

                    var interval = setInterval( function() {
                        num = get_next_num(num);
                        $num.text(num);
                    }, settings.interval);

                    setTimeout( function() {
                        clearInterval(interval);
                    }, settings.duration * 1000 - settings.interval);
                });

                setTimeout( function() {
                    $this.text( settings.endAt.toString() );
                }, settings.duration * 1000);
            });
        }
    });
})(jQuery);

    </script>
<!-- END: PAGE CONTENT -->
</div>
<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="loader" style="text-align: center"><img src="assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
        <div class="modal-content">
        </div>
    </div>
</div>
<!-- END: PAGE CONTAINER -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-3 c-bg-dark">
    <div class="c-prefooter" style="padding:20px 0 20px">
        <div class="container">
            <div class="row">
                <style type="text/css">
                    @media    only screen and (max-width: 580px) {
                        .pc {
                          display: none;
                        }
                    }
                    @media    only screen and (min-width: 580px) {
                        .mb {
                          display: none;
                        }
                    }
                </style>
                <div class="col-md-4 colLeft pc">
                    <p><img src="<?php echo $_logo ['url'];?>" style="height:82px; width:220px" /></p>
<p><span style="font-size:14px"><strong><span style="color:#f1c40f">*&nbsp;</span><u><a href="index.html"><span style="color:#f1c40f">Trang Web Được Quản Lý Bởi Taoshopgiare.com</span></strong></span></p>
                </div>
                <div class="col-md-4 colLeft mb">
                    <p><span style="color:#2ecc71"><span style="font-size:16px"><strong>MENU </strong></span></span><span style="font-size:16px"><strong><a href="https://shopfreefire.vn/"><span style="color:#2ecc71">SHOP GAME</span></a></strong></span></p>
<p><span style="font-size:12px"><strong><span style="color:#f1c40f"></span><a href="nhan-mien-phi-1-luot-quay.html"><span style="color:#f1c40f">V&ograve;ng Quay Kim Cương Free Fire&nbsp;Miễn Ph&iacute;</span></a></strong></span></p>
<p><span style="font-size:12px"><strong><span style="color:#f1c40f"></span><a href="vong-quay-may-man.html"><span style="color:#f1c40f">V&ograve;ng Quay May Mắn Nhận Ng&agrave;n Phần Thưởng</span></a></strong></span></p>
<p><span style="font-size:12px"><strong><span style="color:#f1c40f"></span><a href="mo-ruong-may-man.html"><span style="color:#f1c40f">Mở Rương Tr&uacute;ng Kim Cương Khủng</span></a></strong></span></p>
<p><span style="font-size:12px"><strong><span style="color:#f1c40f"></span><a href="index.html"><span style="color:#f1c40f">Nick Free Fire Gi&aacute; Rẻ</span></a></strong></span></p>
<p><span style="font-size:12px"><strong><span style="color:#f1c40f"></span><a href="index.html"><span style="color:#f1c40f">Nick Li&ecirc;n Qu&acirc;n Gi&aacute; Rẻ</span></a></strong></span></p>
                </div>
                <div class="col-md-3 colRight mb">
                    <p><img src="<?php echo $_logo ['url'];?>" style="height:82px; width:220px" /></p>
<p><span style="font-size:14px"><strong><span style="color:#f1c40f">*&nbsp;</span><u><a href="index.html"><span style="color:#f1c40f">Shop Ch&iacute;nh Thức&nbsp;Của <?php echo $_admin ['name'];?></span></a></u><br />
<span style="color:#f1c40f">* </span><span style="color:#f1c40f">Shop Acc Free Fire V&agrave; Li&ecirc;n Qu&acirc;n Gi&aacute; Rẻ - Uy T&iacute;n - Tự Động<br />
*&nbsp;200.000 Giao Dịch Th&agrave;nh C&ocirc;ng&nbsp;M&ocirc;̃i Ngày<br />
* Khuyến Mại </span><a href="index.html"><span style="color:#f1c40f">Khung Giờ V&agrave;ng</span></a><span style="color:#f1c40f">&nbsp;Mỗi&nbsp;Ng&agrave;y&nbsp;<br />
* Đ&ocirc;̣i Ngũ CSKH Tư Vấn Nhiệt T&igrave;nh,&nbsp;Nhanh Ch&oacute;ng&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></strong></span></p>
                </div>
                <div class="col-md-5 colRight">
                    <table align="left" border="0" cellpadding="0" cellspacing="1">
	<tbody>
		<tr>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong><img src="/assets/images/1.png" style="height:60px; width:60px" /></strong></span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong>1 năm</strong></span></span><br />
			<span style="color:#f1c40f"><span style="font-size:14px"><strong>Hoạt Động</strong></span></span></p>
			<p style="text-align:center">&nbsp;</p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong><img src="/assets/images/7.png" style="height:60px; width:60px" /></strong></span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong>&nbsp;20.565</strong></span></span><br />
			<span style="color:#f1c40f"><span style="font-size:14px"><strong>Th&agrave;nh Vi&ecirc;n</strong></span></span></p>
			<p style="text-align:center">&nbsp;</p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong><img src="/assets/images/3.png" style="height:60px; width:60px" /></strong></span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong>50.969</strong></span></span><br />
			<span style="color:#f1c40f"><span style="font-size:14px"><strong>Lượt V&agrave;o Shop</strong></span></span></p>
			<p style="text-align:center">&nbsp;</p>
			</td>
		</tr>
		<tr>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong><img src="/assets/images/4.png" style="height:60px; width:60px" /></strong></span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong>1.468</strong></span></span><br />
			<span style="color:#f1c40f"><span style="font-size:14px"><strong>Acc Đ&atilde; B&aacute;n</strong></span></span></p>
			<p style="text-align:center">&nbsp;</p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong><img src="/assets/images/18.png" style="height:60px; width:60px" /></strong></span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong>2.259</strong></span></span><br />
			<span style="color:#f1c40f"><span style="font-size:14px"><strong>Lượt Tr&uacute;ng Lớn</strong></span></span></p>
			<p style="text-align:center">&nbsp;</p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong><img src="/assets/images/2.png" style="height:60px; width:60px" /></strong></span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="color:#2ecc71"><span style="font-size:14px"><strong>C&oacute; 1&nbsp;</strong></span></span><br />
			<span style="color:#f1c40f"><span style="font-size:14px"><strong>Trụ Sở</strong></span></span></p>
			<p style="text-align:center">&nbsp;</p>
			</td>
		</tr>
	</tbody>
</table>
                    <p style="text-align:center">&nbsp;</p>
                    <div id="fb-root"></div>
                    <script>(function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id))
                                return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                    <div style="display: flex;justify-content: center" class="fb-page" data-href="" data-height="270" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="" class="fb-xfbml-parse-ignore"><a href=""></a></blockquote></div>
                </div>
                <div class="col-md-3 colRight pc">
                <div class="fb-page" data-href="https://www.facebook.com/108946381451218" data-tabs="timeline" data-height="270" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/108946381451218" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/108946381451218">FB</a></blockquote></div>
                <p>&nbsp;</p>
                </div>
                <style>
                    .colLeft{padding: 15px;border: 1px solid #808080;background-color: #373535;border-radius: 5px;}
                    .colRight{padding:15px}
                    .colRight table{width:100%!important}
                    .colRight table tr{background-color:unset!important;color:#fff}
                    .colRight table tr td p{margin:0}

                </style>
            </div>
        </div>
    </div>
    <div class="c-postfooter" style="display:none">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 c-col">
                    <p class="c-copyright c-font-grey" style="width: 100%">
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="c-layout-go2top">
    <i class="icon-arrow-up"></i>
</div>
<input type="hidden" id="vlUR" value="shopalice.vn"/>
<script>
    //Check nếu thay đổi mật khẩu mới thì login lại
    $(document).ready(function(){
        $(".menu-main-mobile a").click(function() {
            if( $(this).closest("li").hasClass("c-open")){
                $(this).closest("li").removeClass("c-open");
            }
            else{
                $(this).closest("li").addClass("c-open");
            }
        });
        jQuery.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/checkpass",
            method: 'get',
            success: function (result) {
                console.log(result)
                if(result.status == 1)
                {
                }
                else
                {
                    //Nothing
                }
            },
            error: function (data, textStatus, errorThrown) {
                //Nothing
                console.log(errorThrown)
            }
        });
    })
</script>
</body>
</html>