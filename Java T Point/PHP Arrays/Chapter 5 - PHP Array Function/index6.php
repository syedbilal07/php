<html>
	<head>
		<title>PHP Array Function</title>
	</head>
		<body>
		<?php
		$season = array("Summer","Autumn","Winter","Spring");
		array_reverse($season);
		foreach($season as $s){
			echo "$s <br />";
		}
		?>
		</body>
</html>