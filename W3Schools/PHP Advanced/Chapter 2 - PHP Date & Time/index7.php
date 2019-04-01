<html>
    <head>
        <title>PHP Date & Time</title>
    </head>
    <body>
    <?php
    $d = strtotime("Tomorrow");
    echo "The Time Is : ". date("Y-m-d h:i:s:a",$d)."<br>";
    $d = strtotime("Next Saturday");
    echo "The Time Is : ". date("Y-m-d h:i:s:a",$d)."<br>";
    $d = strtotime("+3 Months");
    echo "The Time Is : ". date("Y-m-d h:i:s:a",$d);
    ?>
    </body>
</html>