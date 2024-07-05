<!-- Các hàm xử lý liên quan đến cơ sở dữ liệu -->
<?php
//kiểm tra hằng số có tồn tại
if(!defined('_CODE')){
    die('Access denied....');
}

function query($sql,$data=[]){
    global $conn;
    $ketqua=false;
    try{
        $statement= $conn ->prepare($sql);
        if(!empty($data)){
            $statement ->execute($data);
        }
        else{
            $ketqua=$statement ->execute();
        }
       
    }catch(Exception $exception){
        echo $exception ->getMessage().'<br>';
        echo 'File:'.$exception ->getFile().'<br>';
        echo 'Line:'.$exception ->getLine().'<br>'; 
        die();
    }
    return $ketqua;

}