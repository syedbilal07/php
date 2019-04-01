<html>
	<head>
		<title>PHP - JSON</title>
	</head>
		<body>
		<?php
		$json = '{"FirstName" : "Syed", "LastName" : "Bilal"}';
		var_dump(json_decode($json,true));
		?>
		</body>
</html>