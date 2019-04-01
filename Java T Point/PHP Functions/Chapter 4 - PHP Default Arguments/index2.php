<html>
	<head>
		<title>PHP Default Arguments</title>
	</head>
		<body>
		<?php
		function greeting($first = "Syed", $last = "Bilal"){
			echo "Greeting $first $last <br />";
		}
		greeting("Daniel","Radcliffe");
        greeting();
        greeting("Mark","Wahlberg");
		?>
		</body>
</html>