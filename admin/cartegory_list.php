<?php
include "connect.php"; 
include "header.php";
include "slider.php";
 $sql = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
 $result = mysqli_query($conn,$sql);
?>


<div class="admin-content-right">
    <div class="admin-content-right-cartegory_list">
        <h1>Danh sách danh mục</h1>
        <table>
            <tr>
                <th>Stt</th>
                <th>ID</th>
                <th>Danh mục</th>
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
                        <?php echo $row[0] ?>
                    </td>
                    <td>
                        <?php echo $row[1] ?>
                    </td>

                    <td><span><a href="cartegory_edit.php?cartegory_id=<?php echo $row[0] ?>">Sửa</a></span></td>
                    <td><span><a href="cartegory_delete.php?cartegory_id=<?php echo $row[0] ?>">Xóa</a></span>
                    
                </tr>
            <?php

                }
            ?>
        </table>
    </div>
</div>