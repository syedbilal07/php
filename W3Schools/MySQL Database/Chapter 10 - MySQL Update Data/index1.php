<html>
    <head>
        <title>MySQL Update Data</title>
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
    $sql = "UPDATE myguests SET lastname='Khan' WHERE id=7";
    if($con->query($sql) === TRUE){
        echo "Updated Record Successfully Of ID#7";
    }
    else{
        die("Cannot Update Record <br>");
    }
    $con->close();
    ?>
    </body>
</html>