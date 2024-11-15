<?php
include "connect.php";
include "header.php";
include "slider.php";

 $product_details_id = $_GET['product_details_id'];
 $sql1  = "SELECT * FROM tbl_product_details WHERE product_details_id = '$product_details_id '";
$result = mysqli_query($conn , $sql1);

$sql_cartegory = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
$result_cartegory = mysqli_query($conn, $sql_cartegory);

$sql_product_type = "SELECT tbl_brand.brand_name,tbl_cartegory.cartegory_name FROM tbl_brand
        INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY  tbl_brand.cartegory_id DESC";
$result_product_type = mysqli_query($conn, $sql_product_type);

$sql = "SELECT tbl_product.*,tbl_cartegory.cartegory_name , tbl_brand.brand_name FROM (tbl_product
        INNER JOIN tbl_cartegory ON tbl_product.cartegory_id = tbl_cartegory.cartegory_id )
        INNER JOIN tbl_brand ON tbl_brand.brand_id = tbl_product.brand_id 
        ORDER BY  tbl_product.product_id DESC";
 $result = mysqli_query($conn,$sql); 
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $product_details_name = $_POST["product_details_name"];
    $cartegory_id = $_POST["cartegory_id"];
    $brand_id = $_POST["brand_id"];
    $product_id = $_POST["product_id"];
    $product_details_price = $_POST["product_details_price"];
      
 
    $product_details_desc = $_POST["product_details_desc"];

    $product_details_img = $_FILES["product_details_img"]['name'];
 
   

        move_uploaded_file($_FILES["product_details_img"]['tmp_name'], "uploads/" . $_FILES["product_details_img"]['name']);
    // $sql_update = "UPDATE tbl_product_details SET product_details_name = '$product_details_name',
    //               cartegory_id =  '$cartegory_id', brand_id = '$brand_id ' , product_details_price = '$product_details_price' ,
    //             product_details_desc = '$product_details_desc' , product_details_img = '$product_details_img'  
    //             WHERE product_details_id =' $product_details_id'";

 $sql_update = "UPDATE tbl_product_details SET product_details_name = '{$product_details_name}',
  cartegory_id =  '{$cartegory_id}',
   brand_id = {$brand_id},
    product_details_price = '{$product_details_price}',
     product_details_desc = '{$product_details_desc}',
      product_details_img = '{$product_details_img}'
       WHERE product_details_id = '{$product_details_id}'";

    $result_2 = mysqli_query($conn, $sql_update);
    header("location:product_details_list.php");
 }
?>
<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1>Thêm sản phẩm</h1>
        <form action="" method="Post" enctype="multipart/form-data">
           
            <label for="">Chọn danh mục <span style="color: red;">*</span></label>
            <select name="cartegory_id" id="cartegory_id">
                <option value="">--Chọn </option>
                <?php
                while ($row = mysqli_fetch_array($result_cartegory)) {
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
            <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
            <select name="product_id" id="product_id">
                <option value="#">--Chọn </option>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <option value="<?php echo $row['product_id'] ?>">
                        <?php echo $row['product_name'] ?>
                    </option>

                <?php } ?>

            </select>
             <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
            <input name="product_details_name" type="text" required>

            <label for="">Giá sản phẩm<span style="color: red;">*</span></label>
            <input name="product_details_price" type="text">

          
 
            <label for="">Mô tả  sản phẩm<span style="color: red;">*</span></label>
            <textarea name="product_details_desc" id="editor2" cols="30" rows="10"></textarea>

            <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
            
            <input required name="product_details_img" type="file">
           
            </span>

            

            <button type="submit">Thêm </button>

        </form>
          <?php $message ?? '' ?>
    </div>
</div>
</section>
</body>


<script>
         CKEDITOR.replace('editor1' );
            CKEDITOR.replace('editor2' );

</script>
 <script>
    $(document).ready(function() {
        $('#cartegory_id').change(function() {
           var x = $(this).val()
           $.get("product_add_ajax.php" , {cartegory_id:x} , function(data){
                  $("#brand_id").html(data);
           });
        })
        $('#brand_id').change(function() {
           var y = $(this).val()
           $.get("product_details_add_ajax.php" , {brand_id:y} , function(data){
                  $("#product_id").html(data);
           });
        })
 })

 
 </script>

 

</html>
