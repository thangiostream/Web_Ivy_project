  <?php
  
   include "admin/connect.php" ;
   include "header.php";
   $product_details_id = $_GET['product_details_id']; 
 $sql = "SELECT * FROM tbl_product_details WHERE  product_details_id ='$product_details_id'";
$result = mysqli_query($conn, $sql);


$sql_detele = "DELETE * FROM tbl_product_details WHERE product_details_ "

  ?>
   
   

<!-- ------------------cart ------------------- -->
    <section class="cart">
           <div class="container">
                 <div class="cart-top-wrap ">
                     <div class="cart-top">
                      <div class="cart-top-delivery cart-top-item">
                            <i class="fas fa-shopping-cart"></i>
                      </div>
                      <div class="cart-top-cart cart-top-item">
                            <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <div class="cart-top-cart cart-top-item">
                            <i class="fas fa-money-check-alt"></i>
                      </div>
                    </div>
                 </div>
           </div>
           <div class="container">
                  <div class="cart-content row">
                         <div class="cart-content-left">
                               <table>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Tên sản phẩm </th>
                                        <th>Màu </th>
                                        <th>Size</th>
                                        <th>Số lượng </th>
                                        <th>Thành tiền </th>
                                        <th>Xóa</th>                                                                        
                                    </tr>
                                        <?php while ($row = mysqli_fetch_assoc($result)) {
                                               $row_id = $row;
                                            ?>
                                    <tr>
                                          <td><img width="100%" height="auto" style="border:1px solid #DCDCDC"
                                                  src="admin/uploads/<?php echo $row['product_details_img'] ?>" alt=""></td>
                                          <td><p> <?php echo $row['product_details_name'] ?></p></td>
                                          <td><img src="./giaodien/img/sp1_color.png" alt=""></td>
                                          <td> <p>L</p></td>
                                          <td><input type="number" value="1" min="1"></td>
                                          <td><p>1.949.000 <sup>đ</sup></p></td>
                                          <td><a href="xoa_sanpham.php?product_details_id=<?php echo $row['product_details_id']?>"> <i class="fa-regular fa-trash-can"></i></a></td>
                                    </tr>
                                           <?php } ?>
                                        
                                   
                               </table>
                                <div class="keep_buying"> <a  href="xem_chitiet_sp.php?product_details_id=<?php echo $row_id['product_details_id']?>"><button>Tiếp tục mua hàng</button> </a></div>
                         </div>
                         <div class="cart-content-right">
                               <table>
                                   <tr>
                                       <th colspan="2">TỔNG TIỀN GIỎ HÀNG </th>

                                   </tr>
                                   <tr>
                                         <td>TỔNG SẢN PHẨM</td>
                                         <td>2</td>
                                   </tr>
                                   <tr>
                                       <td>TỔNG TIỀN HÀNG</td>
                                        <td><p>3.894.000 <sup>đ</sup></p></td>
                                   </tr>
                                    <tr>
                                          <td>TẠM TÍNH</td>
                                         <td style="color:black;font-weight: bold;"><p>3.894.000 <sup>đ</sup></p></td>

                                    </tr>

                               </table>
                                 <div class="cart-content-right-text">
                                      <p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 2.000.000đ</p>
                                      <p style="color:red ; font-weight: bold;" >Mua thêm <span style="font-size: 18px; font-weight: bold;">51.000đ </span> để được miễn phí SHIP</p>

                                 </div>
                                 <div class="cart-content-right-button">
                                       <button>TIẾP TỤC MUA SẮM</button>
                                      <a href="delivery.php"><button>THANH TOÁN</button></a>
                                 </div>
                                 <div class="cart-content-right-dangnhap">
                                         <p>TÀI KHOẢN IVY</p> <br>
                                         <P>Hãy <a style="color:red;" href="">Đăng nhập</a> tài khoản của bạn để tích điểm thành viên</P>
                                    
                                 </div>
                         </div>
                  </div>
           </div>
    </section>
  <!-- footer -->
   <?php include "footer.php" ?>
            </body>
            
            
            </html>