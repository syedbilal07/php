<html>
    <head>
        <title>PHP Arrays</title>
    </head>
    <body>
    <?php
    $cars = array("Civic", "City", "Audi");
    $arrlength = count($cars);
    for($x = 0; $x < $arrlength; $x++){
        echo $cars[$x]. "<br>";
    }
    ?>
    </body>
</html>