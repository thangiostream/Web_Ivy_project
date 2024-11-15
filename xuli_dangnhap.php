  <link rel="stylesheet" href="style.css">
<?php 
    include "admin/connect.php";
  
    if(isset($_SESSION['user_name']) && isset($_SESSION['user_password'])) 
    {
          header('Location:index.php');
    }
    if(isset($_POST['btn_dangnhap'])) {
        $tendangnhap = $_POST['tendangnhap'];
        $matkhau = $_POST['matkhau'];
     setcookie($tendangnhap , $matkhau , time()+(60*15) , "/");
       if(isset($_COOKIE[$tendangnhap])) {
          echo "cookie ".$tendangnhap . "đã tồn tại";
       }
       else {
           echo "cookie ".$tendangnhap . "không tồn tại";
       }


        $sql = "SELECT * FROM tbl_user WHERE user_name = '$tendangnhap' AND user_password= '$matkhau' ";
       
                                               
        $result = mysqli_query($conn , $sql);
        $count = mysqli_num_rows($result);
          if($count > 0) {
              $row = mysqli_fetch_array($result);
              $_SESSION['user_name'] = $row['user_name'];
              $_SESSION['user_password'] = $row['user_password'];

             
             

          } 

     }
    

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="auth-form form-login">
                        <div class="auth-form__container">
                            <div class="modal-close js-login-close">
                                X
                            </div>
                            <div class="auth-form__header">

                                <h3 class="auth-form__heading">Đăng nhập</h3>
                              
                            </div>

                            <div class="auth-form__form">
                                <div class="auth-form__group">
                                    <input required type="text" class="auth-form__input"  id="tendangnhap" name="tendangnhap" placeholder="Tên đăng nhập ">
                                </div>

                                <div class="auth-form__group">
                                    <input required type="password" class="auth-form__input"  id="matkhau" name="matkhau" placeholder="Mật khẩu ">
                                </div>


                            </div>

                            <div class="auth-form__aside">
                                <div class="auth-form__help">
                                    <a href="" class="auth-form-link auth-form__help-forgot">Quên mật khẩu</a>
                                    <span class="auth-form__help-separate"></span>
                                    <a href="" class="auth-form-link">Cần trợ giúp?</a>
                                </div>
                            </div>

                            <div class="auth-form__controls">
                                <button class="btn btn-control-back">TRỞ LẠI</button>
                                <button type="submit" name="btn_dangnhap"  class="btn btn-login ">ĐĂNG NHẬP</button>


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