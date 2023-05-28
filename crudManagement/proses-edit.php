<?php

if(isset($_POST['update'])){
    $nama= $_POST['name'];
    $namaFile = $_FILES['file']['name'];
    $source = $_FILES['file']['tmp_name'];
    $folder = '../Index/Image/';
    move_uploaded_file($source, $folder.$namaFile);
}
$id = $_GET['id'];
$nameProduct= $_POST["name"];
$priceProduct= $_POST["price"];

include "../Index/connect.php";

$customer = "UPDATE `product` SET `name_product`='$nameProduct' , `price_product`= '$priceProduct',`image_product`='$namaFile' WHERE `name_product`= '$id' ";
$result= mysqli_query($conn, $customer);

header("Location:../Index/index.php"); 
?>