<html>
    <head>
        <title>MySQL Limit Data</title>
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
    $sql = "SELECT id,firstname,lastname FROM myguests LIMIT 4,10";
    $result = $con->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "ID : ". $row["id"]. "<br> First Name : ". $row["firstname"]. "<br> Last Name : ". $row["lastname"]. "<br>";
        }
    }
    else{
        echo "0 Records";
    }
    $con->close();
    ?>
    </body>
</html>