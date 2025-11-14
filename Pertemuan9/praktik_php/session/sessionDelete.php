<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            session_unset();
            session_destroy();

            echo "All session variabels are now removed, and teh session is destroyed";
        ?>
    </body>
</html>
