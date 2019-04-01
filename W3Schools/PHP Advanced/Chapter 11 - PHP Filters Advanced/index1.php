<html>
    <head>
        <title>PHP Filters Advanced</title>
    </head>
    <body>
    <?php
    $int = 122;
    $min = 1;
    $max = 200;
    if(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min" => $min, "max" => $max))) === false){
        echo "Variable Value Is Not In Between 1 & 200";
    }
    else{
        echo "Variable Value Is In Between 1 & 200";
    }
    ?>
    </body>
</html>