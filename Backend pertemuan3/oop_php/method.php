<?php

# Membuat Class Person
class Person
{
    # Membuat Property
    public $nama;
    public $alamat;
    public $jurusan;

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
$shayid = new Person();
$shayid->setNama("Muhammad Shayid Vedawynne");
$shayid->setAlamat("Depok");
$shayid->setJurusan("Teknik Informatika");
echo $shayid->getNama();
echo "<br>";
echo $shayid->getAlamat();
echo "<br>";
echo $shayid->getJurusan();

echo "<br>";
echo "<br>";

# Membuat Object 2
$lynn = new Person();
$lynn->setNama("Rosalynn Prushka");
$lynn->setAlamat("Bandung");
$lynn->setJurusan("Farmasi");
echo $lynn->getNama();
echo "<br>";
echo $lynn->getAlamat();
echo "<br>";
echo $lynn->getJurusan();