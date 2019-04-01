<html>
    <head>
        <title>Deleting MySQL Database</title>
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
    $sql = 'DROP Database mydatabase';
    $return = mysqli_query($con,$sql);
    if(!$return){
        die("Cannot Delete Database ". mysqli_error($con));
    }
    else{
        echo "Database Deleted Successfully";
    }
    mysqli_close($con);
    ?>
    </body>
</html>