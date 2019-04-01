<html>
	<head>
		<title>PHP Download File</title>
	</head>
		<body>
		<?php
		$file = "C:\\xampp\\htdocs\\upload\\david.jpg";
		header('Content-Type: application/octet-stream');
		header("Content-Transfer-Encoding: utf-8");
		header("Content-disposition: attachment; filename=\"" . basename($file) . "\"");
		readfile($file);

		?>
		<form action="index1.php" method="post" enctype="multipart/form-data">
			Download File:
			<input type="submit" value="Download Image" name="submit"/>
		</form>
		</body>
</html>