<?php
session_start();
?>
<html>
    <head>
        <title>PHP Sessions</title>
    </head>
    <body>
    <?php
    if(isset($_SESSION['counter'])){
        $_SESSION['counter'] += 1;
    }
    else{
        $_SESSION['counter'] = 1;
    }
    if($_SESSION['counter'] == 10){
        session_destroy();
    }
    echo "You Have Visited The Page $_SESSION[counter] times";
    ?>
    </body>
</html>