<?php

function jumlahkan($a, $b){
    return $a + $b;
}

$hasil1 = jumlahkan(10,5);
$hasil2 = jumlahkan(7,3);

echo "Hasil penjumlahan pertama: $hasil1 <br> ";
echo "Hasil penjumlahan kedua: $hasil2<br>";

function panjangstring($teks){ 
    return strlen($teks);
}

$panjang1 = panjangstring("Hello World!");
$panjang2 = panjangstring("PHP is fun!");

echo "panjang string pertama: $panjang1<br>"; 
echo "panjang string kedua: $panjang2<br>";

?>