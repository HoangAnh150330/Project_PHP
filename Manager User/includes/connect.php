<!-- Kết nối các database -->
<?php
//kiểm tra hằng số có tồn tại
if(!defined('_CODE')){
    die('Access denied....');
}
require_once "./Manager User/config.php";

try{
    if(class_exists('PDO')){
        $dsn='mysql:dbname='._DB.';host='._HOST;
        $option=[
            PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8' ,//set utf8
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION //tạo thông áo ngoại lệ khi gặp lỗi
        ];
        $conn = new PDO($dsn,_USER,_PASS,$option);
        if($conn){
            echo 'Kết nối thành công';
        }
    }

}catch(Exception $exception){
    echo '<div style="color:red;padding:5px 15px;border:1px solid red;">';
    echo $exception ->getMessage().'<br>';
    echo '</div>';
    die();
}