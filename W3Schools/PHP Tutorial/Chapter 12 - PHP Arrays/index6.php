<html>
    <head>
        <title>PHP Arrays</title>
    </head>
    <body>
    <?php
    $age = array("Peter" => 35, "Jackson" => 25, "Bilal" => 23);
    foreach($age as $x => $value){
        echo " Key : ". $x. ", Value : ".$value."<br>";
    }
    ?>
    </body>
</html>