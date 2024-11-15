<?php
 include "connect.php";
      $cartegory_id= $_GET['cartegory_id'];
    

       $sql = "DELETE FROM tbl_cartegory WHERE cartegory_id ='$cartegory_id'";
       mysqli_query($conn , $sql);
      header("location:cartegory_list.php");

?>