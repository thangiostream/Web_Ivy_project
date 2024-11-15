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
    
    <!-- ------------------delivery ------------------- -->
    <section class="delivery">
        <div class="container">
            <div class="delivery-top-wrap ">
                <div class="delivery-top">
                    <div class="delivery-top-delivery delivery-top-item">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="delivery-top-address delivery-top-item">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="delivery-top-payment delivery-top-item">
                        <i class="fas fa-money-check-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="delivery-content row">
                <div class="delivery-content-left">
                    <p>Vui lòng chọn địa chỉ giao hàng</p>
                    <div class="delivery-content-left-dangnhap row">
                        <i class="fas fa-sign-in-alt"></i>
                        <p>Đăng nhập(Nếu bạn đã có tài khoản của IVY</p>
                    </div>
                    <div class="delivery-content-left-khachle row">
                        <input checked type="radio" name="loaikhach">
                        <p><span style="font-weight:bold">Khách lẻ</span>(Nếu bạn không muốn lưu lại thông tin)</p>
                    </div>
                    <div class="delivery-content-left-dangky row">
                        <input type="radio" name="loaikhach">
                        <p><span style="font-weight:bold">Đăng ký</span>(Tạo mới tài khoản với thông tin bên dưới)</p>
                    </div>
                    <div class="delivery-content-left-input-top row">
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Họ tên <span style="color:red;">*</span></label>
                            <input type="text">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Điện thoại <span style="color:red;">*</span></label>
                            <input type="text">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Tỉnh/Thành phố <span style="color:red;">*</span></label>
                            <input type="text">
                        </div>
                        <div class="delivery-content-left-input-top-item">
                            <label for="">Quận/Huyện <span style="color:red;">*</span></label>
                            <input type="text">
                        </div>


                    </div>
                    <div class="delivery-content-left-input-bottom">
                        <label for="">Địa chỉ <span style="color:red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-button row">
                              <a style="color:#DAA520;" href=""><< Quay lại giỏ hàng</a>
                            <a href="payment.php"> <button><p>THANH TOÁN VÀ GIAO HÀNG</p></button></a>
                    </div>


                </div>

                <div class="delivery-content-right">
                      <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Giảm giá</th>
                            <th>Số lượng </th>
                            <th>Thành tiền</th>
                        </tr>
                        <tr>
                              <td>Áo polo kẻ ngang MS 57E2940</td>
                              <td> - 30%</td>
                              <td>1</td>
                              <td><p>590.000 <sup>đ</sup></p></td>
                        </tr>
                         <tr>
                              <td>Áo Nam kẻ ngang MS 57E2940</td>
                              <td> - 20%</td>
                              <td>1</td>
                              <td><p>690.000 <sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tổng </td>
                            <td style="font-weight: bold;" ><p>690.000 <sup>đ</sup></p></td>

                        </tr>
                         <tr>
                            <td style="font-weight: bold;" colspan="3">Thuế VAT</td>
                           
                            <td style="font-weight: bold;" ><p>69.000 <sup>đ</sup></p></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tổng tiền hàng</td>
                           
                            <td style="font-weight: bold;" ><p>759.000 <sup>đ</sup></p></td>
                        </tr>
                        
                        
                      </table>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
   <?php include "footer.php" ?>
</body>


</html>