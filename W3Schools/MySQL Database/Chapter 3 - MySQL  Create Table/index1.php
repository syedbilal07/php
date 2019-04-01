<html>
    <head>
        <title>MySQL Create Table</title>
    </head>
    <body>
    <?php
    // MySQLi Object Oriented
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = "guests";
    $con = new mysqli($servername,$username,$password,$database);
    if($con->connect_error){
        die("Cannot Connect To Database ". $con->connect_error);
    }
    else{
        echo "Connected To Database <br>";
    }
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";
    if($con->query($sql) === TRUE){
        echo "Table Created Successfully <br>";
    }
    else{
        die("Cannot Create Table"). $con->error;
    }
    $con->close();
    ?>
    </body>
</html>