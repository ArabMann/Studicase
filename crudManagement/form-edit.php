<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../Css/formEdit.css">
    <title>Document</title>
</head>

<?php
include "../Index/connect.php";
$_GET['id']; //>id=
$id = $_GET['id'];

$update = "SELECT * FROM product WHERE name_product='$id' ";

$query = mysqli_query($conn, $update);

while ($data = mysqli_fetch_array($query)) {
    $nameProduct = $data["name_product"];
    $priceProduct = $data["price_product"];
    $imageProduct = $data["image_product"];
} ?>

<body>
    <form action="proses-edit.php?id=<?php echo $nameProduct; ?>" method="post" enctype='multipart/form-data'>
        <label>Name:</label>
        <input type="text" id="name" name="name" value="<?php $nameProduct; ?>"><br>

        <label>Price:</label>
        <input type="text" id="price" name="price" value="<?php $priceProduct; ?>"><br>

        <label>Choose File:</label>
        <input type="file" id="file" name="file" accept=".pdf,.doc,.docx,image/*" value="<?php $imageProduct; ?>"><br>

        <input type="submit" name="update" value="Update">
    </form>

</body>

</html>