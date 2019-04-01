<html>
	<head>
		<title>PHP - MySQLi CREATE DB</title>
	</head>
		<body>
		<?php
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$con = mysqli_connect($host,$user,$pass);
		if($con){
			echo "Connected Successfully <br />";
		}
		else {
			echo "Cannot Connect To Database : " . mysqli_error($con);
		}
		$sql = "Create Database BilalDB";
		if(mysqli_query($con,$sql)){
			echo "Database BilalDB Created Successfully";
		}
		else{
			echo "Database Cannot Be Created : ".mysqli_error($con);
		}
		mysqli_close($con);
		?>
		</body>
</html>