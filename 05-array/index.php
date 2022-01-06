<?php
$mahasiswa = [ 
    ["DikDns", "0421341", "Teknik Informatika", "dikdnssocial@gmail.com"],
    ["Doobwuz", "0423271", "Teknik Mesin", "doobwuz78@gmail.com"],
    ["Aidenzzy", "0422101", "Teknik Fisika", "aidenzzyaidenzzy@gmail.com"] 
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama    : <?= $mhs[0] ?></li>
        <li>NRP     : <?= $mhs[1] ?></li>
        <li>Jurusan : <?= $mhs[2] ?></li>
        <li>Email   : <?= $mhs[3] ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>