<html>
    <head>
        <title>MySQL Update Data</title>
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
        $sql = "UPDATE myguests SET lastname='Watson' WHERE id=15";
        $con->exec($sql);
        echo "Record Updated Successfully Of ID#15";
    }
    catch(PDOException $e){
        echo "Error In Connecting To Database ". $e->getMessage(). "<br>";
    }
    $con = null;
    ?>
    </body>
</html>