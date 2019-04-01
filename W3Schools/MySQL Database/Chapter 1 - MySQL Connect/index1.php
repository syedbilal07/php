<html>
    <head>
        <title>MySQL Connect</title>
    </head>
    <body>
    <?php
    // MySQLi Object-Oriented
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $con = new mysqli($servername,$username,$password);
    if($con->connect_error){
        die("Connection Failed ". $con->connect_error);
    }
    else{
        echo "Connected Successfully";
    }
    $con->close();
    ?>
    </body>
</html>