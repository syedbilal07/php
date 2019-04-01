<html>
    <head>
        <title>MySQL Select Data</title>
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
        die("Cannot Connect To Database ". mysqli_error($con). "<br>");
    }
    else{
        echo "Connected Successfully To Database <br>";
    }
    $sql = "SELECT id, firstname, lastname FROM myguests";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "ID : ". $row["id"]. "<br> First Name : ". $row["firstname"]. "<br> Last Name : ". $row["lastname"]. "<br>";
        }
    }
    else{
        echo "0 Results";
    }
    mysqli_close($con);
    ?>
    </body>
</html>