<?php
 include "connect.php";
      $brand_id= $_GET['brand_id'];
    

       $sql = "DELETE FROM tbl_brand WHERE brand_id ='$brand_id'";
       mysqli_query($conn , $sql);
      header("location:brand_list.php");

?>