<?php
// Initialize the session
session_start();
 
// Kiểm tra xem người dùng đã đăng nhập chưa, nếu có thì chuyển hướng người đó đến trang chào mừng
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: after_login.php");
    exit;
}
 
//  tệp cấu hình
require_once "config.php";
 
// Xác định các biến và khởi tạo với các giá trị trống
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Xử lý dữ liệu biểu mẫu khi biểu mẫu được gửi
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Kiểm tra xem tên người dùng có trống không
    if(empty(trim($_POST["username"]))){
        $username_err = "Vui lòng nhập tên người dùng.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Xin hãy điền mật khẩu.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Xác thực thông tin đăng nhập
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Đặt thông số
            $param_username = $username;
            
            // Cố gắng thực hiện tuyên bố đã chuẩn bị
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Kiểm tra xem tên người dùng có tồn tại không, nếu có thì xác minh mật khẩu
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Mật khẩu chính xác, vì vậy hãy bắt đầu một phiên mới
                            session_start();
                            
                            // Lưu trữ dữ liệu trong các biến phiên
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: after_login.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Sai tên đăng nhập hoặc mật khẩu.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Sai tên đăng nhập hoặc mật khẩu.";
                }
            } else{
                echo "Oops! Đã xảy ra lỗi. Vui lòng thử lại sau.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="qwer">
        <form action="" method="post">
            <h2>Đăng nhập ADMIN</h2>
        <p>Điền thông tin đăng nhập vào phần bên dưới.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label>Tên đăng nhập</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div>
                <label>mật khẩu</label>
                <input type="password" name="password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>>
                <span ><?php echo $password_err; ?></span>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Đăng nhập">
            </div>
            <p>Bạn chưa có tài khoản Admin ? <a href="register.php">Đăng ký tại đây</a>.</p>
        </form>
        </form>
    </div>
</body>
</html>