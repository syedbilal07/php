<html>
    <head>
        <title>PHP Exception</title>
    </head>
    <body>
    <?php
    //create function with an exception
    function checkNum($num){
        if($num > 1){
            throw new Exception("Value Must Be 1 OR Below");
        }
        return true;
    }
    //trigger exception in a "try" block
    try {
        checkNum(2);
        //If the exception is thrown, this text will not be shown
        echo 'If you see this, the number is 1 or below';
    }
        //catch exception
    catch(Exception $e){
        echo "Message : ". $e->getMessage();
    }
    ?>
    </body>
</html>