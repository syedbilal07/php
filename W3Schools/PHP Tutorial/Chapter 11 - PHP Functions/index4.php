<html>
    <head>
        <title>PHP Functions</title>
    </head>
    <body>
    <?php
    function myFunction($minHeight = 350)
    {
        echo "The Height Is : ". $minHeight. "<br>";
    }
    myFunction(450);
    myFunction(650);
    myFunction();
    ?>
    </body>
</html>