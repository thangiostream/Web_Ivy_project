<?php
 include "admin/connect.php";
      $product_details_id= $_GET['product_details_id'];
  
   $sql = "DELETE FROM tbl_product_details  WHERE product_details_id ='$product_details_id'";

       mysqli_query($conn , $sql);
      header("location:cart.php");

?>