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
    try {
        $con = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        echo "Connected Successfully To Database <br>";
        $sql = "INSERT INTO myguests(firstname,lastname,email) VALUES('Huzaifa','Hassan', 'huxaifa@gmail.com')";
        $con->exec($sql);
        echo "Data Inserted Successfully";
    }
    catch(PDOException $e){
        echo $sql. "<br>". $e->getMessage();
    }
    ?>
    </body>
</html>