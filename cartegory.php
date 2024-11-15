<?php 
include "admin/connect.php"; 
 $sql_cartegory = "SELECT * FROM tbl_cartegory ";
 $result_cartegory = mysqli_query($conn,$sql_cartegory);

$sql_brand = "SELECT * FROM tbl_brand ";
       
 $result_brand = mysqli_query($conn,$sql_brand);


?>
 
 
 
 <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="/giaodien/font/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Ivy Sản phẩm</title>
    </head>

    <body>
        <div class="container">
             <header>
            <div class="logo">
                <img src="./giaodien/img/logo.png" alt="">
            </div>
            <div class="menu">
                
                       <?php        
                        while ($row = mysqli_fetch_array($result_cartegory)) {
                            
                        ?>      
                           <li><a href=""><?php echo $row['cartegory_name'] ?></a>

                             <?php        
                        while ($row = mysqli_fetch_array($result_brand)) {
                            ?>   
                                     
                          <ul class="sub-menu">
                            <li><a href=""><?php echo $row['brand_name'] ?></a>
                           </ul> 
                            <?php }  ?>








                             <?php }  ?>


          

                </li>
               
            </div>
            <div class="other">
                <li><input placeholder="Tìm kiếm" type="text"><i class="fas fa-search"></i></li>
                <li><a href="" class="fas fa-paw"></a></li>
                <li><a href="" class="fas fa-user"></a></li>
                <li><a href="" class="fas fa-shopping-bag"></a></li>
            </div>

        </header>
        <!-- -----------------------Cartegory-------------- -->
        <section class="cartegory">
            <div class="container">
                <div class="cartegory-top row">
                    <p>Trang chủ</p><span>&#10230;</span>
                    <p>Nữ</p><span>&#10230;</span>
                    <p>Hàng nữ mới về</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="cartegory-left">
                        <ul>
                            <li class="cartegory-left-li"><a href="#">NỮ</a>
                                <ul>
                                    <li><a href="">HÀNG NỮ MỚI VỀ</a></li>
                                    <li><a href="">BEYOND TREND</a></li>
                                    <li><a href="">JEANS FOR BOY</a></li>
                                    <li><a href="">QUẦN JEANS NỮ</a></li>


                                </ul>

                            </li>
                            <li class="cartegory-left-li"><a href="#">NAM</a>
                                <ul>
                                    <li><a href="">HÀNG NỮ MỚI VỀ</a></li>
                                    <li><a href="">BEYOND TREND</a></li>
                                    <li><a href="">JEANS FOR BOY</a></li>
                                    <li><a href="">QUẦN JEANS NỮ</a></li>


                                </ul>
                            </li>
                            <li class="cartegory-left-li"><a href="#">TRẺ EM</a>
                                <ul>
                                    <li><a href="">HÀNG NAM MỚI VỀ</a></li>
                                    <li><a href="">ÁO THUN</a></li>
                                    <li><a href="">ÁO POLO</a></li>
                                    <li><a href="">QUẦN TÂY</a></li>
                                    <li><a href="">QUẦN KAKI</a></li>
                            
                            
                                </ul>
                            </li>
                            <li class="cartegory-left-li"><a href="#">BỘ SƯU TẬP </a>
                                <ul>
                            
                            
                            
                                   
                                    <li><a href="">FEELIN'S CLASSY</a></li>
                                    <li><a href="">CHAU GIA AO DAI</a></li>
                                    <li><a href="">MERINO WOOL</a></li>
                                    <li><a href=""> BLOOMTIME</a></li>
                                    <li><a href=""> DISCOVER CHARMING</a></li>
                            
                            
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="cartegory-right row">
                        <div class="cartegory-right-top-item">
                            <p>HÀNG NỮ MỚI VỀ</p>
                        </div>
                         <div class="cartegory-right-top-item">
                            <button><span>Bộ lọc</span><i class="fas fa-sort-down"></i></button>
                        </div>
                         <div class="cartegory-right-top-item">
                              <select name="" id="">
                                   <option value="">Sắp xếp</option>
                                   <option value="">Giá cao đến thấp</option>
                                   <option value="">Giá thấp đến cao</option>
                              </select>
                        </div>
                     
                           <div class="cartegory-right-content row">
                                 <div class="cartegory-right-item">
                                       <a href="">
                                          <img src="./giaodien/img/sp1.jpg" alt="">
                                          <h1 class="title-product">Bella Dress - Đầm Organza Eo Cách Điệu</h1>
                                       </a>
                                       <p class="price-item">2.690.000 <sup>đ</sup></p>
                                    
                                 </div>
                                      <div class="cartegory-right-item">
                                       <a href="">
                                           <img src="./giaodien/img/sp1.jpg" alt="">
                                          <h1 class="title-product">Bella Dress - Đầm Organza Eo Cách Điệu</h1>
                                       </a>
                                       <p class="price-item">2.690.000 <sup>đ</sup></p>
                                    
                                 </div>
                                       <div class="cartegory-right-item">
                                       <a href="">
                                           <img src="./giaodien/img/sp1.jpg" alt="">
                                          <h1 class="title-product">Bella Dress - Đầm Organza Eo Cách Điệu</h1>
                                       </a>
                                       <p class="price-item">2.690.000 <sup>đ</sup></p>
                                    
                                 </div>
                                       <div class="cartegory-right-item">
                                       <a href="">
                                            <img src="./giaodien/img/sp1.jpg" alt="">
                                          <h1 class="title-product">Bella Dress - Đầm Organza Eo Cách Điệu</h1>
                                       </a>
                                       <p class="price-item">2.690.000 <sup>đ</sup></p>
                                    
                                 </div>
                                       <div class="cartegory-right-item">
                                       <a href="">
                                          <img src="./giaodien/img/sp1.jpg" alt="">
                                          <h1 class="title-product">Bella Dress - Đầm Organza Eo Cách Điệu</h1>
                                       </a>
                                       <p class="price-item">2.690.000 <sup>đ</sup></p>
                                    
                                 </div>
                                       <div class="cartegory-right-item">
                                       <a href="">
                                           <img src="./giaodien/img/sp1.jpg" alt="">
                                          <h1 class="title-product">Bella Dress - Đầm Organza Eo Cách Điệu</h1>
                                       </a>
                                       <p class="price-item">2.690.000 <sup>đ</sup></p>
                                    
                                 </div>
                                       <div class="cartegory-right-item">
                                       <a href="">
                                            <img src="./giaodien/img/sp1.jpg" alt="">
                                          <h1 class="title-product">Bella Dress - Đầm Organza Eo Cách Điệu</h1>
                                       </a>
                                       <p class="price-item">2.690.000 <sup>đ</sup></p>
                                    
                                 </div>
                                       <div class="cartegory-right-item">
                                       <a href="">
                                          <img src="./giaodien/img/sp1.jpg" alt="">
                                          <h1 class="title-product">Bella Dress - Đầm Organza Eo Cách Điệu</h1>
                                       </a>
                                       <p class="price-item">2.690.000 <sup>đ</sup></p>
                                    
                                 </div>
                           </div>
                              <div class="cartegory-right-bottom row">
                                     <div class="cartegory-right-bottom-items">
                                          <p>Hiển thị 2 <span>|</span> 4 sản phẩm</p>
                                     </div>
                                      <div class="cartegory-right-bottom-items">
                                           <p><span>&#171;</span>1 2 3 4 5 <span>&#187;</span> Trang cuối</p>
                                     </div>
                                     
                              </div>   
                    </div>
                </div>
            </div>
          

        </section>

        </div>
        <!-- footer -->

        <section class="app-container">
            <p>Tải ứng dụng IVY moda</p>
            <div class="app-google">
                <a href=""><img src="./giaodien/img/googleplay.png" alt=""></a>
                <a href=""><img src="./giaodien/img/appstore.png" alt=""></a>

            </div>
            <p>Nhận bản tin IVY moda</p>
            <input type="text" placeholder="Nhập email của bạn...">

        </section>

        <!-- footer -->
        <footer>
            <div class="footer-top">
                <li><a href=""><img src="./giaodien/img/img-congthuong.png" alt=""></a></li>
                <li><a href="">Liên hệ</a></li>
                <li><a href="">Tuyển dụng</a></li>
                <li><a href="">Giới thiệu</a></li>
                <li>
                    <a href="" class="fab fa-facebook"></a>
                    <a href="" class="fab fa-twitter"></a>
                    <a href="" class="fab fa-youtube"></a>
                </li>


            </div>
            <div class="footer-center">
                <p>Công ty Cổ phần Dự Kim với số đăng ký kinh doanh :0105777650 <br>
                    Địa chỉ đăng ký :Tổ dân phố Tháp , P.Đại Mỗ , Q.Nam Tử Liêm , TP.Hà Nội , Việt nam -0243 205 2222
                    <br>
                    Đặt hàng online : <b>02445 662 3434.</b>
                </p>
            </div>
            <div class="footer-bottom">
                @Ivymoda All rights reserved
            </div>
        </footer>


  <script src="js.js"></script>
    </body>

    </html>