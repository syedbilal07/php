<html>
    <head>
        <title>PHP Functions</title>
    </head>
    <body>
    <?php
    function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }
    echo "The Sum Of 5 & 5 Is : ". sum(5,5). "<br>";
    echo "The Sum Of 10 & 12 Is : ". sum(10,12). "<br>";
    ?>
    </body>
</html>