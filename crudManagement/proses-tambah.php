<?php

if(isset($_POST['submit'])){
    $nama= $_POST['name'];
    $namaFile = $_FILES['file']['name'];
    $source = $_FILES['file']['tmp_name'];
    $folder = '../Index/Image/';
    move_uploaded_file($source, $folder.$namaFile);
}

$nameProduct= $_POST['name'];
$priceProduct= $_POST['price'];


include("../Index/connect.php");

$product= "INSERT INTO `product` (`image_product`, `name_product`, `price_product`) VALUES ('$namaFile','$nameProduct','$priceProduct')";
$result= mysqli_query($conn, $product);

header("Location:../Index/index.php");
?>