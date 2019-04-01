<html>
	<head>
		<title>PHP Call By Value</title>
	</head>
		<body>
		<?php
		function myFunction($str2){
			$str2 = "Call By Value";
		}
		$str = "Hello";
        myFunction($str);
        echo $str;
		?>
		</body>
</html>