<html>
	<head>
		<title>PHP Array Function</title>
	</head>
		<body>
		<?php
		$salary = array("Bilal" => "50000", "Huzaifa" => "45000", "Wasif" => "40000");
		print_r(array_change_key_case($salary,CASE_UPPER));
		?>
		</body>
</html>