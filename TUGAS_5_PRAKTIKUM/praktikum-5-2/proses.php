<?php
if($_SERVER["REQUEST_METHOD"] ==  "POST"){
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $email = $_POST["email"];
    
    
    $data = "Nama: $nama | NIM: $nim | Email: $email" . PHP_EOL;
    
    file_put_contents("data_mahasiswa.txt", $data, FILE_APPEND);
    
    echo "<p>Data berhasil ditambahkan </p>";
    echo "<a href='form.html'>Kembali ke form </a>";
}else {
    echo "Akses tidak valid.";
}

?> 