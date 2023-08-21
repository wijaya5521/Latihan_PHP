<?php
// $mahasiswa = [
//     ["Wijaya", "140310190024", "Fisika", "wijaya19001@mail.unpad.ac.id"],
//     ["Diki Permana", "140310190029", "Fisika", "dikipermana@mail.unpad.ac.id"]
// ];

// Membuat array asosiatif
// Pasangan key dan value yg key nya dibuat sendiri
$mahasiswa = [
    [
        "nama" => "Wijaya",
        "nim" => "140310190024",
        "jurusan" => "Fisika",
        "email" => "wijaya19001@mail.unpad.ac.id"
    ],
    [
        "nama" => "Diki Permana",
        "nim" => "140310190029",
        "jurusan" => "Fisika",
        "email" => "dikipermana@mail.unpad.ac.id"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array Asosiatif</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <br>
        </ul>
    <?php endforeach; ?>
</body>

</html>