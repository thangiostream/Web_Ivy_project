<?php
include "connect.php";
include "header.php";
include "slider.php";
$sql = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
$result = mysqli_query($conn, $sql);
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
    $sql = "INSERT INTO tbl_brand(cartegory_id,brand_name) VALUES ('$cartegory_id','$brand_name')";
    $result = mysqli_query($conn, $sql);
    header("Location:brand_list.php");

}

?>
<div class="admin-content-right">
    <div class="admin-content-right-cartegory_add">
        <h1>Thêm danh mục</h1>
        <form action="" method="POST">
            <select name="cartegory_id" id="">
                <option value="#">--Chọn danh mục</option>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <option value="<?php echo $row['cartegory_id'] ?>">
                        <?php echo $row['cartegory_name'] ?>
                    </option>

                <?php } ?>

            </select> <br>
            <input required name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm">
            <button name="btn-insert" type="submit">Thêm </button>

        </form>
    </div>
</div>
</section>
</body>

</html>