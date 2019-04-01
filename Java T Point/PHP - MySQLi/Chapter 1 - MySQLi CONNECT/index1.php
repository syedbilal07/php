<html>
	<head>
		<title>PHP - MySQLi CONNECT</title>
	</head>
		<body>
		<?php
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$con = mysqli_connect($host,$user,$pass);
		if(!$con){
			die("Could Not Connect : ".mysqli_error());
		}
			echo "Connected Successfully";
			mysqli_close($con);
		?>
		</body>
</html>