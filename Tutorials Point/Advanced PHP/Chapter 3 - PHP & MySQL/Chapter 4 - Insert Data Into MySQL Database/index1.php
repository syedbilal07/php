<html>
    <head>
        <title>Insert Data Into MySQL Database</title>
    </head>
    <body>
    <?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'myphpdb';
    $con = mysqli_connect($server,$user,$pass,$db);
    if(!$con){
        die("Could Not Connect To Server".mysqli_error($con));
    }
    else{
        echo "Connected Successfully<br>";
    }
    $sql = 'INSERT INTO employee'.'(emp_name,emp_address,emp_salary,join_date)'.'VALUES("Syed Bilal","D-577 Pall Mall Street",50000,NOW())';
    $value = mysqli_query($con,$sql);
    if(!$value){
        die("Cannot Insert Data Into Employee ". mysqli_error($con));
    }
    else{
        echo "Data Inserted Successfully";
    }
    mysqli_close($con);
    ?>
    </body>
</html>