<html>
    <head>
        <title>MySQL Update Data</title>
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
    $sql = "UPDATE myguests SET lastname='Dad' WHERE id=6";
    $result = mysqli_query($con,$sql);
    if(!$result){
        die("Cannot Update Record ". mysqli_error($con). "<br>");
    }
    else{
        echo "Updated Record Successfully Of ID#6";
    }
    mysqli_close($con);
    ?>
    </body>
</html>