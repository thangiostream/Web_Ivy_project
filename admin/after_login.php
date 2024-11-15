<?php
// Khởi tạo phiên bản
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" type="text/css" href="style1.css">
     <title>Danh mục sản phẩm</title>
</head>

<body>
     <header>
          <h1>ADMIN</h1>
          <div class="header">

               <div class="hello">
                    <h3><b class="name">
                              <?php echo htmlspecialchars($_SESSION["username"]); ?>
                         </b></h3>
               </div>
          </div>


          <p class="list">

               <li><a class="" href="reset-password.php">Đặt lại mật khẩu</a> </li>
               <li><a class="" href="logout.php">Đăng suất</a> </li>
          </p>
     </header>
     <section class="admin-content">
          <div class="admin-content-left">
               <ul>
                    <li><a href="#">Danh mục</a>
                         <ul>
                              <li><a href="">Thêm danh mục</a></li>
                              <li><a href="/Ivy_project/Ivy_project/admin/cartegory_list.php">Danh sách danh mục</a></li>
                         </ul>
                    </li>

                    <li><a href="#">Loại sản phẩm</a>
                         <ul>
                              <li><a href="/Ivy_project/Ivy_project/admin/cartegory.html">Thêm loại sản phẩm</a></li>
                              <li><a href="">Danh sách loại sản phẩm</a></li>
                         </ul>
                    </li>
                    <li><a href="#">Sản phẩm</a>
                         <ul>
                              <li><a href="/Ivy_project/Ivy_project/admin/product_add.html">Thêm sản phẩm</a></li>
                              <li><a href="">Danh sách sản phẩm</a></li>
                         </ul>
                    </li>
               </ul>
          </div>
          <div class="admin-content-right">
               <div class="admin-content-right-product_add">
                    <h1>Thêm sản phẩm</h1>
                    <form action="" method="Post" enctype="multipart/form-data">
                         <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                         <input type="text" required>
                         <label for="">Chọn danh mục <span style="color: red;">*</span></label>
                         <select name="" id="">
                              <option value="">--Chọn </option>
                         </select>
                         <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
                         <select name="" id="">
                              <option value="">--Chọn </option>
                         </select>
                         <label for="">Giá sản phẩm<span style="color: red;">*</span></label>
                         <input type="text">
                         <label for="">Giá khuyến mãi <span style="color: red;">*</span></label>
                         <input type="text">
                         <label for="">Mô tả sản phẩm<span style="color: red;">*</span></label>
                         <textarea name="" id="" cols="30" rows="10"></textarea>
                         <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
                         <input type="file">
                         <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
                         <input multiple type="file">
                         <button type="submit">Thêm </button>

                    </form>
               </div>
          </div>
     </section>
</body>

</html>