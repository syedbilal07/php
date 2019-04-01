<html>
    <head>
        <title>MySQL Connect</title>
    </head>
    <body>
    <?php
    // MySQLi Procedural
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $con = mysqli_connect($servername,$username,$password);
    if(!$con){
        die("Cannot Connect To Database ". mysqli_connect_error());
    }
    else{
        echo "Connected To Database Successfully";
    }
    mysqli_close($con);
    ?>
    </body>
</html>