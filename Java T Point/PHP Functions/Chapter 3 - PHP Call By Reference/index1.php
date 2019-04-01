<html>
	<head>
		<title>PHP Call By Reference</title>
	</head>
		<body>
		<?php
		function myFunction(&$str2){
			$str2 .= "Call By Reference";
		}
		$str = "Hello ";
		myFunCtion($str);
		echo $str;
		?>
		</body>
</html>