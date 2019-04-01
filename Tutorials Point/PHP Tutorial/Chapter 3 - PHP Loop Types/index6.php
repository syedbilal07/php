<html>
    <head>
        <title>PHP Loop Types</title>
    </head>
    <body>
    <?php
    $i = array(1,2,3,4,5);
    foreach($i as $v){
        if($v == 3)
            continue;
        echo "Value Is $v <br>";
    }

    ?>
    </body>
</html>