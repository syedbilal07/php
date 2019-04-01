<html>
    <head>
        <title>PHP Filters</title>
    </head>
    <body>
    <?php
    $email = "john.doe@example.com";
    // Remove All Illegal Characters From Email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // Validate Email
    if(!filter_var($email,FILTER_VALIDATE_EMAIL) === false){
        echo "$email Is A Valid Email";
    }
    else{
        echo "$email Is Not A Valid Email";
    }
    ?>
    </body>
</html>