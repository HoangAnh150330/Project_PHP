<!-- Đăng nhập tài khoản -->
<?php
//kiểm tra hằng số có tồn tại
if(!defined('_CODE')){
    die('Access denied....');
}
require_once _WEB_PATH_TEMPLATES.'/Layout/header.php';

?>
<div class="row">
    <div class="col-6">
        <form action="" method="post">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Địa chỉ email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Mật khẩu">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
        </form>
    </div>
</div>


<?php
    require_once _WEB_PATH_TEMPLATES.'/Layout/footer.php';
?>
