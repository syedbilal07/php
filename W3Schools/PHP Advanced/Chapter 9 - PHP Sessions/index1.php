<?php
    session_start();
?>
<html>
    <head>
        <title>PHP Sessions</title>
    </head>
    <body>
    <?php
    $_SESSION["favcolor"] = "Black";
    $_SESSION["favplayer"] = "David Villa";
    echo "Session Variables Are Set!<br>";
    ?>
    </body>
</html>