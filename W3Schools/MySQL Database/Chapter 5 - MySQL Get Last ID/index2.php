<html>
    <head>
        <title>MySQL Get Last ID</title>
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
        echo "Connected Successfully To Database Engine <br>";
    }
    $sql = "INSERT INTO myguests(firstname,lastname,email) VALUES('Ahmer','Khan','ahmerdadkhan@gmail.com')";
    $query = mysqli_query($con,$sql);
    if(!$query){
        die("Cannot Insert Data ". mysqli_error($con). "<br>");
    }
    else{
        $lastid = mysqli_insert_id($con);
        echo "Data Inserted Successfully. Last ID Is : ". $lastid. "<br>";
    }
    mysqli_close($con);
    ?>
    </body>
</html>