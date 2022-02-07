<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="php-assignment";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if (!$conn){
    echo "Connection Failed!";
}


?>