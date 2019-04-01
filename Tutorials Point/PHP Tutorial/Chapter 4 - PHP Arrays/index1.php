<html>
    <head>
        <title>PHP Arrays</title>
    </head>
    <body>
    <?php
    // First Method
    $arrays = array(1,2,3,4,5);
    echo "First Way Of Indexed Array : - <br />";
    foreach($arrays as $a){
        echo "Value Is $a <br>";
        while($a == 5){
            echo "<br><br>";
            break;
        }
    }
    // Second Method
    echo "Second Way Of Indexed Array : - <br />";
    $arr[0] = 1;
    $arr[1] = 2;
    $arr[2] = 3;
    $arr[3] = 4;
    $arr[4] = 5;
    foreach($arr as $b){
        echo "Value Is $b <br>";
    }
    ?>
    </body>
</html>