<?php
  include "connect.php";
  $cartegory_id = $_GET['cartegory_id'];
  
$sql = "SELECT * FROM tbl_brand WHERE cartegory_id ='$cartegory_id' ";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    ?>
    <option value="<?php echo $row['brand_id'] ?>">
        <?php echo $row['brand_name'] ?>
    </option>

<?php } ?>


?>