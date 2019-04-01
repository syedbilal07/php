<html>
    <head>
        <title>PHP Date & Time</title>
    </head>
    <body>
    <?php
    $date_array = getdate();
    foreach($date_array as $key => $val){
        print "$key = $val <br />";
    }
    $formatted_date = "Today's Date : ";
    $formatted_date .= $date_array['mday']. "/";
    $formatted_date .= $date_array['mon']. "/";
    $formatted_date .= $date_array['year'];
    print $formatted_date;
    ?>
    </body>
</html>