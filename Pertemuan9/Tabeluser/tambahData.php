<?php
    include "koneksi.php";

    $username = "admin";
    $password = md5("123");
    
    $sql = "insert into user (id, username, password)
        values (1, '$username', '$password')
        ";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil ditambahkan ke dalam tabel";
    } else {
        echo "error" . mysqli_error($koneksi);       
    }
    
?>