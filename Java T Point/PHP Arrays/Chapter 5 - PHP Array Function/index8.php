<html>
	<head>
		<title>PHP Array Function</title>
	</head>
		<body>
		<?php
		$name1 = array("Bilal","Wasif","Maira","Aqib");
		$name2 = array("Huzaifa","Omer","Asif","Bilal");
		$name3 = array_intersect($name1, $name2);
		foreach($name3 as $n){
			echo $n ."<br />";
		}
		?>
		</body>
</html>