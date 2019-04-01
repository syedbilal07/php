<html>
    <head>
        <title>Creating MySQL Database</title>
    </head>
    <body>
    <?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'myphpdb';
    $con = mysqli_connect($server,$user,$pass,$db);
    if(!$con){
        die("Could Not Connect To Server <br>");
    }
    else{
        echo "Connected To Server <br>";
    }
    $sql = 'CREATE TABLE employee( '.
        'emp_id INT NOT NULL AUTO_INCREMENT, '.
        'emp_name VARCHAR(20) NOT NULL, '.
        'emp_address  VARCHAR(20) NOT NULL, '.
        'emp_salary   INT NOT NULL, '.
        'join_date    timestamp(6) NOT NULL, '.
        'primary key ( emp_id ))';
    $value = mysqli_query($con,$sql);
    if(!$value){
        die("Cannot Create Table". mysqli_error($con));
    }
    else{
        echo "Table Created Successfully";
    }
    mysqli_close($con);
    ?>
    </body>
</html>