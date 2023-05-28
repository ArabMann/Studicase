<?php 
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "db_db";
$conn = mysqli_connect($hostName,$userName,$password,$dbName);

if ($conn){
    echo "";
}else {
    echo "Failed";
}
?>