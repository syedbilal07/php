<html>
    <head>
        <title>PHP Sessions</title>
    </head>
    <body>
    <?php
    include 'index1.php';
    session_unset();
    session_destroy();
    echo "All session variables are now removed, and the session is destroyed."
    ?>
    </body>
</html>