<?php
	/*** YOUR WEBSITE CONFIG ***/

$config = array(
    /*** Database Config ***/
'LOCALHOST' => '127.0.0.1', // mysql host service
'USERNAME' => 'linhnk1', // username
'PASSWORD' => 'Abc12345!', // password
'DATABASE' => 'websellcoc', // database name

'facebook_app_id' => '1202780603525591',
'facebook_app_key' => 'b2447bcd996a6c55c8ceaffaacec5fd5',
'home' => 'https://Websellacc-env.eba-djpsvcvz.ap-southeast-1.elasticbeanstalk.com/', // url website có ssl và không có / ở cuối

    /*** Gạch Thẻ Config ***/   
'CALLBACK_URL' => 'http://'.$_SERVER['SERVER_NAME'].'/model/card_callback.php', // Không thay đổi
'version' => '6.0.0', // Phiên bản mã nguồn hiện tại
'author' => 'Khoakillall',
'contact' => 'https://facebook.com/khoakillallvip9999'
);
?>