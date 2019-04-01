<html>
    <head>
        <title>MySQL Create Table</title>
    </head>
    <body>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = "guests";
    try {
        $con = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully To Database <br>";
        $sql = "CREATE TABLE thisTable(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";
        $con->exec($sql);
        echo "Table thisTable Created Successfully <br>";
    }
    catch(PDOException $e){
        echo $sql. "<br>". $e->getMessage();
    }
    $con = null;
    ?>
    </body>
</html>