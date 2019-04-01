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
    //trigger exception
    checkNum(2);
    ?>
    </body>
</html>