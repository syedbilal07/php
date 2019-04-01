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
    while($row = mysqli_fetch_assoc($return)){
        echo "EMPLOYEE ID : {$row['emp_id']}<br>".
             "EMPLOYEE NAME : {$row['emp_name']}<br>".
            "EMPLOYEE ADDRESS : {$row['emp_address']}<br>".
            "EMPLOYEE SALARY : {$row['emp_salary']}<br>".
            "EMPLOYEE JOIN DATE : {$row['join_date']}<br>".
            "-------------------------------------------------------------------------";
    }
    mysqli_free_result($return);
    mysqli_close($con);
    ?>
    </body>
</html>