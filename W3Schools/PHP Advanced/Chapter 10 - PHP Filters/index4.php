<html>
    <head>
        <title>PHP Filters</title>
    </head>
    <body>
    <?php
    $int = 0;
    if(filter_var($int, FILTER_VALIDATE_INT === 0) || !filter_var($int,FILTER_VALIDATE_INT === false)){
        echo "Integer Is Valid";
    }
    else{
        echo "Integer Is Not Valid";
    }
    ?>
    </body>
</html>