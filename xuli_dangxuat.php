<?php 
   session_start();
   session_destroy();
$user_id = isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : null;
$user_email = isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] : null;
setcookie('user_id', '', time() - (60*15));
setcookie('user_email', '', time() - (60*15));
 header('location:index.php');

?>