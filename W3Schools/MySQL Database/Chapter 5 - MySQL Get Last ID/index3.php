<html>
    <head>
        <title>MySQL Get Last ID</title>
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
        echo "Connected To Database Successfully <br>";
        $sql = "INSERT INTO myguests(firstname,lastname,email) VALUES('Bilal','Ahmed','bilalafridi@hotmail.com')";
        $con->exec($sql);
        $lastid = $con->lastInsertId();
        echo "Data Inserted Successfully. Last ID Is : ". $lastid. "<br>";
    }
    catch(PDOException $e){
        echo "Error : ". $e->getMessage();
    }
    $con = null;
    ?>
    </body>
</html>