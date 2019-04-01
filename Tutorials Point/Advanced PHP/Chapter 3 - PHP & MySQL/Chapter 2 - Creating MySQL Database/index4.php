<html>
    <head>
        <title>Creating MySQL Database</title>
    </head>
    <body>
    <?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'myphpdb';
    $con = mysqli_connect($host,$user,$pass,$db);
    if(!$con){
        die("Could Not Connect To Server <br>");
    }
    else{
        echo "Connected Successfully To Server <br>";
    }
    $query_file = 'myquery.txt';
    $fp = fopen($query_file,'r');
    $sql = fread($fp,filesize($query_file));
    fclose($fp);
    $value = mysqli_query($con,$sql);
    if(!$value){
        die("Could Not Create Table ". mysqli_error($con));
    }
    else{
        echo "Table Created Successfully";
    }
    mysqli_close($con);
    ?>
    </body>
</html>