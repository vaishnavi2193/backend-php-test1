<?php 
include 'db_conn.php';


$discription=$_POST['des'];
session_start();

$sql="INSERT INTO todos(user_id,description) VALUES('$_SESSION[id]','{$discription}')";

$result=mysqli_query($conn,$sql);

$row =mysqli_fetch_assoc($result);
$_SESSION['i']=$row['id'];

if($result){
    header("Location: home.php");
    exit();
}

?>