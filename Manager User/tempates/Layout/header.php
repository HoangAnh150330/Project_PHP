<?php
//kiểm tra hằng số có tồn tại
if(!defined('_CODE')){
    die('Access denied....');
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo !empty($data['pageTitle']) ? $data['pageTitle'] :'Quản lý người dùng';?></title>
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES;?>/CSS/style.css?version=<?php echo rand();?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATES;?>/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
</head>
<body>
    
</body>
</html>