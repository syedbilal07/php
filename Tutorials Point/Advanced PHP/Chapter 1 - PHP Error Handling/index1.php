<html>
    <head>
        <title>PHP Error Handling</title>
    </head>
    <body>
    <?php
        try{
            $error = "Always Throw This Error";
            throw new Exception($error);
            // Code following an exception is not executed.
            echo "Never Executed";
        }
        catch(Exception $e){
            echo "Caught Exception : ". $e -> getMessage(). "<br>";
    }
    echo "Hello PHP";
    ?>
    </body>
</html>