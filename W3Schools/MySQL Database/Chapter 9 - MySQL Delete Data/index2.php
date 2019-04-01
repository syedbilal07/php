<html>
    <head>
        <title>MySQL Delete Data</title>
    </head>
    <body>
    <?php
    // MySQLi Procedural
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'guests';
    $con = mysqli_connect($servername,$username,$password,$database);
    if(!$con){
        die("Cannot Connect To Database Engine ". mysqli_error($con). "<br>");
    }
    else{
        echo "Connected Successfully To Database <br>";
    }
    $sql = "DELETE FROM myguests WHERE id = 4";
    $result = mysqli_query($con,$sql);
    if(!$result){
        die("Cannot Delete Record ID#4". mysqli_error($con));
    }
    else{
        echo "Deleted Successfully ID#4";
    }
    ?>
    </body>
</html>