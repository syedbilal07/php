<html>
	<head>
		<title>PHP - MySQLi SELECT</title>
	</head>
		<body>
		<?php
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'bilaldb';
		$con = mysqli_connect($host,$user,$pass,$db);
		if(!$con){
			die('Could Not Connect To Database Engine '.mysqli_error($con));
		}
		else{
			echo "Connected To Database Engine Successfully <br />";
		}
		$sql = 'Select * From emp5';
		if(mysqli_query($con,$sql)){
			echo "Records Are Shown <br />";
			echo "-------------------------------- <br />";
		}
		else{
			echo "Records Cannot Be Shown Due To Error ".mysqli_error($con);
		}
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "EMP ID :{$row['id']}  <br> ".
					 "EMP NAME : {$row['name']} <br>".
					 "EMP SALARY : {$row['emp_salary']} <br>".
				     "--------------------------------<br>";
			}
		}
		else{
			echo "0 Results";
		}
		mysqli_close($con);
		?>
		</body>
</html>