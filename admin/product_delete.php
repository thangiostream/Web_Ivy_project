<?php
 include "connect.php";
      $product_id= $_GET['product_id'];
    

       $sql = "DELETE FROM tbl_product WHERE product_id ='$product_id'";
       mysqli_query($conn , $sql);
      header("location:product_list.php");

?>