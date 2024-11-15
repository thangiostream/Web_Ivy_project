<?php 
    
    $server = "localhost";
    $user = "root";
    $password =  "";
    $database = "web_ivydemo" ;

    $conn = new MYSQLi( $server , $user ,$password , $database) or die ('Không kết nối được');
    $conn->select_db($database) or die('Chưa có CSDL');
    $conn->query("SET NAMES 'utf8'");


?>