<html>
    <head>
        <title>PHP Filters</title>
    </head>
    <body>
    <?php
    $int = 100;
    if(filter_var($int, FILTER_VALIDATE_INT)){
        echo "Integer Is Valid";
    }
    else{
        echo "Integer Is Not Valid";
    }
    ?>
    </body>
</html>