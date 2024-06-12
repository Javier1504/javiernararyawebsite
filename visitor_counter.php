<?php
session_start();

// File yang menyimpan jumlah pengunjung
$counterFile = "counter.txt";

// Baca nilai awal dari file
if (!file_exists($counterFile)) {
    $counter = 0;
} else {
    $counter = (int) file_get_contents($counterFile);
}

// Jika ini adalah kunjungan pertama pengguna, tambahkan ke counter
if (!isset($_SESSION['hasVisited'])) {
    $_SESSION['hasVisited'] = true;
    $counter++;
    file_put_contents($counterFile, $counter);
}

// Tampilkan jumlah pengunjung
echo $counter;
?>
