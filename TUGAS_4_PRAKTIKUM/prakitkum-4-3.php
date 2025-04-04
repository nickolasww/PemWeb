<?php

class Mahasiswa{
    public $nim; 
    public $nama; 
    public $prodi; 

    public function __construct($nim, $nama, $prodi){ 
        $this->nim = $nim; 
        $this->nama = $nama; 
        $this->prodi = $prodi; 
    }

    public function kuliah() {
        echo "{$this->nama} sedang Kuliah.<br>";
    }

    public function ujian() {
        echo "{$this->nama} sedang Ujian.<br>";
    }

    public function praktikum() { 
        echo "{$this->nama} sedang praktikum.<br>";
    }

}

$mahasiswa1 = new Mahasiswa("221234567", "Andi", "Informatika");
$mahasiswa2 = new Mahasiswa("221987654", "Budi", "Sistem Informasi");

$mahasiswa1->kuliah();
$mahasiswa1->ujian(); 
$mahasiswa1->praktikum();

echo "<br>";

$mahasiswa2->kuliah();
$mahasiswa2->ujian();   
$mahasiswa2->praktikum();

?>