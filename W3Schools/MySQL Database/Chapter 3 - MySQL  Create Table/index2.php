<html>
    <head>
        <title>MySQL Create Table</title>
    </head>
    <body>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = "guests";
    $con = mysqli_connect($servername,$username,$password,$database);
    if(!$con){
        die("Cannot Connect To Database ". mysqli_error($con));
    }
    else{
        echo "Connected To Database Engine <br>";
    }
    $sql = "CREATE TABLE myTable (
    id INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";
    $query = mysqli_query($con,$sql);
    if(!$query){
        die("Cannot Create Table "). mysqli_error($con);
    }
    else{
        echo "Table myTable Created Successfully";
    }
    ?>
    </body>
</html>