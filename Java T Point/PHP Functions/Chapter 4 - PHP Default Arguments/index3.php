<html>
	<head>
		<title>PHP Default Arguments</title>
	</head>
		<body>
		<?php
		function sum($n1 = 10, $n2 = 10){
           $n3 =  $n1 + $n2;
           echo "Addition Is $n3 <br />";
		}
		sum();
        sum(20);
        sum(40,40);
		?>
		</body>
</html>