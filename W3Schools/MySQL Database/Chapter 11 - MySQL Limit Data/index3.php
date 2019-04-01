<html>
    <head>
        <title>MySQL Limit Data</title>
    </head>
    <body>
    <?php
    // MySQLi PDO
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'guests';
    try {
        $con = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully To Database Engine <br>";
        $sql = "SELECT id,firstname,lastname FROM myguests LIMIT 3,6";
        foreach($con->query($sql) as $row){
            echo "ID : ". $row["id"]. "<br> First Name ". $row["firstname"]. "<br> Last Name : ". $row["lastname"]. "<br>";
        }
    }
    catch(PDOException $e){
        echo "Error In Connecting To Database ". $e->getMessage(). "<br>";
    }
    $con = null;
    ?>
    </body>
</html>