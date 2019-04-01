<html>
    <head>
        <title>PHP Functions</title>
    </head>
    <body>
    <?php
    function printMe($parameter = NULL){
        print $parameter;
    }
    printMe("This Is Test<br>");
    printMe();
    ?>
    </body>
</html>