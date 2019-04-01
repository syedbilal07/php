<html>
    <head>
        <title>MySQL Delete Data</title>
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
        $sql = "DELETE FROM myguests WHERE id = 5";
        $con->exec($sql);
        echo "Deleted Record Successfully ID#5";
    }
    catch(PDOException $e){
        echo "Error In Connecting To Database ". $e->getMessage()."<br>";
    }
    ?>
    </body>
</html>