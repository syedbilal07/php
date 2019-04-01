<html>
    <head>
        <title>MySQL Get Last ID</title>
    </head>
    <body>
    <?php
    // MySQLi Object Oriented
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'guests';
    $con = new mysqli($servername,$username,$password,$database);
    if($con->connect_error){
        die("Cannot Connect To Database Engine ". $con->connect_error. "<br>");
    }
    else{
        echo "Connected Successfully To Database Engine <br>";
    }
    $sql = "INSERT INTO myguests(firstname,lastname,email) VALUES('Ali','Suhaib','dashingali007@yahoo.com')";
    if($con->query($sql) === TRUE){
        $lastid = $con->insert_id;
        echo "Data Inserted Into Table. Last Id Is $lastid <br>";
    }
    else{
        die("Cannot Insert Data Into Table ". $con->error. "<br>");
    }
    $con->close();
    ?>
    </body>
</html>