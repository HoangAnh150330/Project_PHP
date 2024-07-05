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
            $ketqua=$statement ->execute($data);
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
//Hàm insert
function insert($table,$data){
    $key=array_keys($data);
    $truong= implode(',',$key);  
    $valuetb= ':'.implode(',:',$key);
    //tạo câu lệnh sql
    $sql='Insert Into '.$table.'('.$truong.')'.'Values('.$valuetb.')';

    $kq=query($sql,$data);
    return $kq;
}

//Hàm update
function update($table,$data,$condition=''){
    $update='';
    foreach($data as $key => $value){
        $update .= $key.'= :'.$key.',';
    }
    $update=trim($update,',');

    if(!empty($condition)){
        $sql=' update '.$table .' Set '.$update.' where '.$condition .';';
    }
    else{
        $sql='update'.$table .'Set '.$update;
    }
    $kq=query($sql,$data);
    return $kq;
}