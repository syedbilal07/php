<html>
	<head>
		<title>PHP Varaible Arguments</title>
	</head>
		<body>
		<?php
		function add(...$numbers){
			$sum = 0;
            foreach($numbers as $n){
                $sum += $n;
            }
            return $sum;
		}
		echo add(1,2,3,4);
		?>
		</body>
</html>