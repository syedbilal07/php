<html>
	<head>
		<title>PHP Read File</title>
	</head>
		<body>
		<?php
		$filename = "C:\\xampp\\htdocs\\PHP\\Java T Point\\PHP File\\Chapter 3 - PHP Read File\\fread.txt";
		$handle = fopen($filename,"r");
		$contents = fread($handle,filesize($filename));
		echo "<pre>$contents</pre>";
		fclose($handle);
		?>
		</body>
</html>