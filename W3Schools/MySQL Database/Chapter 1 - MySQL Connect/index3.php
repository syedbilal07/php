<html>
    <head>
        <title>MySQL Connect</title>
    </head>
    <body>
    <?php
    // MySQLi PDO
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'myphpdb';
    try{
        $con = new PDO("mysql:host=$servername;dbname=$database", $username,$password);
        // set the PDO error mode to exception
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully";
    }
    catch(PDOException $e){
        echo "Connection Failed ". $e->getMessage();
    }
    $con = null;
    ?>
    </body>
</html>