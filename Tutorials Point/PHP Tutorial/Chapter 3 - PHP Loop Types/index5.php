<html>
    <head>
        <title>PHP Loop Types</title>
    </head>
    <body>
    <?php
    $i = 0;
    while($i < 10){
        $i++;
        if($i = 3){
            break;
        }
    }
    echo "Loop Stopped At : $i";
    ?>
    </body>
</html>