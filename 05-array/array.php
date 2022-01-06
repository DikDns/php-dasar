<?php
// membuat array cara lama
$hari = array("Senin", "Selasa", "Rabu");

// membuat array cara baru
$bulan = ["Januari", "Februari", "Maret"];
$data = [23, "Tulisan", false];

// Menampilkan Array
// var_dump() / print_r()

// menambahkan elemen baru
print_r($hari);
echo "<br>";

$hari[] = "Kamis" ;
$hari[] = "Jumat" ;

print_r($hari);



?>