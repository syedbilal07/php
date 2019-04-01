<html>
    <head>
        <title>Update Data In MySQL Database Using PHP</title>
    </head>
    <body>
    <?php
    if(isset($_POST['update'])){
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
            echo "Connected Successfully<br><br>";
        }
        $emp_id = $_POST['emp_id'];
        $emp_salary = $_POST['emp_salary'];
        $sql = "UPDATE employee ". "SET emp_salary = $emp_salary ".
            "WHERE emp_id = $emp_id" ;
        $return = mysqli_query($con,$sql);
        if(!$return){
            die("Could Not Update Data ". mysqli_error($con));
        }
        else{
            echo "Data Updated Successfully";
        }
        mysqli_close($con);
    }
    ?>
    <form method = "post" action = "<?php $_PHP_SELF ?>">
        <table width = "400" border =" 0" cellspacing = "1"
               cellpadding = "2">

            <tr>
                <td width = "100">Employee ID</td>
                <td><input name = "emp_id" type = "text"
                           id = "emp_id"></td>
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
                    <input name = "update" type = "submit"
                           id = "update" value = "Update">
                </td>
            </tr>

        </table>
    </form>
    </body>
</html>