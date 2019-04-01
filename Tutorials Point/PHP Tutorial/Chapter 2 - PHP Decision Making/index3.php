<html>
    <head>
        <title>PHP Decision Making</title>
    </head>
    <body>
    <?php
    $d = date("D");
    switch($d) {
        case "Mon":
            echo "Its Monday";
            break;
        case "Tue":
            echo "Its Tuesday";
            break;
        case "Wed":
            echo "Its Wednesday";
            break;
        case "Thu":
            echo "Its Thursday";
            break;
        case "Fri":
            echo "Its Frrday";
            break;
        case "Sat":
            echo "Its Saturday";
            break;
        case "Sun":
            echo "Its Sunday";
            break;
        default:
            echo "Wonder which day is this ?";
    }
    ?>
    </body>
</html>