<?php

class mahasiswa{
    public $nim = "040506";
    public $nama = "kayla";
    public $jurusan = "PPLG";
    function tampil_biodata(){
        echo $this-> nim, "<br>";
        echo $this-> nama, "<br>";
        echo $this-> jurusan;
    }
}

$mahasiswa= new mahasiswa();
     $mahasiswa->nim= "040506";
     $mahasiswa-> nama = "kayla";
     $mahasiswa-> jurusan = "PPLG";

$mahasiswa->tampil_biodata();

$mahasiswa = new mahasiswa("040506", "kayla", "PPLG");
