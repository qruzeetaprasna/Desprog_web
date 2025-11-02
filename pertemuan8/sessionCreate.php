<?php
session_start();

// Set session variables
$_SESSION["favcolor"] = "blue";
$_SESSION["favanimal"] = "cat";
?>
<!DOCTYPE html>
<html>
<body>
    <?php
    echo "Session variables are set:<br>";
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
    ?>
    <br><br>
    <a href="sessioncall.php">Go to session call page</a>
</body>
</html>