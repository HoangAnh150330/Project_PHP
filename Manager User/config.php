<!-- Các hằng số của project -->

<?php
const _MODULE ='home';
const _ACTION ='dashboard';
const _CODE = true;
//Thiết lập host
define('_WEB_HOST','http://'.$_SERVER['HTTP_HOST'].'/Project/Manager User/');
define('_WEB_HOST_TEMPLATES',_WEB_HOST.'/tempates');

//Thiết lập path đến từng thư mục
define('_WEB_PATH',__DIR__);

define('_WEB_PATH_TEMPLATES',_WEB_PATH.'/tempates');


//thông tin kết nối
const _HOST='localhost';
const _DB='bd_hienu';
const _USER='root';
const _PASS='';
