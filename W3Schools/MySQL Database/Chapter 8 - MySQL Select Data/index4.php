<html>
    <head>
        <title>MySQL Select Data</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php
    // Select Data With PDO & Prepared In Table Format
    echo "<table class='table table-responsive table-hover table-striped'>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th>";

    class TableRows extends RecursiveIteratorIterator{
        function __construct($it){
            parent::__construct($it, self::LEAVES_ONLY);
        }
        function current(){
            return "<td>". parent::current(). "</td>";
        }
        function beginChildren()
        {
            echo "<tr>";
        }
        function endChildren()
        {
            echo "</tr>". "\n";
        }
    }
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'guests';
    try {
        $con = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully To Database <br>";
        $sql = $con->prepare("SELECT id,firstname,lastname FROM myguests");
        $sql->execute();
        // Set The Resulting Array To Associative
        $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($sql->fetchAll())) as $k=>$v){
            echo $v;
        }
    }
    catch(PDOException $e){
        echo "Error : ". $sql. "<br>". $e->getMessage();
    }
    $con = null;
    echo"</table>";
    ?>
    </body>
</html>