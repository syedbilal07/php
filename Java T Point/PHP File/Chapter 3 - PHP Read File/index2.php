<html>
	<head>
		<title>PHP Read File</title>
	</head>
		<body>
		<?php
		$filename = "C:\\xampp\\htdocs\\PHP\\Java T Point\\PHP File\\Chapter 3 - PHP Read File\\fgets.txt";
		$handle = fopen($filename,"r");
		$contents = fgets($handle);
		echo $contents;
		fclose($handle);
		?>
		</body>
</html>