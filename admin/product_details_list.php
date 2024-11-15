
<style>
    img {
        display: block;
         width:100px ;
         height:auto;
    }
</style>



<?php

include "connect.php";
include "header.php";
include "slider.php";



$sql = "SELECT tbl_product_details.* ,tbl_cartegory.cartegory_name , tbl_brand.brand_name  , tbl_product.product_name 
         FROM (tbl_product_details 
        INNER JOIN tbl_cartegory ON tbl_product_details.cartegory_id = tbl_cartegory.cartegory_id )
        INNER JOIN tbl_brand ON   tbl_product_details.brand_id  = tbl_brand.brand_id  
        INNER JOIN tbl_product ON   tbl_product_details.product_id  = tbl_product.product_id  
        ORDER BY  tbl_product_details.product_details_id DESC";
$result = mysqli_query($conn, $sql);
 




?>


<div class="admin-content-right">
    <div class="admin-content-right-cartegory_list">
        <h1>Danh sách sản phẩm</h1>
        <table>
            <tr>
                <th  style="width:30px">Stt</th>
                <th  style="width:30px">Id</th>
                <th style="width:40px">Danh mục sản phẩm</th>
                <th style="width:40px" >Nhóm sản phẩm</th>
                <th style="width:40px">Loại sản phẩm</th>
                <th style="width:40px">Sản phẩm</th>
                <th  style="width:20px">Giá </th>
            
                <th style="width:400px">Giới thiệu</th>
              
                <th style="width:100px">Ảnh sản phẩm</th>
                 
                <th style="width:40px">Sửa</th>
                <th  style="width:40px">Xóa</th>
            </tr>
            <?php
             $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                              $i++;

                ?>
                <tr>
                    <td>
                         <?php echo $i ; ?>
                    </td>
                    <td>
                        <?php echo $row['product_details_id'] ?>
                    </td>
                    <td>
                        <?php echo $row['cartegory_name'] ?>
                    </td>
                     <td>
                        <?php echo $row['brand_name'] ?>
                    </td>
                      <td>
                        <?php echo $row['product_name'] ?>
                    </td>
                      <td>
                        <?php echo $row['product_details_name'] ?>
                    </td>
                    <td>
                        <?php echo $row['product_details_price'] ?>
                    </td>
 
                     <td>
                        <?php echo $row['product_details_desc'] ?>
                    </td>
                    
                    <td><img  width="100%" height="auto" src="uploads/<?php echo $row['product_details_img'] ?>" alt=""></td>
                     
                       

                    <td><span><a href="product_details_edit.php?product_details_id=<?php echo $row['product_details_id'] ?>">Sửa</a></span></td>
                    <td><span><a href="product_details_delete.php?product_details_id=<?php echo $row['product_details_id'] ?>">Xóa</a></span>
                    
                </tr>
            <?php

                }
            ?>
        </table>
    </div>
</div>