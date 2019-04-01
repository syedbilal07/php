<html>
    <head>
        <title>PHP Sessions</title>
    </head>
    <body>
    <?php
    include 'index1.php';
    $_SESSION["favcolor"] = "Blue";
    echo "Favourite Color Is : ". $_SESSION["favcolor"]."<br>";
    echo "Favourite Player Is : ". $_SESSION["favplayer"];
    ?>
    </body>
</html>