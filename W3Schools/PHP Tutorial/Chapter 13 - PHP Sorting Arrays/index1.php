<html>
    <head>
        <title>PHP Sorting Arrays</title>
    </head>
    <body>
    <?php
    $cars = array("Civic", "City", "Audi", "Mercedez");
    sort($cars);
    $length = count($cars);
    for($i = 0;$i < $length; $i++){
        echo $cars[$i]. "<br>";
    }
    ?>
    </body>
</html>