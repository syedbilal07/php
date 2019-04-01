<html>
	<head>
		<title>PHP Multi Dimensional Array</title>
	</head>
		<body>
		<?php
		$emp = array
		(
			array(1,"Bilal",50000),
			array(2,"Huzaifa",40000),
			array(3,"Wasif",30000)
		);
		for($row = 0;$row < 3;$row++){
			for($col = 0;$col < 3;$col++){
				echo $emp[$row][$col]." ";
			}
			echo "<br />";
		}
		?>
		</body>
</html>