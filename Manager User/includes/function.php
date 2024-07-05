<!-- Các hàm chung của Project -->
<?php
//kiểm tra hằng số có tồn tại
if(!defined('_CODE')){
    die('Access denied....');
}

function layouts($layoutName='header',$data=[]){
    if(file_exists(_WEB_PATH_TEMPLATES.'/Layout/'.$layoutName.'.php')){
        require_once _WEB_PATH_TEMPLATES.'/Layout/'.$layoutName.'.php';
    }
}