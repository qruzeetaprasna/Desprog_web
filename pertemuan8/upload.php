<?php
    if (isset($_POST["submit"])){
        $targetDir = "uploads/"; // direktori tujuan untuk menyimpan file
        $targetFile = $targetDir. basename($_FILES["myFile"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $allowedExtension = array("txt", "pdf", "doc", "docx");
        $maxSize = 3*1024*1024;

        if (in_array($fileType, $allowedExtension) && $_FILES["myFile"] ["size"] <=$maxSize){
            if(move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetFile)){
            echo "File berhasil diunggah.";
            }else{
                echo "Gagal menggunggah file.";
            }
        }else {
            echo "File tidak valid atau melebihi ukuran yang diizikan";
        }
        
    }
?>