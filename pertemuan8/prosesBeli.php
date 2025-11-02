<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ambil dan amankan input (pastikan jadi integer)
    $novel = isset($_POST['beliNovel']) ? intval($_POST['beliNovel']) : 0;
    $buku  = isset($_POST['beliBuku'])  ? intval($_POST['beliBuku'])  : 0;

    // set cookie selama 1 jam, path root agar dapat diakses di semua halaman
    setcookie("beliNovel", $novel, time() + 3600, "/");
    setcookie("beliBuku",  $buku,  time() + 3600, "/");

    // redirect ke keranjang dan hentikan eksekusi
    header("Location: keranjangBelanja.php");
    exit;
}

// jika akses langsung, arahkan ke form
header("Location: formBeli.html");
exit;
?>