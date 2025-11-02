<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "1234") {
    session_start();
    $_SESSION['status'] = "login";
    $_SESSION['username'] = $username;
    echo "Anda berhasil login, silahkan menuju <a href='homeSession.php'>Halaman Home</a>";
} else {
    echo "Gagal login, silahkan login lagi <a href='sessionLoginForm.html'>Halaman Login</a>";
}
?>