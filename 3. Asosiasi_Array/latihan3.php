<?php
// Tugas dari Pak Dika
// Cari kasus lain selain kasus mahasiswa
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
        "penerbit" => "Universitas Tebruka",
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
    <br>
    <h3 class="text-center">Daftar Buku Perpustakaan Wijaya House Tahun 2023</h3>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama Buku</th>
                <th>Harga</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>


            <?php foreach ($books as $book) : ?>

                <tr>
                    <td><?= $book["nama"] ?></td>
                    <td><?= $book["harga"] ?></td>
                    <td><?= $book["penulis"] ?></td>
                    <td><?= $book["penerbit"] ?></td>
                    <td><?= $book["tahun"] ?></td>
                </tr>

            <?php endforeach; ?>


        </tbody>
    </table>
</body>

</html>