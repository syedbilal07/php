<html>
	<head>
		<title>PHP Read File</title>
	</head>
		<body>
		<?php
		$handle = fopen("C:\\xampp\\htdocs\\PHP\\Java T Point\\PHP File\\Chapter 3 - PHP Read File\\fgets.txt","r");
		while(!feof($handle)){
			echo fgetc($handle);
		}
		fclose($handle);
		?>
		</body>
</html>