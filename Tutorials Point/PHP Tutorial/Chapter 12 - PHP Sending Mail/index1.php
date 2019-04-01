<html>
    <head>
        <title>PHP Sending Mail</title>
    </head>
    <body>
    <?php
    $to = "syedbilal07@hotmail.com";
    $subject = "This Is PHP Email";

    $message = "<b>This Is HTML Message.</b>";
    $message .= "<h1>This Is A Heading.</h1>";

    $header = "From: php@domain.com";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: text/html \r\n";

    $return = mail($to,$subject,$message,$header);
    if($return == true){
        echo "Email Send Successfully";
    }
    else{
        echo "Message Could Not Be Sent";
    }
    ?>
    </body>
</html>