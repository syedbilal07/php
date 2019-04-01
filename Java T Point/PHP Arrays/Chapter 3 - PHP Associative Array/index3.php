<html>
	<head>
		<title>PHP Associative Array</title>
	</head>
		<body>
		<?php
		$salary = array("Bilal" => "55000", "Huzaifa" => "50000", "Aqib" => "45000");
		foreach($salary as $s => $v){
			echo "Salary Of ".$s. " Is : ".$v."<br />";
		}
		?>
		</body>
</html>