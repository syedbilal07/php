<html>
    <head>
        <title>MySQL Insert Multiple</title>
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
        die("Cannot Connect To Database ". $con->connect_error. "<br>");
    }
    else{
        echo "Connected Successfully To Database Engine <br>";
    }
    $sql = "INSERT INTO myguests(firstname,lastname,email) VALUES('Aiman','Minal', 'aimanminal@example.com');";
    $sql .= "INSERT INTO myguests(firstname,lastname,email) VALUES('Ali','Zafar', 'alizafar@example.com');";
    $sql .= "INSERT INTO myguests(firstname,lastname,email) VALUES('Atif','Aslam', 'atifaslam@example.com')";
    if($con->multi_query($sql) === TRUE){
        echo "Data Successfully Inserted <br>";
    }
    else{
        die("Cannot Insert Data Into Table ". $con->error);
    }
    $con->close();
    ?>
    </body>
</html>