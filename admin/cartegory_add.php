<?php  
   include"connect.php";
   include"header.php";
   include"slider.php";
  
?>

<?php 
  
   if(isset($_POST['btn-insert']))  {
      $cartegory_name = $_POST['cartegory_name'];
      $sql = "INSERT INTO tbl_cartegory(cartegory_name) VALUES ('$cartegory_name')";
      $result = mysqli_query($conn ,$sql);
       header("location:cartegory_list.php");
   }
 
?>
   <div class="admin-content-right">
                   <div class="admin-content-right-cartegory_add">
                        <h1>Thêm danh mục</h1>
                        <form action="" method="POST">
                             <input required name="cartegory_name" type="text" placeholder="Nhập tên danh mục">
                             <button name="btn-insert"  type="submit">Thêm </button>

                        </form>
                   </div>
            </div>
    </section>
</body>
</html>