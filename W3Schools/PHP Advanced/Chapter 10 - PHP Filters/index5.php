<html>
    <head>
        <title>PHP Filters</title>
    </head>
    <body>
    <?php
    $ip = "127.0.0.1";
    if(!filter_var($ip, FILTER_VALIDATE_IP) === false){
        echo "$ip Is A Valid IP";
    }
    else{
        echo "$ip Is Not A Valid IP";
    }
    ?>
    </body>
</html>