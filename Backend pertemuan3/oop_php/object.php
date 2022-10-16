<?php

# Membuat Class Person
class Person
{
    # Membuat Property
    public $nama;
    public $alamat;
    public $jurusan;
}

# Membuat Object 1
$shayid = new Person();
$shayid->nama = "Muhammad Shayid Vedawynne";
$shayid->alamat = "Depok";
$shayid->jurusan = "Teknik Informatika";
echo $shayid->nama;
echo "<br>";
echo $shayid->alamat;
echo "<br>";
echo $shayid->jurusan;

echo "<br>";
echo "<br>";

# Membuat Object 2
$lynn = new Person();
$lynn->nama = "Rosalynn Prushka";
$lynn->alamat = "Bandung";
$lynn->jurusan = "Farmasi";
echo $lynn->nama;
echo "<br>";
echo $lynn->alamat;
echo "<br>";
echo $lynn->jurusan;