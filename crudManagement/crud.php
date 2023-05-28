<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <title>Document</title>
    <style>
        body {
            margin: 10px;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>

</head>

<body>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <div class="d-grid gap-2">
        <a id="tambah" href="form-tambah.php" class="btn btn-primary">Add Product</a>
    </div>

    <table id="myTable" class="display" method="get">
        <?php
        include "../Index/connect.php"; //Memanggil File dari connect
        $slctCustomer = "SELECT * FROM product ORDER BY id ASC"; //Solusi jika banyak data yang ingin ditampilkan yang ingin ditampilkan diweb;
        $query = mysqli_query($conn, $slctCustomer); //mysqli_query untuk menjalankan perintah query kedatabase yang ditampung divariable $query 
        ?>
        <br>

        <thead>
            <tr>
                <th>No</th>
                <th>Name Product</th>
                <th>Price Product</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (mysqli_num_rows($query) > 0) { ?>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data["name_product"]; ?></td>
                        <td><?php echo $data["price_product"]; ?></td>
                        <td>
                            <div class="btn btn-success"><a href="form-edit.php?id=<?php echo $data["name_product"]; ?>">Edit</a></div>
                            <div class="btn btn-danger"><a id="delete" href="proses-delete.php?id=<?php echo $data["name_product"]; ?>">Delete</a></div>
                        </td>
                        
                    <?php $no++;
                } ?>
                <?php } ?>
                    </tr>
        </tbody>
    </table>


</body>

</html>