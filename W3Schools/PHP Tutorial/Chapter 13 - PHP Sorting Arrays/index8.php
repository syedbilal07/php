<html>
    <head>
        <title>PHP Sorting Arrays</title>
    </head>
    <body>
    <?php
    $age = array("Peter"=> 50, "Jackson" => 35, "Bilal" => 23);
    krsort($age);
    foreach($age as $k => $v){
        echo "Key Is : ". $k. ", Value Is : ".$v."<br>";
    }
    ?>
    </body>
</html>