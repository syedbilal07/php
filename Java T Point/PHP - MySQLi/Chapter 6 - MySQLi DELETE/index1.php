<html>
	<head>
		<title>PHP - MySQLi DELETE</title>
	</head>
		<body>
		<?php
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'bilaldb';
		$table = 'emp5';
		$con = mysqli_connect($host,$user,$pass,$db);
		if(!$con){
			die('Could Not Connect To Server '.mysqli_error($con));
		}
		else{
			echo "Connected Successfully <br />";
		}
		$id = 1;
		$sql = "delete from $table where id = $id";
		if(mysqli_query($con,$sql)){
			echo "Record Deleted Successfully";
		}
		else{
			echo "Cannot Delete Specified Record";
		}
		mysqli_close($con);
		?>
		</body>
</html>