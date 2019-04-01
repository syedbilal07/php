<html>
    <head>
        <title>MySQL Create DB</title>
    </head>
    <body>
    <?php
    // MySQLi PDO
    $servername = "localhost";
    $username = "username";
    $password = "";
    try{
        $con = new PDO("mysql:host=$servername;",$username, $password);
        // set the PDO error mode to exception
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully <br>";
        $sql = "CREATE DATABASE myDBPDO";
        // use exec() because no results are returned
        $con->exec($sql);
        echo "Database Created Successfully <br>";
    }
    catch(PDOException $e){
        echo $sql ."<br>". $e->getMessage();
    }
    $con = null;
    ?>
    </body>
</html>