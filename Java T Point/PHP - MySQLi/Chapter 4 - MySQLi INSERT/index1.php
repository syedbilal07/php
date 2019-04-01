<html>
	<head>
		<title>PHP - MySQLi INSERT</title>
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
		$sql = 'INSERT INTO emp5(name,emp_salary)VALUES ("Asif",35000)';
		if(mysqli_query($con,$sql)){
			echo "Record Inserted Successfully";
		}
		else{
			echo "Cannot Insert Record ".mysqli_error($con);
		}
		?>
		</body>
</html>