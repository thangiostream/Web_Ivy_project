<?php  
   include"connect.php";
   include"header.php";
   include"slider.php";
   $cartegory_id = $_GET['cartegory_id'];
    
   $sql = "SELECT * FROM tbl_cartegory WHERE cartegory_id ='$cartegory_id' ";
   $result = mysqli_query($conn , $sql);
   $row = mysqli_fetch_array($result);
   
   if(isset($_POST['btn-edit'])) {
      $cartegory_name = $_POST['cartegory_name'];
       $sql = "UPDATE tbl_cartegory SET cartegory_name='$cartegory_name' 
               WHERE cartegory_id='$cartegory_id'";
               mysqli_query($conn,$sql);
               header("location:cartegory_list.php");
   }

    
?>


   <div class="admin-content-right">
                   <div class="admin-content-right-cartegory_add">
                        <h1>Sửa danh mục</h1>
                        <form action="" method="POST">
                             <input required name="cartegory_name" type="text" placeholder="Nhập tên danh mục"
                                      value = "<?php echo $row['cartegory_name'] ?>">
                             <button name="btn-edit" type="submit">Sửa </button>

                        </form>
                   </div>
            </div>
    </section>
</body>
</html>