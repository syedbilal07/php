<html>
    <head>
        <title>PHP Error Handling</title>
    </head>
    <body>
    <?php
    function customError($errNo, $errMsg){
        echo "<b>Error : </b>". $errNo. "<br>";
        echo "<b>Error Message : </b>". $errMsg. "<br>";
        echo "Ending Script";
        die();
    }
    set_error_handler("CustomError");
    $test = 1;
    if($test <= 2){
        trigger_error("Value Must Be Greater Than 2", E_USER_WARNING);
    }
    ?>
    </body>
</html>