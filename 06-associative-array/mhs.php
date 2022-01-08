<?php
// $mahasiswa = [ 
//     ["DikDns", "0421341", "Teknik Informatika", "dikdnssocial@gmail.com"],
//     ["Doobwuz", "doobwuz78@gmail.com" , "0423271", "Teknik Mesin"],
//     ["Teknik Fisika", "Aidenzzy", "0422101", "aidenzzyaidenzzy@gmail.com"] 
// ];

// Associative Array

$mahasiswa = [ 
    [
        "nama" => "DikDns",
        "nrp" => "0421341", 
        "jurusan" => "Teknik Informatika", 
        "email" => "dikdnssocial@gmail.com",
        "gambar" => "0421341.jpg"
    ],
    [
        "nama" => "Doobwuz",
        "email" =>"doobwuz78@gmail.com" ,
        "nrp" =>"0423271",
        "jurusan" =>"Teknik Mesin",
        "gambar" => "0423271.jpg"
    ],
    [
        "jurusan" =>"Teknik Fisika",
        "nama" => "Aidenzzy",
        "nrp" =>"0422101",
        "email" => "aidenzzyaidenzzy@gmail.com",
        "gambar" => "0422101.jpg"
    ] 
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
        <li>
            <img src="img/<?= $mhs["gambar"] ?>" alt="foto <?= $mhs["nama"] ?>">
        </li>
        <li>Nama    : <?= $mhs["nama"] ?></li>
        <li>NRP     : <?= $mhs["nrp"] ?></li>
        <li>Jurusan : <?= $mhs["jurusan"] ?></li>
        <li>Email   : <?= $mhs["email"] ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>