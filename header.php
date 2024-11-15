<?php
include "admin/connect.php";
$sql = "SELECT * FROM tbl_cartegory";
$result = mysqli_query($conn, $sql);

$sql_product = "SELECT brand_name FROM tbl_product INNER JOIN tbl_brand  ON  tbl_brand.brand_id = tbl_product.brand_id 
                INNER JOIN tbl_cartegory ON tbl_product.cartegory_id = tbl_cartegory.cartegory_id ";

$result_product = mysqli_query($conn, $sql_product);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/giaodien/font/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <title>Ivy_Trang chủ</title>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="./giaodien/img/logo.png" alt="">
            </div>
            <div class="menu">


                <ul class="menu">
                    <a href="index.php">TRANG CHỦ</a>
                    <a href="tatca_sanpham.php">TOÀN BỘ SẢN PHẨM</a>

                    <?php
                    while ($row_categories = mysqli_fetch_assoc($result)) { ?>
                        <li>
                            <a href="danhmuc.php?cartegory_name=<?php echo $row_categories['cartegory_name'] ?>"> <?php echo $row_categories['cartegory_name'] ?></a>

                            <ul class="sub-menu">
                                <div class="list-submenu d-flex">

                                    <?php $cartegory_id = $row_categories['cartegory_id'];
                                    $sql_brand = "SELECT * FROM tbl_brand WHERE cartegory_id = $cartegory_id";
                                    $result_brand = mysqli_query($conn, $sql_brand);

                                    // Hiển thị các sản phẩm trong danh mục này trên thanh header
                                
                                    while ($row_brand = mysqli_fetch_assoc($result_brand)) { ?>
                                        <div class="item-list-submenu">
                                            <h3>
                                                <a
                                                    href="sanpham.php?cartegory_name=<?php echo $row_categories['cartegory_name'] ?>&brand_name=<?php echo $row_brand['brand_name'] ?>">
                                                    <?php echo $row_brand['brand_name'] ?></a>

                                            </h3>
                                            <ul>
                                                <?php $brand_id = $row_brand['brand_id'];
                                                $sql_product = "SELECT * FROM tbl_product WHERE cartegory_id = $cartegory_id AND brand_id = $brand_id";
                                                $result_product = mysqli_query($conn, $sql_product);
                                                while ($row_product = mysqli_fetch_assoc($result_product)) { ?>
                                                    <li> <a
                                                            href="chitiet_sanpham.php?cartegory_name=<?php echo $row_categories['cartegory_name'] ?>&brand_name=<?php echo $row_brand['brand_name'] ?>&product_name=<?php echo $row_product['product_name'] ?>">
                                                            <?php echo $row_product['product_name'] ?></a>
                                                        <!-- <?php echo '<a href="chitiet_sanpham.php?">' . $row_product['product_name'] . '</a>' ?> -->
                                                    <li>
                                                    <?php } ?>


                                            </ul>
                                        </div>
                                    <?php } ?>

                                </div>
                            </ul>
                        </li>
                    <?php } ?>




            </div>
            <div class="other">
                <li><input placeholder="Tìm kiếm" type="text"><i class="fas fa-search"></i></li>
                <li class="account js-account"><a href="#"><i class="fas fa-user"></i>
                        <ul class="subnav">
                        <b class="name"><?php echo htmlspecialchars($_SESSION["user_name"]); ?></b>
                            <li><a class="js-login" href="#">Đăng nhập</a></li>
                            <li><a class="js-register" href="#">Đăng ký</a></li>
                            <li><a class="" href="xuli_dangxuat.php">Đăng xuất</a></li>
                            <li><a class="" href="/Ivy_project/Ivy_project/admin/index.html">Đăng nhập ADMIN</a></li>
                        </ul>
                    </a></li>
                <li><a href=""><i class="fas fa-paw"></i></a></li>
                <li><a href=""><i class="fas fa-shopping-bag"></i></a></li>

            </div>

            <div class="modal js-modal">
                <div class="modal__overlay"></div>

                <div class="modal__body js-modal-container">

                    <?php include "xuli_dangnhap.php";
                          include "xuli_dangki.php";
                    ?>
                </div>
            </div>

            <script>                   
                document.addEventListener('DOMContentLoaded', function () {
                        function hideFormLogin() {
                              modal.classList.remove('open');
 
                             }
                        const modal = document.querySelector('.js-modal');
                        const modalContainer = document.querySelector('.js-modal-container');
                        const LoginClose = document.querySelector('.js-login-close');
                        const RegisterClose = document.querySelector('.js-register-close');
                    // Lấy các phần tử cần thiết
                    var account = document.querySelector('.js-account');
                    var loginForm = document.querySelector('.form-login');
                    var registerForm = document.querySelector('.form-register');

                    // Thêm sự kiện click cho nút đăng nhập và đăng ký
                    account.addEventListener('click', function (event) {
                        var target = event.target;
                        if (target.classList.contains('js-login')) {
                            // Hiển thị form đăng nhập
                               modal.classList.add('open');
                               loginForm.style.display = 'block';
                               registerForm.style.display = 'none';
                               LoginClose.addEventListener('click', hideFormLogin);
                            //    modal.addEventListener('click', hideFormLogin);
                        } else if (target.classList.contains('js-register')) {
                            // Hiển thị form đăng ký
                                modal.classList.add('open');
                            loginForm.style.display = 'none';
                            registerForm.style.display = 'block';
                               RegisterClose.addEventListener('click', hideFormLogin);
                            //    modal.addEventListener('click', hideFormLogin);
                            
                        }
                    });
                  
                });

             
            </script>


        </header>
 </div>