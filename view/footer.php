
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
        
<?php
    }else {
        if($kun->check_user_nhan_qua() == true) {
           
?>
<?php
        
        }else {

            ?>
      
<div id="modal_register_gift"></div>
<script type="text/javascript">
        
    $(document).ready(function() {
        $('#bonus_login').click(function() {
            $('#bonus_login').hide();

            $("#modal_register_gift").load("/model/khoakillall_nhanqua.php");

        });
    });


</script>

<?php
  }
    }

            ?>
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
<p><span style="font-size:14px"><strong><span style="color:#f1c40f">*&nbsp;</span><u><a href="index.html"><span style="color:#f1c40f">Trang Web Được Quản Lý Bởi Phạm Quốc Duy</span></strong></span></p>
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
<link href='https://raw.githack.com/Shaampc/NQnia/master/f6941b7c.css' rel='stylesheet'/>
<script src='https://raw.githack.com/Shaampc/NQnia/master/contactus.js' type='text/javascript'></script>
<div id='arcontactus'></div>
<script>//<![CDATA[
var arCuMessages = ["Contact Us!", "Bạn cần hỗ trợ?"];
var arCuLoop = false;
var arCuCloseLastMessage = false;
var arCuPromptClosed = false;
var _arCuTimeOut = null;
var arCuDelayFirst = 2000;
var arCuTypingTime = 2000;
var arCuMessageTime = 4000;
var arCuClosedCookie = 0;
var nqnia = [];
window.addEventListener('load', function() {
 arCuClosedCookie = arCuGetCookie('arcu-closed');
 jQuery('#arcontactus').on('arcontactus.init', function() {
 if (arCuClosedCookie) {
 return false;
 }
 arCuShowMessages();
 });
 jQuery('#arcontactus').on('arcontactus.openMenu', function() {
 clearTimeout(_arCuTimeOut);
 arCuPromptClosed = true;
 jQuery('#contact').contactUs('hidePrompt');
 arCuCreateCookie('arcu-closed', 1, 30);
 });
 jQuery('#arcontactus').on('arcontactus.hidePrompt', function() {
 clearTimeout(_arCuTimeOut);
 arCuPromptClosed = true;
 arCuCreateCookie('arcu-closed', 1, 30);
 });
 var arcItem = {};
 arcItem.id = 'msg-item-1';
 arcItem.class = 'msg-item-facebook-messenger';
 arcItem.title = 'Messenger';
 arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path></svg>';
 arcItem.href = 'https://www.facebook.com/Cuahangkasalqcom-101521448990780';
 arcItem.color = '#567AFF';
 nqnia.push(arcItem);
 var arcItem = {};
 arcItem.id = 'msg-item-9';
 arcItem.class = 'msg-item-telegram-plane';
 arcItem.title = 'Zalo Chat';
 arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"></path></svg>';
 arcItem.href = 'https://zalo.me/xxxxxxx';
 arcItem.color = '#1EBEA5';
 nqnia.push(arcItem);
 var arcItem = {};
 arcItem.id = 'msg-item-6';
 arcItem.class = 'msg-item-skype';
 arcItem.title = 'Skype Chat';
 arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z"></path></svg>';
 arcItem.href = 'skype://XXXXXXXXXXXXX?chat';
 arcItem.color = '#1C9CC5';
 nqnia.push(arcItem);
 var arcItem = {};
 arcItem.id = 'msg-item-7';
 arcItem.class = 'msg-item-envelope';
 arcItem.title = 'Get an email';
 arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>';
 arcItem.href = 'mailto:shammalik098@gmail.com';
 arcItem.color = '#FF643A';
 nqnia.push(arcItem);
 var arcItem = {};
 arcItem.id = 'msg-item-8';
 arcItem.class = 'msg-item-phone';
 arcItem.title = 'Call';
 arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
 arcItem.href = 'tel:923000762460';
 arcItem.color = '#4EB625';
 nqnia.push(arcItem);
 jQuery('#arcontactus').contactUs({
 items: nqnia
 });
});
//]]></script>
</body>
</html>