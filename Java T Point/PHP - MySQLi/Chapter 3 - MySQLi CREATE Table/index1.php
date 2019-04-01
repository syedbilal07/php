<html>
	<head>
		<title>PHP - MySQLi CREATE Table</title>
	</head>
		<body>
		<?php
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'bilaldb';
        $con = mysqli_connect($host,$user,$pass,$dbname);
        if(!$con){
            die('Could Not Connect To Server ' . mysqli_error());
        }
        else{
            echo 'Connected Successfully <br />';
        }
        $sql =  "create table emp5(id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL, emp_salary INT NOT NULL,primary key (id))";
        if(mysqli_query($con,$sql)){
            echo "Table Employee Created Successfully";
        }
        else{
            echo "Could Not Create Table ". mysqli_error($con);
        }
        mysqli_close($con);
		?>
		</body>
</html>