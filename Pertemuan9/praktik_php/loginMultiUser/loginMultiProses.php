<?php
    include "koneksi.php";

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = "select * from user where username = '$username' and password = '$password'";
    // Kode yang perlu diubah:

$result = mysqli_query($connect, $query);
$cek = mysqli_num_rows($result);

    if($cek > 0) { // Cek dulu apakah ada baris yang ditemukan

        // Ambil data baris ke variabel $row
        $row = mysqli_fetch_assoc($result); 

        if($row['level'] == 1){ // Akses kolom sebagai array: $row['lavel']
            echo "Anda berhasil login. Silahkan menuju <a href='homeAdmin.html'>Halaman Home</a>";
        }else if($row['level'] == 2){
            echo "Anda berhasil login. Silahkan menuju <a href='homeGuest.html'>Halaman home</a>";
        }
    }else {
        // Jika login gagal ($cek = 0)
        echo "Anda gagal login. Silahkan "; ?>
        <a href="loginForm.html">Login Kembali</a>
        <?php
        // echo mysqli_error($connect); // Opsional: Hapus baris ini di produksi
    }
    // Tambahkan penutup koneksi
    mysqli_close($connect);
?>