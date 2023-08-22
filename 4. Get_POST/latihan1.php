<?php

// superglobal
// variabel milik php
// merupakan array asosiatif

// $_GET["nama"] = "Pengantar Akuntansi";
// $_GET["harga"] = "Rp 120.000";

// $_GET dapat diinput dengan input pada url

// data buku
$books = [
    [
        "nama" => "Pengantar Akuntansi",
        "harga" => "Rp 120.000",
        "penulis" => "Sugiarto",
        "penerbit" => "Universitas Terbuka",
        "tahun" => "2023"
    ],
    [
        "nama" => "Pengantar Bisnis",
        "harga" => "Rp 100.000",
        "penulis" => "Dorothea",
        "penerbit" => "Universitas Terbuka",
        "tahun" => "2022"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array Asosiatif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Aplikasi Buku Digital</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                            </ul>
                        </div>
                        <h3> Selamat Datang, <?= $_POST["nama"] ?>!</h3>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row pt-5 pb-3">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <h3>Daftar Buku</h3>
                <div class="list-group">
                    <?php foreach ($books as $book) : ?>
                        <a type="button" href="latihan2.php?nama=<?= $book["nama"] ?>&harga=<?= $book["harga"] ?>&penulis=<?= $book["penulis"] ?>&penerbit=<?= $book["penerbit"] ?>&tahun=<?= $book["tahun"] ?>" class="list-group-item list-group-item-action"><?= $book["nama"] ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
</body>

</html>