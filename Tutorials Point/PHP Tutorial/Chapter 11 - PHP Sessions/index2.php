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
        $_SESSION['counter'] = 1;
    }
    else{
        $_SESSION['counter']++;
    }
    $msg = "You have visited this page ".  $_SESSION['counter']." Time";
    echo $msg;
    ?>
    <p>
        To continue  click following link <br />

        <a  href = "nextpage.php?<?php echo htmlspecialchars(SID); ?>">
    </p>
    </body>
</html>