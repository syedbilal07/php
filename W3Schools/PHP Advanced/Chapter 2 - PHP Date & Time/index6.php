<html>
    <head>
        <title>PHP Date & Time</title>
    </head>
    <body>
    <?php
    $d = strtotime("12:33 AM November 11 2016");
    echo "The Time Is : ". date("Y-m-d h:i:s:a",$d);
    ?>
    </body>
</html>