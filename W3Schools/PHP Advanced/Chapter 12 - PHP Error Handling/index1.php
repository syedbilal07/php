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
    echo $test;
    ?>
    </body>
</html>