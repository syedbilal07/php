<?php
    $cookie_name = "User";
    $cookie_value = "Bilal";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
    <head>
        <title>PHP Cookies</title>
    </head>
    <body>
    <?php
    if(!isset($cookie_name)){
        echo "Cookie Named ". $cookie_name. " Is Not Set<br>";
    }
    else{
        echo "Cookie Named : ". $cookie_name. " Is Set! <br>";
        echo "Value Is ". $_COOKIE[$cookie_name];
    }
    ?>
    </body>
</html>