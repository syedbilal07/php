<html>
	<head>
		<title>PHP File Handling</title>
	</head>
		<body>
		<?php
		$filename = fopen("C:\\xampp\\htdocs\\PHP\\Java T Point\\PHP File\\Chapter 1 - PHP File Handling\\write.txt","w");
		fwrite($filename,"Hello, This Is A Write File");
		fclose($filename);
		echo "File Written Succesfully";
		?>
		</body>
</html>