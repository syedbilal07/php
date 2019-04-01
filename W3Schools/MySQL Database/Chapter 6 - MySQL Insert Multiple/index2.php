<html>
    <head>
        <title>MySQL Insert Multiple</title>
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
        die("Cannot Connect To Database ". mysqli_error($con)). "<br>";
    }
    else{
        echo "Connected Successfully To Database <br>";
    }
    $sql = "INSERT INTO myguests(firstname,lastname,email) VALUES('Mark','Wahlberg', 'markwahlberg@example.com');";
    $sql .= "INSERT INTO myguests(firstname,lastname,email) VALUES('Matt','Damon', 'matt123@example.com');";
    $sql .= "INSERT INTO myguests(firstname,lastname,email) VALUES('Mark','Zuckerberg', 'markzuck123@example.com')";
    $query = mysqli_multi_query($con,$sql);
    if(!$query){
        die("Cannot Insert Data ". mysqli_error($con). "<br>");
    }
    else{
        echo "Data Inserted Successfully <br>";
    }
    mysqli_close($con);
    ?>
    </body>
</html>