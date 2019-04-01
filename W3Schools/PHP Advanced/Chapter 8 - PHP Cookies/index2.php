<?php
    $cookie_name = "User";
    $cookie_value = "Bilal";
    setcookie($cookie_name,$cookie_name, time() + (86400 * 30), "/") // 86400 = 1 day
?>
<html>
    <head>
        <title>PHP Cookies</title>
    </head>
    <body>
    <?php
    if(count($_COOKIE) > 0){
        echo "Cookies Are Enabled. <br>";
    }
    else{
        echo "Cookies Are Not Enabled. <br>";
    }
    if(!isset($cookie_name)){
        echo "Cookie Named : ". $cookie_name. " Is Not Set! <br>";
    }
    else{
        echo "Cookie Named ". $cookie_name. " Is Set! <br>";
        echo "Cookie Value Is : ". $cookie_value. "<br>";
    }
    ?>
    </body>
</html>