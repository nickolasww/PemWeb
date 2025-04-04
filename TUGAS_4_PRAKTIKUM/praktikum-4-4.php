<?php

$jurusan = [ 
    "teknik informatika", 
    "teknik komputer", 
    "ilmu komputer", 
    "sistem informasi", 
    "teknologi informasi", 
    "pendidikan teknologi informasi"
]; 

echo "Daftar jurusan:<br>"; 
foreach ($jurusan as $item) { 
    echo "- $item<br>"; 
}  

echo "<br>";

$buku = [
    "judul" => "Pemrograman Web",
    "penulis" => "Andi Setiawan",
    "tahun" => 2024,
    "penerbit" => "Informatika Press"
];

echo "Informasi Buku:<br>";
foreach ($buku as $key => $value) {
    echo ucfirst($key) . ": $value<br>";
}
?>
