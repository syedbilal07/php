<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    echo "<h2 style='color:white'>You Have Cleaned Session</h2>";
    header("Refresh : 2; URL = index1.php")
?>
<html>
    <head>
        <title>Logout</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" href="Icon.png" />
    </head>
    <body>
    </body>
</html>