<html>
	<head>
		<title>PHP Recursive Function</title>
	</head>
		<body>
		<?php
		function display($number){
			if($number <= 5){
				echo "$number <br />";
                display($number + 1);
			}
		}
		display(1);
		?>
		</body>
</html>