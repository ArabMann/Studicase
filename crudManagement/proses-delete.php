<?php


include ("../Index/connect.php");
$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM product WHERE name_product= '$id' ");
header('Location:../crudManagement/crud.php');

?>