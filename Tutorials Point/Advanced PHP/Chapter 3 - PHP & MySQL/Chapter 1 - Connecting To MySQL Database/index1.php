<html>
    <head>
        <title>Connecting To MySQL Database</title>
    </head>
    <body>
    <?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $con = mysqli_connect($server,$user,$pass);
    if($con == true){
        echo "Connected Successfully";
    }
    else{
        die("Could Not Connect To Server");
    }
    mysqli_close($con);
    ?>
    </body>
</html>