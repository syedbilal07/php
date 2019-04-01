<html>
    <head>
        <title>PHP Decision Making</title>
    </head>
    <body>
    <?php
    $d = date("D");
    if($d == "Fri"){
        echo "Its Friday";
    }
    elseif($d == "Sat"){
        echo "Its Saturday";
    }
    else{
        echo "Have A Nice Day!";
    }
    ?>
    </body>
</html>