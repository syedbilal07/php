<html>
    <head>
        <title>MySQL Insert Multiple</title>
    </head>
    <body>
    <?php
    // MySQLi PDO
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'guests';
    try{
        $con = new PDO("mysql:host=$servername;dbname=$database", $username,$password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected To Database Successfully <br>";
        $con->beginTransaction();
        $con->exec("INSERT INTO myguests(firstname,lastname,email) VALUES('William','Dowson', 'dowsonhenry@example.com')");
        $con-exec("INSERT INTO myguests(firstname,lastname,email) VALUES('Julia','Sinn', 'juliagirl@example.com')");
        $con->exec("INSERT INTO myguests(firstname,lastname,email) VALUES('Emma','Stone', 'emmastone532@example.com')");
        $con->commit();
        echo "Data Inserted Successfully <br>";
    }
    catch(PDOException $e){
        echo "Error : ". $sql. $e->getMessage(). "<br>";
    }
    ?>
    </body>
</html>