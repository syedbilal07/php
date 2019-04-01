<html>
    <head>
        <title>Using Paging Through PHP</title>
    </head>
    <body>
    <?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'myphpdb';
    $con = mysqli_connect($server,$user,$pass,$db);
    $targetpage = "index1.php";
    $select = mysqli_select_db($con,'myphpdb');
    if(!$con){
        die("Could Not Connect To Server".mysqli_error($con));
    }
    else{
        echo "Connected Successfully<br><br>";
    }
    $record_limit = 5;
    // Get Total Records
    $sql = "SELECT count(emp_id) FROM employee";
    $return = mysqli_query($con,$sql);
    if(!$return){
        die("Cannot Get The Data". mysqli_error($con));
    }
    $row = mysqli_fetch_array($return, MYSQLI_NUM);
    $record_count = $row[0];

    if(isset($_GET['page'])){
        $page = $_GET['page'] + 1;
        $offset = $record_limit * $page;
    }
    else{
        $page = 0;
        $offset = 0;
    }
    $left_record = $record_count - ($page * $record_limit);
    $sql = "SELECT emp_id, emp_name, emp_address, emp_salary, join_date ".
        "FROM employee ".
        "LIMIT $offset, $record_limit";
    $return = mysqli_query($con,$sql);
    if(!$return){
        die("Cannot Get The Data". mysqli_error($con));
    }
    while($row = mysqli_fetch_array($return, MYSQLI_ASSOC)){
        echo "EMPLOYEE ID : {$row['emp_id']} <br>".
             "EMPLOYEE NAME : {$row['emp_name']} <br>".
             "EMPLOYEE ADDRESS : {$row['emp_address']} <br>".
             "EMPLOYEE SALARY : {$row['emp_salary']} <br>".
             "EMPLOYEE's JOIN DATE : {$row['join_date']} <br>".
             "<hr />";
    }
    define("PHP_SELF",$_SERVER['PHP_SELF']);
    if($page > 0){
        $last = $page - 2;
        echo "<a href = '?page=$last'>Last 10 Records</a> ";
        echo "<a href = '?page=$page'>Next 10 Records</a>";
    }
    else if($page == 0){
        echo "<a href = '?page=$page'>Next 10 Records</a>";
    }
    else if($left_record < $record_limit){
        $last = $page - 2;
        echo "<a href = '?page=$last'>Last 10 Records</a>";
    }
    mysqli_close($con);
    ?>
    </body>
</html>