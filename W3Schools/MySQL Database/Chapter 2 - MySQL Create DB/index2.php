<html>
    <head>
        <title>MySQL Create DB</title>
    </head>
    <body>
    <?php
    // MySQLi Procedural
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    // Connect To Database
    $con = mysqli_connect($servername,$username,$password);
    if(!$con){
        die("Cannot Connect To Database ". mysqli_error($con));
    }
    else{
        echo "Connected Successfully To Database <br>";
    }
    // Create Database
    $sql = "CREATE DATABASE bilal";
    $query = mysqli_query($con,$sql);
    if(!$query){
        die("Cannot Create Database ". mysqli_error($con));
    }
    else{
        echo "Database Created Successfully";
    }
    ?>
    </body>
</html>