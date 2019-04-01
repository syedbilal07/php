<html>
    <head>
        <title>PHP Date & Time</title>
    </head>
    <body>
    <?php
    $d1 = strtotime("July 04");
    $d2 = ceil(($d1-time())/60/60/24);
    echo "There Are ". $d2. " Days Until July 04, 2017";
    ?>
    </body>
</html>