<html>
    <head>
        <title>PHP Sorting Arrays</title>
    </head>
    <body>
    <?php
    $cars = array("Civic", "City", "Audi", "Mercedez");
    rsort($cars);
    $length = count($cars);
    for($x = 0; $x < $length; $x++){
        echo $cars[$x]. "<br>";
    }
    ?>
    </body>
</html>