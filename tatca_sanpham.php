<?php

    session_start();
   
    //nếu sesison không tồn tại
    if(!isset($_SESSION['user_name']) ) {
         header('location:index.php');
    }
    
?>

<?php
include "admin/connect.php";

include "header.php";

$sql_count = "SELECT COUNT(*) as total FROM tbl_product_details ";
$result_count = mysqli_query($conn, $sql_count);
$row = mysqli_fetch_assoc($result_count);
$total_records = $row['total'];

// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 10;

// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
// tổng số trang
$total_page = ceil($total_records / $limit);

// Giới hạn current_page trong khoảng 1 đến total_page
if ($current_page > $total_page) {
    $current_page = $total_page;
} else if ($current_page < 1) {
    $current_page = 1;
}

// Tìm Start
$start = ($current_page - 1) * $limit;

// BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
// Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
$result = mysqli_query($conn, "SELECT * FROM tbl_product_details LIMIT $start, $limit");

?>
<!-- -----------------------Cartegory-------------- -->
<section class="cartegory">

    <div class="">


        <div class="cartegory-right row">
            <div class="cartegory-right-top-item">
              
            </div>
            <div class="cartegory-right-top-item">
                <button><span>Bộ lọc</span><i class="fas fa-sort-down"></i></button>
            </div>
            <div class="cartegory-right-top-item ">
                <select name="" id="">
                    <option value="">Sắp xếp</option>
                    <option value="">Giá cao đến thấp</option>
                    <option value="">Giá thấp đến cao</option>
                </select>
            </div>

            <div class="cartegory-right-content ">
                <div class="cartegory-right-content row">
                    <?php while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="cartegory-right-item">' ?>

                        <a href="xem_chitiet_sp.php?product_details_id=<?php echo $row['product_details_id'] ?>">

                                                  
                        <img width="100%" height="auto" src="admin/uploads/<?php echo $row['product_details_img'] ?>"
                            alt="">
                        <?php echo ' <br>' ?>
                        <?php echo $row['product_details_name'] ?>
                        <?php echo ' <br>' ?>
                        <?php echo $row['product_details_price'] ?>
                        </a>

                        <?php echo '</div>' ?>
                    <?php } ?>
                </div>

            </div>
            <div class="cartegory-right-bottom row">
                <div class="cartegory-right-bottom-items">
                     
                               <?php
                    // PHẦN HIỂN THỊ PHÂN TRANG
                    // BƯỚC 7: HIỂN THỊ PHÂN TRANG
                    
                    // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                    
                             if ($current_page > 1 && $total_page > 1) {
                                 echo '<a  class="pagination-item__link"  href="tatca_sanpham.php?page=' . ($current_page - 1) . '"> Prev</a> | ';
                                   }
                                ?>
                           </li>
                   
                    <?php
                    // Lặp khoảng giữa
                     
                    for ($i = 1; $i <= $total_page; $i++) {
                        // Nếu là trang hiện tại thì hiển thị thẻ span
                        // ngược lại hiển thị thẻ a
                        if ($i == $current_page) {
                         
                            echo '<span style= "color:red ">' . $i . '</span> | ';
                        } else {
                           
                            echo '<a   class="pagination-item__link" href="tatca_sanpham.php?page=' . $i . '">' . $i . '</a> | ';
                         
                        }
                        
                       
                    }
                     ?>
                   
                    <?php // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                    if ($current_page < $total_page && $total_page > 1) {
                        echo '<a  class="pagination-item__link"  href="tatca_sanpham.php?page=' . ($current_page + 1) . '"> Next</a>  ';
                    }
                    ?>
                   
                                                   
                </div>
              

            </div>
        </div>

    </div>


</section>


<!-- footer -->


<!-- footer -->


<?php include "footer.php"; ?>