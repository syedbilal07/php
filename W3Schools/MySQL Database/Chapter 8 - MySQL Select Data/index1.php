<html>
    <head>
        <title>MySQL Select Data</title>
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
        echo "Connected Successfully To Database <br>";
    }
    $sql = "SELECT id, firstname, lastname FROM myguests";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        // Output Data Of Each Row
        while($row = $result->fetch_assoc()){
            echo "ID : ". $row["id"]. "<br>". "First Name : ". $row["firstname"]. "<br>". "Last Name : ". $row["lastname"]. "<br>";
        }
    }
    else{
        echo "0 Results";
    }
    $con->close();
    ?>
    </body>
</html>