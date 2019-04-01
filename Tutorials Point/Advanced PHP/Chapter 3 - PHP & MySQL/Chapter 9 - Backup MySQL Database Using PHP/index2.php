<html>
    <head>
        <title>Backup MySQL Database Using PHP</title>
    </head>
    <body>
    <?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $con = mysqli_connect($server,$user,$pass);
    $db = mysqli_select_db($con,'myphpdb');
    if(!$con){
        die("Could Not Connect To Database Engine ". mysqli_error($con))."<br>";
    }
    else{
        echo "Connected Successfully To Database Engine<br>";
    }
    $db = mysqli_select_db($con,'myphpdb');
    $table_name = 'employee';
    $backup_file = "C:\\xampp\\htdocs\\PHP\\Tutorials Point\\Advanced PHP\\Chapter 3 - PHP & MySQL\\Chapter 9 - Backup MySQL Database Using PHP\\employee.sql";
    $sql = "LOAD DATA INFILE '$backup_file' INTO TABLE $table_name";
    $return = mysqli_query($con,$sql);
    if(!$return){
        die("Cannot Restore Database ".mysqli_error($con));
    }
    else{
        echo "Restored Successfully";
    }
    mysqli_close($con);
    ?>
    </body>
</html>