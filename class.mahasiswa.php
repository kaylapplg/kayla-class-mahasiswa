<?php

class Mahasiswa {
    public  $nim;
    public $nama;
    public $jurusan;
    
    public function tampilBiodata() {
        echo "NIM: " . $this->nim . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
    }
    
    public function setNim($nim) {
        $this->nim = $nim;
    }
    
    public function setNama($nama) {
        $this->nama = $nama;
    }
}

$mahasiswa = new Mahasiswa();

$mahasiswa->setNim("11223344");
$mahasiswa->setNama("Azqia Kayla");
$mahasiswa->jurusan = "PPLG"; 

$mahasiswa->tampilBiodata();

?>