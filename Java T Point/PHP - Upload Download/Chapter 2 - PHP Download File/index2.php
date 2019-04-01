<html>
	<head>
		<title>PHP Download File</title>
	</head>
		<body>
		<?php
		$file = "C:\\xampp\\htdocs\\upload\\david.jpg";
		header('Content-Type:application/octet-stream');
		header('Content-Transfer-Encoding:Binary');
		header('Content-disposition:attachment; filename =\"".basename($file)."\"');
		readfile($file);
		?>
		</body>
</html>