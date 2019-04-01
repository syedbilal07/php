<html>
    <head>
        <title>Insert Data Into MySQL Database</title>
    </head>
    <body>
    <?php
    if(isset($_POST['add'])){
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $con = mysqli_connect($host,$user,$pass);

        if(!$con){
            die("Could Not Connect To Server <br>". mysqli_error($con));
        }

        else{
            echo "Connected Successfully To Server <br>";
        }

        if(!get_magic_quotes_gpc()){
            $emp_name = addslashes($_POST['emp_name']);
            $emp_address = addslashes($_POST['emp_address']);
        }

        else{
            $emp_name = $_POST['emp_name'];
            $emp_address = $_POST['emp_address'];
        }

        $emp_salary = $_POST['emp_salary'];
        $sql = "INSERT INTO employee"."(emp_name,emp_address,emp_salary,join_date)". "VALUES('$emp_name','$emp_address','$emp_salary',NOW())";
        $db = mysqli_select_db($con,'myphpdb');
        $value = mysqli_query($con,$sql);

        if(!$value){
            die("Could Not Enter Records In The Database ". mysqli_error($con));
        }
        else{
            echo "Records Entered Successfully";
            mysqli_close($con);
        }
    }
    ?>
    <form method = "post" action = "index2.php">
        <table width = "400" border = "0" cellspacing = "1"
               cellpadding = "2">

            <tr>
                <td width = "100">Employee Name</td>
                <td><input name = "emp_name" type = "text"
                           id = "emp_name"></td>
            </tr>

            <tr>
                <td width = "100">Employee Address</td>
                <td><input name = "emp_address" type = "text"
                           id = "emp_address"></td>
            </tr>

            <tr>
                <td width = "100">Employee Salary</td>
                <td><input name = "emp_salary" type = "text"
                           id = "emp_salary"></td>
            </tr>

            <tr>
                <td width = "100"> </td>
                <td> </td>
            </tr>

            <tr>
                <td width = "100"> </td>
                <td>
                    <input name = "add" type = "submit" id = "add"
                           value = "Add Employee">
                </td>
            </tr>

        </table>
    </form>
    </body>
</html>