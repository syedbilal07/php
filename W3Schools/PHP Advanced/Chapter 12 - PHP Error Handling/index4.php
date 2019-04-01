<html>
    <head>
        <title>PHP Error Handling</title>
    </head>
    <body>
    <?php
    function customError($errNo,$errMsg){
        echo "Error No : ". $errNo. "<br>";
        echo "Error Message : ". $errMsg. "<br>";
        echo "Web Master Has Been Notified. <br>";
        error_log("Error : ". [$errNo].$errMsg,1, "someone@example.com", "From: webmaster@example.com");
        echo "Ending Script";
        die();
    }
    set_error_handler("customError",E_USER_WARNING);
    $test = 1;
    if($test <= 2){
        trigger_error("Value Must Be Greater Than 2",E_USER_WARNING);
    }
    ?>
    </body>
</html>