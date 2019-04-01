<html>
	<head>
		<title>PHP Array Function</title>
	</head>
		<body>
		<?php
		$salary = array("Bilal" => "55000", "Huzaifa" => "50000", "Wasif" => "45000");
		print_r(array_chunk($salary,2));
		?>
		</body>
</html>