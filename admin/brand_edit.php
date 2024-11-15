<?php
include "connect.php";
include "header.php";
include "slider.php";

$brand_id= $_GET['brand_id'];
$sql_cartegory = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
$result_cartegory = mysqli_query($conn, $sql_cartegory);


$sql_brand = "SELECT * FROM tbl_brand WHERE brand_id = '$brand_id' ";    
$result_brand = mysqli_query($conn, $sql_brand);
$row_brand = mysqli_fetch_array($result_brand);
?>
<style>
    select {
        height: 30px;
        width: 200px;
    }
</style>


<?php

if (isset($_POST['btn-insert'])) {
    
    $brand_name = $_POST['brand_name'];
    $cartegory_id = $_POST['cartegory_id'];
    $sql = "UPDATE  tbl_brand SET  brand_name='$brand_name' , cartegory_id = '$cartegory_id' WHERE brand_id='$brand_id'";
    mysqli_query($conn, $sql);
    header("location:brand_list.php");

}

?>
<div class="admin-content-right">
    <div class="admin-content-right-cartegory_add">
        <h1>Thêm danh mục</h1>
        <form action="" method="POST">
            <select name="cartegory_id" id="">
                <option value="#">--Chọn danh mục</option>
                <?php
                while ($row = mysqli_fetch_array($result_cartegory)) {
                    ?>
                    <option <?php if($row_brand['cartegory_id'] == $row['cartegory_id']) {
                           echo "SELECTED"; } ?>
                      value="<?php echo $row['cartegory_id'] ?>">
                        <?php echo $row['cartegory_name'] ?>
                    </option>

                <?php } ?>

            </select> <br>
            <input required name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm"
                    value = "<?php echo $row_brand['brand_name'] ?>">
                     
            <button name="btn-insert" type="submit">Sửa </button>

        </form>
    </div>
</div>
</section>
</body>

</html>
