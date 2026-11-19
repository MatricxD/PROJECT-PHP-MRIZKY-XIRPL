<?php

// ==========================================
// 1. MASALAH TANPA ARRAY (PENDAHULUAN)
// ==========================================
$produk1 = "Modem";
$produk2 = "Hardisk";
$produk3 = "Flash disk";

echo "$produk1<br>";
echo "$produk2<br>";
echo "$produk3<br>";

echo "<hr>";

// ==========================================
// 2. MEMBUAT ARRAY DI PHP
// ==========================================
// Membuat array kosong
$buah = array();
$hobi = [];

// Membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

// Membuat array dengan mengisi indeks tertentu
$anggota[1] = "Dian";
$anggota[2] = "Muhar";
$anggota[0] = "Petani Kode";

// Array dengan berbagai tipe data
$item = ["Bunga", 123, 39.12, true];

echo "<hr>";

// ==========================================
// 3. MENAMPILKAN ISI ARRAY
// ==========================================
// Membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// Menampilkan isi array secara manual
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";

echo "<br>";

// Menampilkan isi array dengan perulangan for
for($i=0; $i < count($barang); $i++){
    echo $barang[$i]."<br>";
}

echo "<br>";

// Menampilkan isi array dengan perulangan foreach
foreach($barang as $isi){
    echo $isi."<br>";
}

echo "<hr>";

// Menampilkan isi array dengan perulangan while
$i = 0;
while($i < count($barang)){
    echo $barang[$i]."<br>";
    $i++;
}

echo "<hr>";

// ==========================================
// 4. MENGHAPUS ISI ARRAY (unset)
// ==========================================
$hewan = [
    "Burung",
    "Kucing",
    "Ikan"
];