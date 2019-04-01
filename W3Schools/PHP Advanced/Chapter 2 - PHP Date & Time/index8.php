<html>
    <head>
        <title>PHP Date & Time</title>
    </head>
    <body>
    <?php
    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 Weeks", $startdate);

    while($startdate < $enddate){
        echo date("M d", $startdate). "<br>";
        $startdate = strtotime("+1 Week", $startdate);
    }
    ?>
    </body>
</html>