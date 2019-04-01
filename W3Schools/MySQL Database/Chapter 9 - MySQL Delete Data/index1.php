<html>
    <head>
        <title>MySQL Delete Data</title>
    </head>
    <body>
    <?php
    // MySQLi Object Oriented
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'guests';
    $con = new mysqli($servername,$username,$password,$database);
    if($con->connect_error){
        die("Cannot Connect To Database ". $con->connect_error. "<br>");
    }
    else{
        echo "Connected Successfully To Database <br>";
    }
    $sql = "DELETE FROM myguests WHERE id = 3";
    if($con->query($sql) === TRUE){
        echo "Deleted Successfully ID # 3 <br>";
    }
    else{
        die("Cannot Delete Record ID#3 ". $con->connect_error. "<br>");
    }
    $con->close();
    ?>
    </body>
</html>