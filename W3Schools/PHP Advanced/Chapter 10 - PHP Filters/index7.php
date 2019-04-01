<html>
    <head>
        <title>PHP Filters</title>
    </head>
    <body>
    <?php
    $url = "http://www.w3schools.com";
    // Remove All Illegal Characters From Email
    $url = filter_var($url, FILTER_SANITIZE_URL);
    // Validate URL
    if(!filter_var($url, FILTER_VALIDATE_URL) === false){
        echo "$url Is A Valid URL";
    }
    else{
        echo "$url Is Not A Valid URL";
    }
    ?>
    </body>
</html>