<html>
	<head>
		<title>PHP - JSON</title>
	</head>
		<body>
		<?php
		$json = '{"a":1,"b":2,"c":3}';
		var_dump(json_decode($json,true));
		?>
		</body>
</html>