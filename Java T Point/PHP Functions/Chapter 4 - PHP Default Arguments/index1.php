<html>
	<head>
		<title>PHP Default Arguments</title>
	</head>
		<body>
		<?php
        function sayHello($name = "Bilal"){
		    echo "The Name Is $name <br />";
        }
        sayHello("Ammar");
        sayHello();
        sayHello("Hasan");
		?>
		</body>
</html>