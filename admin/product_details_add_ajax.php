<?php 
   include "connect.php";
  $brand_id= $_GET['brand_id'];
  
$sql = "SELECT * FROM tbl_product WHERE brand_id ='$brand_id' ";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    ?>
    <option value="<?php echo $row['product_id'] ?>">
        <?php echo $row['product_name'] ?>
    </option>

<?php } ?>
