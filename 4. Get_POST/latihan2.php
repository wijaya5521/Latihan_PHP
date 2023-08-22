<?php
// cek apakah ada $_GET
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["harga"]) ||
    !isset($_GET["penulis"]) ||
    !isset($_GET["penerbit"]) ||
    !isset($_GET["tahun"])
) {
    //redirect
    header("Location: latihan1.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <h3 class="text-center">Daftar Buku Perpustakaan Wijaya</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">

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
                        <tr>
                            <td><?= $_GET["nama"] ?></td>
                            <td><?= $_GET["harga"] ?></td>
                            <td><?= $_GET["penulis"] ?></td>
                            <td><?= $_GET["penerbit"] ?></td>
                            <td><?= $_GET["tahun"] ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="latihan1.php  " class="btn btn-warning pt-2">Kembali ke latihan 1</a>
            </div>
        </div>
    </div>
</body>

</html>