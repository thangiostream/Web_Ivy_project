<?php
include "connect.php";
include "header.php";
include "slider.php";


$sql = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
$result = mysqli_query($conn, $sql);

$sql_product_type = "SELECT tbl_brand.*,tbl_cartegory.cartegory_name FROM tbl_brand
        INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY  tbl_brand.cartegory_id DESC";
$result_product_type = mysqli_query($conn, $sql_product_type);
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $product_name = $_POST["product_name"];
    $cartegory_id = $_POST["cartegory_id"];
    $brand_id = $_POST["brand_id"];

    $sql = "INSERT INTO tbl_product(
                brand_id ,
                cartegory_id ,
               product_name 
                )
                VALUES ( '$brand_id ','$cartegory_id ', '$product_name' ) ";

    $result = mysqli_query($conn, $sql);
    header("location:product_list.php");

}



?>
<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1>Thêm loại sản phẩm</h1>
        <form action="" method="Post" enctype="multipart/form-data">


            <label for="">Chọn danh mục <span style="color: red;">*</span></label>
            <select name="cartegory_id" id="cartegory_id">
                <option value="">--Chọn </option>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <option value="<?php echo $row['cartegory_id'] ?>">
                        <?php echo $row['cartegory_name'] ?>
                    </option>

                <?php } ?>
            </select>

            <label for="">Chọn nhóm sản phẩm <span style="color: red;">*</span></label>
            <select name="brand_id" id="brand_id">
                <option value="#">--Chọn </option>
                <?php
                while ($row = mysqli_fetch_array($result_product_type)) {
                    ?>
                    <option value="<?php echo $row['brand_id'] ?>">
                        <?php echo $row['brand_name'] ?>
                    </option>

                <?php } ?>

            </select>
            <label for="">Nhập tên loại sản phẩm <span style="color: red;">*</span></label>
            <input name="product_name" type="text" required>




            <button type="submit">Thêm </button>

        </form>
        <?php $message ?? '' ?>
    </div>
</div>
</section>



<script>

</script>
<script>
    $(document).ready(function () {
        $('#cartegory_id').change(function () {
            var x = $(this).val()
            $.get("product_add_ajax.php", { cartegory_id: x }, function (data) {
                $("#brand_id").html(data);
            });
        })
    })
</script>