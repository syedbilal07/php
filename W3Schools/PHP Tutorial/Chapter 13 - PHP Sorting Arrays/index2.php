<html>
    <head>
        <title>PHP Sorting Arrays</title>
    </head>
    <body>
    <?php
    $numbers = array(5,10,15,20,25,30,35,40,45,50);
    $length = count($numbers);
    for($x = 0; $x < $length; $x++)
    {
        echo $numbers[$x]. "<br>";
    }
    ?>
    </body>
</html>