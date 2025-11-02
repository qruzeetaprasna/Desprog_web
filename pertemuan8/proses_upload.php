<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "documents/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

$allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];

if (isset($_FILES['file']) && $_FILES['file']['name'][0]) {
    $totalFiles = count($_FILES['file']['name']);

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['file']['name'][$i];
        $targetFile = $targetDirectory . $fileName;

        if (!in_array($_FILES['file']['type'][$i], $allowedMimeTypes)) {
            echo "File $fileName gagal diunggah. Hanya gambar JPEG, PNG, dan GIF yang diizinkan.<br>";
            continue; 
        }

        // Pindahkan file yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file $fileName.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}

?>