<html>
    <head>
        <title>PHP Functions</title>
    </head>
    <body>
    <?php
    function add($num1,$num2){
        $sum = $num1 + $num2;
        return $sum;
    }
    $return = add(10,20);
    echo "Returned Value Is $return";
    ?>
    </body>
</html>