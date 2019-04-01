<html>
    <head>
        <title>Getting Data From MySQL Database</title>
    </head>
    <body>
    <?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'myphpdb';
    $con = mysqli_connect($server,$user,$pass,$db);
    $select = mysqli_select_db($con,'myphpdb');
    if(!$con){
        die("Could Not Connect To Server".mysqli_error($con));
    }
    else{
        echo "Connected Successfully<br>";
    }
    $sql = "SELECT emp_id,emp_name,emp_address,emp_salary,join_date FROM employee";
    $return = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($return,MYSQLI_NUM)){
        echo "EMPLOYEE ID : {$row[0]}<br>".
            "EMPLOYEE NAME : {$row[1]}<br>".
            "EMPLOYEE ADDRESS : {$row[2]}<br>".
            "EMPLOYEE SALARY : {$row[3]}<br>".
            "EMPLOYEE JOIN DATE : {$row[4]}<br>".
            "---------------------------------------------------------";
    }
    mysqli_free_result($return);
    mysqli_close($con);
    ?>
    </body>
</html>