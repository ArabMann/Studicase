<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../Css/index.css">
    <title>Index</title>
</head>

<body>
    <?php
    include "connect.php"; //Memanggil File dari connectMysql
    $slctCustomer = "SELECT * FROM product ORDER BY id ASC"; //Solusi jika banyak data yang ingin ditampilkan yang ingin ditampilkan diweb;
    $query = mysqli_query($conn, $slctCustomer); //mysqli_query untuk menjalankan perintah query kedatabase yang ditampung divariable $query 
    ?>
    <!-- Membuat Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AdriantaStore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../crudManagement/crud.php">Add</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Shoes</a></li>
                            <li><a class="dropdown-item" href="#">T-Shirt</a></li>

                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Membuat Header -->

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Header.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="Header2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="Header3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Membuat Content dan menampilkan dengan looping -->
    <div class="container">
        <?php if (mysqli_num_rows($query) > 0) { ?>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="box-content">
                    <div class="card" style="width: 215px;">
                        <img src="Image/<?php echo $data["image_product"] ?>" height="150" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data["name_product"]; ?></h5>
                            <p class="card-text"><?php echo "Rp. " . $data["price_product"]; ?></p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go Buy</a>
                        </div>
                    </div>
                </div>

            <?php $no++;
            } ?>
        <?php } ?>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h6>DAPATKAN KOLEKSI SEPATU OLAHRAGA, SNEAKER & PERLENGKAPAN OLAHRAGA TERBARU DI ADIDAS INDONESIA</h6>
                Selamat datang di situs resmi adidas Indonesia di mana Anda dapat membeli perlengkapan dan aksesori olahraga berkualitas. Toko Online Resmi adidas Indonesia menyediakan produk terbaik mulai dari sepatu olahraga, dan sneaker, hingga aksesori olahraga lainnya untuk semua kebutuhan Anda. Tersedia berbagai macam sepatu yang cocok untuk setiap momen dan nyaman dipakai saat berolahraga. Di Toko Online Resmi adidas Indonesia, tersedia berbagai macam produk top seperti Sepatu Sepak Bola Ace & X, adidas Originals, Sepatu Training, Atasan untuk Running, Sport Bra Wanita, Aksesori Olahraga dan masih banyak lagi. Toko Online Resmi adidas terus memperbarui daftar produknya sehingga Anda dapat membeli koleksi sepatu, pakaian, aksesori olahraga terbaru kami. Temukan sepatu favorit Anda mulai dari sepatu untuk pria, wanita, dan anak-anak hanya di toko online resmi kami.
            </div>

            <div class="col">
                <h6>ADIDAS INDONESIA MENYEDIAKAN SEMUA KEBUTUHAN OLAHRAGA ANDA</h6>
                Mencari perlengkapan olahraga yang dapat meningkatkan performa Anda dan lebih nyaman saat digunakan berolahraga? Hanya ada satu tempat yang dapat menyediakan semua kebutuhan olahraga Anda mulai dari sepatu hingga aksesori, yaitu Toko Online Resmi adidas Indonesia. adidas Indonesia menyediakan perlengkapan olahraga mulai dari sepatu training, celana running, hingga aksesori olahraga untuk pria, wanita, dan anak-anak. Toko Online Resmi adidas Indonesia menawarkan banyak deal untuk Anda yang berbelanja secara online; mulai dari gratis ongkos kirim jika Anda berbelanja minimal Rp 900.000, easy return, fast response, dan masih banyak lagi. Beli segera sepatu untuk segala jenis olahraga hanya di adidas Indonesia.
            </div>
        </div>
    </div>

    <!-- Membuat Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>Produk</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Produk 1</a></li>
                        <li><a href="#">Produk 2</a></li>
                        <li><a href="#">Produk 3</a></li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <h4>Email</h4>
                    <p>ahay@example.com</p>
                </div>
                <div class="col-md-4">
                    <h4>Instagram</h4>
                    <a href="https://www.instagram.com/tirtaadriant/" target="_blank"> tirtaadriant</i></a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>