<html>
	<head>
		<title>PHP Form</title>
	</head>
		<body>
		<?php
		$name = $_GET["name"];
		echo "Welcome, $name";
		?>
		<form action = "index1.php" method="get">
			Name : <input type = "text" name = "name" />
			<input type = "submit" value = "Submit" />
		</form>
		</body>
</html>