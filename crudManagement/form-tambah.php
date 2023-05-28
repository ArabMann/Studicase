<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../Css/formTambah.css">
    <title>Document</title>
   
</head>

<body>
    <form action="proses-tambah.php" method="post" enctype='multipart/form-data'>
        <label>Name:</label>
        <input type="text" id="name" name="name" ><br>

        <label>Price:</label>
        <input type="text" id="price" name="price"><br>

        <label>Choose File:</label>
        <input type="file" id="file" name="file" accept=".pdf,.doc,.docx,image/*"><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>