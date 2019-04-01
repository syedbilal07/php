<html>
    <head>
        <title>PHP Error Handling</title>
    </head>
    <body>
    <?php
    $test = 1;
    if($test <= 2){
        trigger_error("Value Must Be Greater Than 2");
    }
    ?>
    </body>
</html>