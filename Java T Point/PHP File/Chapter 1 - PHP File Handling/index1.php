<html>
	<head>
		<title>PHP File Handling</title>
	</head>
		<body>
		<?php
		$filename = "C:\\xampp\\htdocs\\PHP\\Java T Point\\PHP File\\Chapter 1 - PHP File Handling\\open.txt";
		$handle = fopen($filename,"r");
		$contents = fread($handle,filesize($filename));
		echo $contents;
		fclose($handle);
		?>
		</body>
</html>