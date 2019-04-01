<html>
    <head>
        <title>PHP Web Concepts</title>
    </head>
    <body>
    <?php
    srand( microtime() * 1000000 );
    $num = rand( 1, 4 );
    switch($num){
        case 1:
            $image_file = "1.jpg";
            break;
        case 2:
            $image_file = "2.jpg";
            break;
        case 3:
            $image_file = "3.png";
            break;
        case 4:
            $image_file = "4.jpg";
            break;
    }
    echo "Random Image : <img src=$image_file />";
    ?>
    </body>
</html>