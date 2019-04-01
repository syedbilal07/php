<html>
    <head>
        <title>PHP Super Globals</title>
    </head>
    <body>
    <?php
    echo "Script Name Is : ". $_SERVER['PHP_SELF'];
    echo "<br><br>";
    echo "Server Name Is : ". $_SERVER['SERVER_NAME'];
    echo "<br><br>";
    echo "Host Name Is : ". $_SERVER['HTTP_HOST'];
    echo "<br><br>";
    echo "Port Used Is : ". $_SERVER['REMOTE_PORT'];
    echo "<br><br>";
    echo "User Agent Is : ". $_SERVER['HTTP_USER_AGENT'];
    echo "<br><br>";
    echo "Script Executing Is : ". $_SERVER['SCRIPT_NAME'];
    ?>
    </body>
</html>