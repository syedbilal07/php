<html>
    <head>
        <title>PHP Sorting Arrays</title>
    </head>
    <body>
    <?php
    $age = array("Peter"=> 50, "Jackson" => 35, "Bilal" => 23);
    asort($age);
    foreach($age as $k => $v){
        echo "Key : ". $k. ", Value : ". $v. "<br>";
    }
    ?>
    </body>
</html>