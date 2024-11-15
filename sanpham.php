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

$cartegory_name = $_GET['cartegory_name'];
$brand_name = $_GET['brand_name'];


 ?>
<?php

$sql_count = $sql = "SELECT count(*)  as total
         FROM tbl_product_details
        INNER JOIN tbl_cartegory ON tbl_product_details.cartegory_id = tbl_cartegory.cartegory_id 
        INNER JOIN tbl_brand ON tbl_brand.brand_id = tbl_product_details.brand_id
        AND tbl_brand.brand_name LIKE '%$brand_name%'
        AND tbl_cartegory.cartegory_name   LIKE '%$cartegory_name%' ";

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



$sql = "SELECT tbl_product_details.*
         FROM tbl_product_details 
        INNER JOIN tbl_cartegory ON tbl_product_details.cartegory_id = tbl_cartegory.cartegory_id 
        INNER JOIN tbl_brand ON tbl_brand.brand_id = tbl_product_details.brand_id
        AND tbl_brand.brand_name LIKE '%$brand_name%'
        AND tbl_cartegory.cartegory_name   LIKE '%$cartegory_name%'  LIMIT $start, $limit ";

$result = mysqli_query($conn, $sql);

?>
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

                    if ($current_page > 1 && $total_page > 1) {
                        echo '<a  class="pagination-item__link"  href="sanpham.php?cartegory_name=' . ($cartegory_name) . '&brand_name=' . ($brand_name) . '&page=' . ($current_page - 1) . '"> Prev</a> | ';
                    }
                    ?>
                    </li>

                    <?php


                    for ($i = 1; $i <= $total_page; $i++) {

                        if ($i == $current_page) {

                            echo '<span style= "color:red ">' . $i . '</span> | ';
                        } else {

                            echo '<a   class="pagination-item__link" href="sanpham.php?cartegory_name=' . ($cartegory_name) . '&brand_name=' . ($brand_name) . '&page=' . $i . '">' . $i . '</a> | ';

                        }


                    }
                    ?>

                    <?php // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                    if ($current_page < $total_page && $total_page > 1) {
                        echo '<a  class="pagination-item__link"  href="sanpham.php?cartegory_name=' . ($cartegory_name) . '&brand_name=' . ($brand_name) . '&page=' . ($current_page + 1) . '"> Next</a>  ';
                    }
                    ?>
                </div>


            </div>
        </div>

    </div>


</section>
<?php include "footer.php"; ?>