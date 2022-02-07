<?php 

   include "db_conn.php";
    
    include "home.php";
    $code="DELETE FROM `todos` WHERE `todos`.`id` = $i";
    $core=mysqli_query($conn, $code);

    if($core){
        header("Location: home.php");
        exit();
    }
    
?>