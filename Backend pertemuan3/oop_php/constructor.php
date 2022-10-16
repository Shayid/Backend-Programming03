<?php

# Membuat Class Person
class Person
{
    # Membuat Property
    public $nama;
    public $alamat;
    public $jurusan;

    function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    # Membuat Method
    function setNama($data) # Setter
    {
        $this->nama = $data;
    }
    function getNama() # Getter
    {
        return $this->nama;
    }

    # Buat Setter dan Getter untuk Alamat
    function setAlamat($data)
    { # Setter
        $this->alamat = $data;
    }
    function getAlamat()
    { #Getter
        return $this->alamat;
    }

    # Buat Setter dan Getter untuk Jurusan
    function setJurusan($data)
    { # Setter
        $this->jurusan = $data;
    }
    function getJurusan()
    { #Getter
        return $this->jurusan;
    }
}

# Membuat Object 1
$shayid = new Person("Muhammad Shayid Vedawynne", "Depok", "Teknik Informatika");
echo $shayid->getNama();
echo "<br>";
echo $shayid->getAlamat();
echo "<br>";
echo $shayid->getJurusan();

echo "<br>";
echo "<br>";

# Membuat Object 2
$lynn = new Person("Rosalynn Prushka", "Bandung", "Farmasi");
echo $lynn->getNama();
echo "<br>";
echo $lynn->getAlamat();
echo "<br>";
echo $lynn->getJurusan();