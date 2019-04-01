<html>
    <head>
        <title>Delete Data From MySQL Database Using PHP</title>
    </head>
    <body>
    <?php
    if(isset($_POST['delete'])){
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
        $emp_id = $_POST['emp_id'];
        $sql = "DELETE FROM employee WHERE emp_id = $emp_id";
        $return = mysqli_query($con,$sql);
        if(!$return){
            die("Cannot Delete From Database Table ".mysqli_error($con));
        }
        else{
            echo "Record Deleted Successfully";
        }
        mysqli_close($con);
    }
    ?>
    <form method = "post" action = "<?php $_PHP_SELF ?>">
        <table width = "400" border = "0" cellspacing = "1"
               cellpadding = "2">

            <tr>
                <td width = "100">Employee ID</td>
                <td><input name = "emp_id" type = "text"
                           id = "emp_id"></td>
            </tr>

            <tr>
                <td width = "100"> </td>
                <td> </td>
            </tr>

            <tr>
                <td width = "100"> </td>
                <td>
                    <input name = "delete" type = "submit"
                           id = "delete" value = "Delete">
                </td>
            </tr>

        </table>
    </form>
    </body>
</html>