<?php
include "admin/connect.php";
include "header.php";



$product_details_id = $_GET['product_details_id'];

$sql = "SELECT * FROM tbl_product_details WHERE  product_details_id ='$product_details_id'";
$result = mysqli_query($conn, $sql);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/giaodien/font/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Ivy_Product</title>
</head>

<body>

    <!--------------------------- Product ----------------------------- -->
    <section class="product">
        <div class="container">
            <div class="product-top row">

            </div>
            <div class="product-content row">
                <div class="product-content-left row">

                    <div class="product-content-left-big-img">

                        <?php while ($row = mysqli_fetch_assoc($result)) {
                            $row_name = $row;
                            $row_id = $row;
                            $row_price = $row;
                            $row_desc = $row;
                            $cartegory_id = $row['cartegory_id'];
                            $brand_id = $row['brand_id'];
                            $product_id = $row['product_id'];
                            ?>
                            <img width="100%" height="auto" style="border:1px solid #DCDCDC"
                                src="admin/uploads/<?php echo $row['product_details_img'] ?>" alt="">

               <?php } ?>
                    </div>

                </div>
                <div class="product-content-right">
                    <div class="product-content-right-product-name">

                        <h1>
                            <?php echo $row_name['product_details_name'] ?>
                        </h1>


                        <p>
                            <?php echo " Mã sản phẩm :" . $row_id['product_details_id'] ?>
                        </p>
                    </div>
                    <div class="product-content-right-product-price">
                        <p>
                            <?php echo $row_price['product_details_price'] ?>
                        </p>
                    </div>
                    <div class="product-content-right-product-color">
                        <p><span style="font-weight: bold;">Màu sắc</span>:Họa tiết Hồng<span
                                style="color: red;">*</span></p>
                        <div class="product-content-right-product-color-img">
                            <img src="./giaodien/img/sp1_color.png" alt="">
                        </div>
                    </div>
                    <div class="product-content-right-product-size">
                        <p style="font-weight: bold;">Size:</p>
                        <div class="size">
                            <span>S</span>
                            <span>M</span>
                            <span>L</span>
                            <span>XL</span>
                            <span>XXL</span>
                        </div>
                    </div>
                    <div class="quantity">
                        <p style="font-weight: bold;">Số lượng:</p>
                        <input type="number" min="0" value="1">
                        <p style="color:red;">Vui lòng chọn size*</p>

                    </div>
                    <div class="product-content-right-product-button">
                      <a href="cart.php?product_details_id=<?php  echo  $row_id['product_details_id']?>" >
                        <button type="submit"><i class="fas fa-shopping-cart"></i>
                            <p>MUA HÀNG</p>
                        </button>
                      
                      </a>
                           
                         
                        <button>
                            <p>TÌM TẠI CỬA HÀNG</p>
                        </button>
                    </div>
                    <div class="product-content-right-product-icon">
                        <div class="product-content-right-product-icon-item">
                            <i class="fas fa-phone-alt"></i>
                            <p>Hot Line</p>
                        </div>
                        <div class="product-content-right-product-icon-item">
                            <i class="far fa-comments"></i>
                            <p>Chat</p>
                        </div>
                        <div class="product-content-right-product-icon-item">
                            <i class="far fa-envelope"></i>
                            <p>Mail</p>
                        </div>
                    </div>
                    <div class="product-content-right-product-QR">
                        <img src="./giaodien/img/imgqr.png" alt="">
                    </div>
                    <div class="product-content-right-bottom">
                        <div class="product-content-right-bottom-top">
                            &#8744;
                        </div>
                        <div class="product-content-right-bottom-content-big">
                            <div class="product-content-right-bottom-content-title row">
                                <div class="product-content-right-bottom-content-title-item-gioithieu">
                                    <p>GIỚI THIỆU SẢN PHẨM</p>
                                </div>

                            </div>
                            <div class="product-content-right-bottom-content">
                                <br class="product-content-right-bottom-content-gioithieu">
                                <br>

                                <p>
                                    <?php echo $row_desc['product_details_desc'] ?>
                                </p>



                                </p>
                            </div>





                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>

    <!-- product-related -->

    <section class="product-related">
        <div class="product-related-title">
            <p>SẢN PHẨM LIÊN QUAN</p>
        </div>

        <div class="row product-content ">
            <?php $sql_product_recommended = "SELECT * FROM tbl_product_details WHERE product_details_id !='$product_details_id'
                         AND cartegory_id ='$cartegory_id' AND brand_id = '$brand_id' AND product_id = '$product_id' LIMIT 5";
            $result_product_recommended = mysqli_query($conn, $sql_product_recommended); ?>
            <?php while ($row_product_recommended = mysqli_fetch_assoc($result_product_recommended)) {
                     echo '<div class="product-related-item">' ?>
                          <a href="xem_chitiet_sp.php?product_details_id=<?php echo $row_product_recommended['product_details_id'] ?>">
                             <img width="100%" height="auto"
                                src="admin/uploads/<?php echo $row_product_recommended['product_details_img'] ?>" alt="">
                                <?php echo $row_product_recommended['product_details_name'] ?><br>
                                <?php echo $row_product_recommended['product_details_price']; ?>
                          </a>
                    <?php  echo ' </div>';

            } ?>


        </div>

    </section>

    <!----------------------------- footer---------------- - -->
    <?php include "footer.php" ?>
</body>


</html>