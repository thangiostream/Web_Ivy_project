<?php
include"connect.php"; 
include "header.php";
include "slider.php";
$sql = "SELECT tbl_brand.*,tbl_cartegory.cartegory_name FROM tbl_brand
        INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY  tbl_brand.cartegory_id DESC";
 $result = mysqli_query($conn,$sql);
?>


<div class="admin-content-right">
    <div class="admin-content-right-cartegory_list">
        <h1>Danh sách loại sản phẩm</h1>
        <table>
            <tr>
                <th>Stt</th>
                <th>ID</th>
                 <th>Danh mục </th>
                <th>Loại sản phẩm</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
            <?php
             $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                              $i++;

                ?>
                <tr>
                    <td>
                         <?php echo $i ; ?>
                    </td>
                    <td>
                        <?php echo $row['brand_id'] ?>
                    </td>
                    <td>
                        <?php echo $row['cartegory_name'] ?>
                    </td>
                     <td>
                        <?php echo $row['brand_name'] ?>
                    </td>

                    <td><span><a href="brand_edit.php?brand_id=<?php echo $row[0] ?>">Sửa</a></span></td>
                    <td><span><a href="brand_delete.php?brand_id=<?php echo $row[0] ?>">Xóa</a></span>
                    
                </tr>
            <?php

                }
            ?>
        </table>
    </div>
</div>