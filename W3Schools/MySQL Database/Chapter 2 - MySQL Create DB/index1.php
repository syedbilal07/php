<html>
    <head>
        <title>MySQL Create DB</title>
    </head>
    <body>
    <?php
    // MySQLi Object Oriented
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    // Connect To Database
    $con = new mysqli($servername,$username,$password);
    if($con->connect_error){
        die("Cannot Connect To Database ". $con->connect_error. "<br>");
    }
    else{
        echo "Connected Successfully To Database <br>";
    }
    // Create Database
    $sql = "CREATE DATABASE myDB";
    if($con->query($sql) === TRUE){
        echo "Database Created Successfully <br>";
    }
    else{
        echo "Cannot Create Database ". $con->error;
    }
    $con->close();
    ?>
    </body>
</html>