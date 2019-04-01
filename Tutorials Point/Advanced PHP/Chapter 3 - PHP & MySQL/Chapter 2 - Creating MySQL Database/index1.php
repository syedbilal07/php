<html>
    <head>
        <title>Creating MySQL Database</title>
    </head>
    <body>
    <?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $con = mysqli_connect($server,$user,$pass);
    if(!$con){
        die("Could Not Connect To Server".mysqli_error($con));
    }
    else{
        echo "Connected Successfully<br>";
    }
    $sql = "Create Database myphpdb";
    $value = mysqli_query($con,$sql);
    if(!$value){
        die("Could Not Create Database");
    }
    echo "Database Created Successfully";
    mysqli_close($con);
    ?>
    </body>
</html>