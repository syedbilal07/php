<html>
	<head>
		<title>PHP File Handling</title>
	</head>
		<body>
		<?php
		$filename = "C:\\xampp\\htdocs\\PHP\\Java T Point\\PHP File\\Chapter 2 - PHP Open File\\open.txt";
		$handle = fopen($filename,"r");
		$contents = fread($handle,filesize($filename));
		fclose($handle);
		echo $contents;
		?>
		</body>
</html>