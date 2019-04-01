<html>
	<head>
		<title>PHP Append File</title>
	</head>
		<body>
		<?php
		$file = "C:\\xampp\\htdocs\\PHP\\Java T Point\\PHP File\\Chapter 5 - PHP Append File\\write.txt";
		$handle = fopen($file,"a");
		$content = fwrite($handle,"This Is My Data");
		echo "Data Written Successfully";
		fclose($handle);
		?>
		</body>
</html>