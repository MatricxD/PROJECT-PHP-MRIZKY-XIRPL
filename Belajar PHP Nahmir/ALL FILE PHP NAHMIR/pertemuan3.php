<?php

// 1. Membuat variabel

$nama_barang = "Kopi C++";
$harga = 4000;
$stok = 40;


// 2. Mengambil nilai variabel

print "Nama barang: $nama_barang";
print "<br>";

print "Harga: Rp $harga";
print "<br>";

print "Stok: $stok";
print "<br>";


// Mengubah nilai variabel

$stok = 34;

print "Stok sekarang: $stok";
print "<br>";


// 3. Tipe Data

$jenis_kelamin = 'L';
$nama_lengkap = "Petani Kode";
$umur = 20;
$berat = 48.3;
$tinggi = 182.2;
$menikah = false;

print "Nama: $nama_lengkap";
print "<br>";

print "Jenis Kelamin: $jenis_kelamin";
print "<br>";

print "Umur: $umur tahun";
print "<br>";

print "Berat: $berat kg";
print "<br>";

print "Tinggi: $tinggi cm";
print "<br>";


// Array

$minuman = array("Kopi", "Teh", "Jus Jeruk");

print $minuman[0];
print "<br>";


// NULL

$nama = NULL;

var_dump($nama);
print "<br>";


// 4. Konversi tipe data

$foo = "1";

$foo *= 2;

print $foo;
print "<br>";


// 5. Menghapus variabel

$contoh = "Data sementara";

unset($contoh);

?>