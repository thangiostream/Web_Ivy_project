<?php
// Initialize the session
session_start();
 
// Bỏ đặt tất cả các biến phiên ban
$_SESSION = array();
 
//Hủy phiên.
session_destroy();
 
// Chuyển hướng đến trang đăng nhập
header("location: login.php");
exit;
?>