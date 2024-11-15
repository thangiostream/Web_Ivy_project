<link rel="stylesheet" href="style.css">
<?php
include "admin/connect.php";
$loi = '';
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $tendangnhap    = $_POST['tendangnhap'];
    $matkhau        = $_POST['matkhau'];
    $xacnhanmatkhau = $_POST['xacnhanmatkhau'];
   
   if ($matkhau != $xacnhanmatkhau) {
    $loi = 'Mật khẩu và xác nhận mật khẩu không giống nhau';
} else {
    $sql = "SELECT * FROM tbl_user WHERE user_name='$tendangnhap'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $loi = 'Tên đăng nhập đã tồn tại';
    } else {
        $sql = "INSERT INTO tbl_user(user_name, user_password) VALUES ('$tendangnhap', '$matkhau')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Đăng kí thành công";
        } else {
            echo "Lỗi trong quá trình đăng kí: " . mysqli_error($conn);
        }
    }
}


}

?>
<form action="" method="post" enctype="multipart/form-data">
         <div class="auth-form form-register">
                        <div class="auth-form__container">
                            <div class="auth-form__header">

                                <h3 class="auth-form__heading">Đăng kí</h3>
                                 <div class="modal-close js-register-close">
                                   X
                            </div>
                            </div>

                            <div class="auth-form__form">
                                <div class="auth-form__group">
                                    <input required type="text" class="auth-form__input" id="tendangnhap" name="tendangnhap" placeholder="Tên đăng nhập">
                                </div>

                                <div class="auth-form__group">
                                    <input required type="password" class="auth-form__input"  id="matkhau" name="matkhau" placeholder="Mật khẩu mật khẩu">
                                </div>

                                <div class="auth-form__group">
                                    <input required type="password" class="auth-form__input"  id="xacnhanmatkhau" name="xacnhanmatkhau" placeholder="Nhập lại mật khẩu">
                                </div>
                            </div>

                            <div class="auth-form__aside">
                                <p class="auth-form__policy-text">
                                    Bằng việc đăng kí ,bạn đã đồng ý với IVYMODA về
                                    <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a> &
                                    <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                                </p>
                            </div>

                            <div class="auth-form__controls">
                                <button class="btn btn--normal btn-control-back">TRỞ LẠI</button>
                                <button type="submit" name="btn-dangki" class="btn btn-register">ĐĂNG KÍ</button>


                            </div>
                        </div>

                        <div class="auth-form__socials">
                            <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                                <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                                <span class="auth-form__socials-title">
                                    Kết nối với Facebook
                                </span>
                            </a>
                            <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                                <i class="auth-form__socials-icon fab fa-google"></i>
                                <span class="auth-form__socials-title">
                                    Kết nối với Google
                                </span>
                            </a>
                        </div>
                    </div>
</form>