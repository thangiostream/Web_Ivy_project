<?php
include "connect.php";
include "header.php";
include "slider.php";
$sql = "SELECT tbl_product.*,tbl_cartegory.cartegory_name , tbl_brand.brand_name FROM (tbl_product
        INNER JOIN tbl_cartegory ON tbl_product.cartegory_id = tbl_cartegory.cartegory_id )
        INNER JOIN tbl_brand ON tbl_brand.brand_id = tbl_product.brand_id 
        ORDER BY  tbl_product.product_id DESC";
$result = mysqli_query($conn, $sql);

?>




<div class="admin-content-right">
    <div class="admin-content-right-cartegory_list">
        <h1>Danh sách sản phẩm</h1>
        <table>
            <tr>
                <th>Stt</th>
                <th>ID</th>
                <th>Danh mục sản phẩm</th>
                <th>Nhóm sản phẩm</th>
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
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <?php echo $row['product_id'] ?>
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



                    <td><span><a href="product_edit.php?product_id=<?php echo $row[0] ?>">Sửa</a></span></td>
                    <td><span><a href="product_delete.php?product_id=<?php echo $row[0] ?>">Xóa</a></span>

                </tr>
                <?php

            }
            ?>
        </table>

    </div>
</div>
