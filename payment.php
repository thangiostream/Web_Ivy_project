  <?php
  
   include "admin/connect.php" ;
   include "header.php"; 
   
   ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/giaodien/font/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Ivy Giao hàng</title>
</head>

<body>
    
    <!-- ------------------Payment  ------------------- -->
    <section class="payment">
        <div class="container">
            <div class="payment-top-wrap ">
                <div class="payment-top">
                    <div class="payment-top-cart payment-top-item">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="payment-top-cart payment-top-item">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="payment-top-payment payment-top-item">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="payment-content row">
                <div class="payment-content-left">
                    <div class="payment-content-left-method-delivery">
                        <p style="font-weight: bold;">Phương thức giao hàng</p>
                        <div class="payment-content-left-method-delivery-item">
                            <input type="radio">
                            <label for="">Giao hàng chuyển phát nhanh</label>
                        </div>

                    </div>
                    <div class="payment-content-left-method-payment">
                        <p style="font-weight: bold;">Phương thức thanh toán</p>
                        <p>Mọi giao dịch đều được bảo mật và mã hóa . Thông tin thẻ tín dụng sẽ không bao giờ được lưu
                            lại.</p> <br>
                        <div class="payment-content-left-method-payment-item row">
                            <div class="payment-content-left-method-payment-item-label">
                                <input name="thanhtoan" type="radio">
                                <label for="">Thanh toán bằng thẻ tín dụng(OnePay)</label>
                            </div>
                            <div class="payment-content-left-method-payment-item-img">
                                <img src="./giaodien/img/visa.png" alt="">
                            </div>
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input checked name="thanhtoan" type="radio">
                            <label for="">Thanh toán bằng thẻ ATM</label>
                            <p class="txt_hotro" >Hỗ trợ thanh toán online hơn 38 ngân hàng phổ biến ở Việt Nam</p>
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="thanhtoan" type="radio">
                            <label for="">Thanh toán bằng Momo</label>
                        </div>
                        <div class="payment-content-left-method-payment-item">
                            <input name="thanhtoan" type="radio">
                            <label for="">Thanh toán khi giao hàng</label>
                        </div>
                    </div>

                </div>

                <div class="payment-content-right">
                    <div class="payment-content-right-button">
                        <input type="text" placeholder="Mã giảm giá/Quà tặng">
                        <button><i class="fas fa-check"></i></button>
                    </div>
                    <div class="payment-content-right-button">
                        <input type="text" placeholder="Mã cộng tác viên">
                        <button><i class="fas fa-check"></i></button>
                    </div>
                    <div class="payment-content-right-manv">
                        <select name="" id="">
                            <option value="">Chọn mã nhân viên thân thiết</option>
                            <option value="">K345</option>
                            <option value="">A345</option>
                            <option value="">FC38</option>
                            <option value="">9B12</option>
                            <option value="">F387</option>
                        </select>
                    </div>
                    <div class="payment-content-right-payment">
                        <button>TIẾP TỤC THANH TOÁN</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- footer -->
 
       <?php include "footer.php" ?>
</body>


</html>