<html>
	<head>
		<title>PHP - MySQLi UPDATE</title>
	</head>
		<body>
		<?php
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'bilaldb';
		$con = mysqli_connect($host,$user,$pass,$db);
		if(!$con){
			die('Could Not Connect To SQL Server ' . mysqli_error($con));
		}
		else{
			echo "Connected Successfully <br />";
		}
		$id = 2;
		$name = "Huzaifa";
		$emp_salary = 45000;
		$sql = "update emp5 set name =\"$name\", emp_salary = $emp_salary where id = $id";
		if(mysqli_query($con,$sql)){
			echo "Record Updated Successfully";
		}
		else{
			echo "Cannot Update Record ".mysqli_error($con);
		}
		mysqli_close($con);
		?>
		</body>
</html>