<?php

// ==========================================
// 1. MEMBUAT DAN MEMANGGIL FUNGSI BASIC
// ==========================================
function perkenalan1(){
  print "Assalamulaikmu, ";
  print "Perkenalkan, nama saya Irfan Ghozali<br/>";
  print "Senang berkenalan dengan anda<br/>";
}

// Memanggil fungsi yang sudah dibuat
perkenalan1();

print "<hr>";

// Memanggilnya lagi
perkenalan1();

print "<hr>";

// ==========================================
// 2. FUNGSI DENGAN PARAMETER
// ==========================================
function perkenalan2($nama, $salam){
  print $salam.", ";
  print "Perkenalkan, nama saya ".$nama."<br/>";
  print "Senang berkenalan dengan anda<br/>";
}

// Memanggil fungsi yang sudah dibuat
perkenalan2("Muhardian", "Hi");

print "<hr>";

$saya = "Indry";
$ucapanSalam = "Selamat pagi";
// Memanggilnya lagi
perkenalan2($saya, $ucapanSalam);

print "<hr>";

// ==========================================
// 3. PARAMETER DENGAN NILAI DEFAULT
// ==========================================
function perkenalan3($nama, $salam="Assalamualaikum"){
  print $salam.", ";
  print "Perkenalkan, nama saya ".$nama."<br/>";
  print "Senang berkenalan dengan anda<br/>";
}

// Memanggil fungsi yang sudah dibuat
perkenalan3("Muhardian", "Hi");

print "<hr>";

$saya = "Indry";
$ucapanSalam = "Selamat pagi";
// Memanggilnya lagi tanpa mengisi parameter salam
perkenalan3($saya);

print "<hr>";

// ==========================================
// 4. FUNGSI YANG MENGEMBALIKAN NILAI (RETURN)
// ==========================================
function hitungUmur1($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

print "Umur saya adalah ". hitungUmur1(1994, 2015) ." tahun";

print "<hr>";

// ==========================================
// 5. MEMANGGIL FUNGSI DI DALAM FUNGSI
// ==========================================
function hitungUmur2($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

function perkenalan4($nama, $salam="Assalamualaikum"){
  print $salam.", ";
  print "Perkenalkan, nama saya ".$nama."<br/>";
  // Memanggil fungsi lain
  print "Saya berusia ". hitungUmur2(1994, 2015) ." tahun<br/>";
  print "Senang berkenalan dengan anda<br/>";
}

// Memanggil fungsi perkenalan
perkenalan4("Ardianta");

print "<hr>";

// ==========================================
// 6. FUNGSI REKURSIF
// ==========================================
function faktorial($angka) {
  if ($angka < 2) {
    return 1;
  } else {
    // Memanggil dirinya sendiri
    return ($angka * faktorial($angka-1));
  }
}

// Memanggil fungsi
print "faktorial 5 adalah " . faktorial(5);

?>