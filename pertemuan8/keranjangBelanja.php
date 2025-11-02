<?php
// ambil nilai cookie jika ada, jika tidak gunakan 0
$beliNovel = isset($_COOKIE['beliNovel']) ? intval($_COOKIE['beliNovel']) : 0;
$beliBuku  = isset($_COOKIE['beliBuku'])  ? intval($_COOKIE['beliBuku'])  : 0;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Keranjang Belanja</title>
</head>
<body>
    <h2>Keranjang Belanja</h2>
    <p>Jumlah Novel: <?php echo htmlspecialchars($beliNovel, ENT_QUOTES); ?></p>
    <p>Jumlah Buku : <?php echo htmlspecialchars($beliBuku, ENT_QUOTES); ?></p>
</body>
</html>