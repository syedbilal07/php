<html>
	<head>
		<title>PHP Delete File</title>
	</head>
		<body>
		<?php
		$file = unlink("delete.txt");
		if($file){
			echo "File Deleted Sucessfully";
		}
		else
		{
			echo "File Cannot Be Deleted";
		}
		?>
		</body>
</html>