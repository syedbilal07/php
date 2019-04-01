<html>
	<head>
		<title>PHP Break</title>
	</head>
		<body>
		<?php
		for($i = 1; $i <= 10; $i++){
			echo "$i <br />";
			if($i == 5){
				break;
			}
		}
		?>
		</body>
</html>