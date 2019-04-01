<html>
    <head>
        <title>PHP Functions</title>
    </head>
    <body>
    <?php
    function addFive($num){
        $num += 5;
    }
    function addSix(&$num){
        $num += 6;
    }
    $original = 10;
    addFive($original);
    echo "Original Value Is : $original<br>";
    addSix($original);
    echo "Original Value Is : $original";
    ?>
    </body>
</html>