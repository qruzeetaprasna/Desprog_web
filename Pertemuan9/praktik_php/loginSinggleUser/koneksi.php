<?php
    $connect = mysqli_connect ("localhost","root","1234","prakwebdb");
    if (!$connect) {
        die("Connection failed: ". mysqli_connect_error());
    }

?>