<html>
    <head>
        <title>MySQL Insert Data</title>
    </head>
    <body>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'guests';
    $con = new mysqli($servername,$username,$password,$database);
    if($con->connect_error){
        die("Cannot Connect To Database ". $con->connect_error);
    }
    else{
        echo "Connected Successfully To Database Engine <br>";
    }
    $sql = "INSERT INTO myguests(firstname,lastname,email) VALUES('Syed','Bilal', 'saadi@example.com')";
    if($con->query($sql) === TRUE){
        echo "Data Inserted Into MyGuests Table <br>";
    }
    else{
        die("Cannot Insert Data ". $con->error);
    }
    $con->close();
    ?>
    </body>
</html>