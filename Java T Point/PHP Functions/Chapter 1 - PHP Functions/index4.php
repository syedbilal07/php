<html>
	<head>
		<title>PHP Functions</title>
	</head>
		<body>
		<?php
		function myFunction(&$str2){
			$str2 .= "Call By Reference";
		}
		$str = "Hello ";
        myFunction($str);
        echo $str;
		?>
		</body>
</html>