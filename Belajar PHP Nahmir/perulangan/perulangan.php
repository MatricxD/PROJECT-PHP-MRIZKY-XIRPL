<?php
// 1. Definisikan data awal (Inisialisasi selalu dengan array kosong agar tidak null)
$data = []; 

// 2. Fungsi utama untuk memproses atau menyaring data
function prosesData($inputData) {
    // Validasi: Jika data kosong, null, atau bukan array, ubah jadi array kosong
    $daftarItem = is_array($inputData) ? $inputData : [];

    // Cek apakah data kosong menggunakan count()
    if (count($daftarItem) === 0) {
        echo "Data kosong atau belum dimuat.<br>";
        return;
    }

    // Melakukan perulangan dengan aman menggunakan foreach (lebih disarankan di PHP)
    foreach ($daftarItem as $index => $item) {
        // Memastikan item di dalam array tidak null sebelum diakses
        if ($item !== null) {
            echo "Memproses item ke-{$index}: " . print_r($item, true) . "<br>";
            // Tambahkan logika kode Anda yang lain di sini
        }
    }
}

// 3. Uji coba pemanggilan fungsi
// Contoh jika data normal dari database/API berbentuk array
$dataNormal = ["Item A", "Item B", "Item C"];
prosesData($dataNormal);

// Contoh jika data ternyata null/gagal dimuat (Tetap aman, tidak akan memicu Warning/Error)
$dataError = null;
prosesData($dataError);
?>