<html>
	<head>
		<title>PHP Write File</title>
	</head>
		<body>
		<?php
		$file = "C:\\xampp\\htdocs\\PHP\\Java T Point\\PHP File\\Chapter 4 - PHP Write File\\write.txt";
		$handle = fopen($file,"w");
		$content = fwrite($handle,"Hello To PHP!");
		echo "File Written Sucessfully.";
		fclose($handle);
		?>
		</body>
</html>