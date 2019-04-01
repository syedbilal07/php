<html>
    <head>
        <title>MySQL Insert Data</title>
    </head>
    <body>
    <?php
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
    $sql = "INSERT INTO myguests(firstname,lastname,email) VALUES ('Sadia', 'Iqbal', 'saadi@gmail.com')";
    $query = mysqli_query($con,$sql);
    if(!$query){
        die("Cannot Insert Into Table ". mysqli_error($con));
    }
    else{
        echo "Data Inserted Successfully";
    }
    mysqli_close($con);
    ?>
    </body>
</html>