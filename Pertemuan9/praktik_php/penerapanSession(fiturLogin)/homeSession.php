<html>
    <body>
        <?php
            session_start();

            if($_SESSION["status"] == "login"){
                echo"selamat datang " . $_SESSION["username"];
                ?>
                <br><a href="SessionLogout.php">Log out</a>
            <?php
            }else{
                echo "Anda belum login. silahkan ";?>
                <a href="seesionLoginForm.html">Log</a>
            <?php
            }
        ?>
    </body>
</html>