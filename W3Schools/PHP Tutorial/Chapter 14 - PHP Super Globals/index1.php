<html>
    <head>
        <title>PHP Super Globals</title>
    </head>
    <body>
    <?php
    $x = 75;
    $y = 25;
    function myFunction(){
         $GLOBALS['z'] =  $GLOBALS['x'] + $GLOBALS['y'];
    }
    myFunction();
    echo $z;
    ?>
    </body>
</html>