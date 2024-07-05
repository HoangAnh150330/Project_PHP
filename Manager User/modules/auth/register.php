<!-- Đăng ký tài khoản -->
<?php
//kiểm tra hằng số có tồn tại
if(!defined('_CODE')){
    die('Access denied....');
}
$data=[
    'pageTitle' =>'Đăng ký tài khoản'
];
layouts('header',$data);

?>
<div class="row">
    <div class="col-4" style="margin: 50px auto;">
        <h2 class="text-center text-uppercase">Đăng ký tài khoản User</h2>
        <form action="" method="post">
            <div class="form-group mg-form">
                <label for="">Họ tên</label>
                <input type="fullname" class="form-control" placeholder="Họ tên">
            </div>
            <div class="form-group mg-form">
                <label for="">Email</label>
                <input type="email" class="form-control" placeholder="Địa chỉ email">
            </div>
            <div class="form-group mg-form">
                <label for="">Số điện thoại</label>
                <input type="Số điện thoại" class="form-control" placeholder="Số điện thoại">
            </div>
            <div class="form-group mg-form">
                <label for="">Password</label>
                <input type="password" class="form-control" placeholder="Mật khẩu">
            </div>
            <div class="form-group mg-form">
                <label for="">Nhập lại password</label>
                <input type="password" class="form-control" placeholder="Nhập lại mật khẩu">
            </div>
            <button type="submit" class="mg-btn btn btn-primary btn-block">Đăng ký</button>
            <hr>
            <p class="text-center"><a href="?module=auth&action=login">Đăng nhập tài khoản</a></p>

        </form>
    </div>
</div>


<?php
    layouts('footer');
?>
