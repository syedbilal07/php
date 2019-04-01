<html>
    <head>
        <title>Deleting MySQL Database</title>
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
    $sql = "DROP TABLE customers";
    $return = mysqli_query($con,$sql);
    if(!$return){
        die("Cannot Delete Table ". mysqli_error($con));
    }
    else{
        echo "Table Deleted Successfully";
    }
    mysqli_close($con);
    ?>
    </body>
</html>