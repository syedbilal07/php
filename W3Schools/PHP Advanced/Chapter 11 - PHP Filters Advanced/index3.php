<html>
    <head>
        <title>PHP Filters Advanced</title>
    </head>
    <body>
    <?php
    $url = "http://www.w3schools.com";
    if(!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false){
        echo "$url Is A Valid URL";
    }
    else{
        echo "$url Is Not A Valid URL";
    }
    ?>
    </body>
</html>