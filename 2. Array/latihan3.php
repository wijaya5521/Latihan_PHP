<?php

$mahasiswa = [
    ["Wijaya", "140310190024", "Fisika", "wijaya19001@mail.unpad.ac.id"],
    ["Diki Permana", "140310190029", "Fisika", "dikipermana@mail.unpad.ac.id"]
];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
            <br>
        <?php endforeach; ?>
    </ul>
</body>

</html>