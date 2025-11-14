<?php
    $koneksi = mysqli_connect("localhost", "root", "1234", "prakwebdb");

    if (!$koneksi) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql =  "create table user (
                    id int primary key,
                    username varchar(50),
                    password varchar(50)
            )";

    if(mysqli_query($koneksi, $sql)){
        echo "Tabel berhasil dibuat";
    }else {
        echo "Error membuat tabel: " .mysqli_error($koneksi);
    }

    
?>