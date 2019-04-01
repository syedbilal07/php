<html>
    <head>
        <title>PHP Exception</title>
    </head>
    <body>
    <?php
    function myException($exception){
        echo "<b>Exception : ". $exception->getMessage(). "</b>";
    }
    set_exception_handler("myException");
    throw new Exception("Uncaught Exception Occured");
    ?>
    </body>
</html>