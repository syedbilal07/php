<html>
	<head>
		<title>PHP Array Function</title>
	</head>
		<body>
		<?php
		$season = array("Winter","Summer","Autumn","Spring");
		$search = array_search("Autumn",$season);
		echo $search;
		?>
		</body>
</html>