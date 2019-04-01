<html>
    <head>
        <title>PHP Date & Time</title>
    </head>
    <body>
    <?php
    $d = mktime(12,14,55,11,11,16);
    echo "Created Date Is : ". date("Y-m-d h:i:s:a",$d);
    ?>
    </body>
</html>