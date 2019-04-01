<html>
	<head>
		<title>PHP Recursive Function</title>
	</head>
		<body>
		<?php
		function factorial($n)
        {
            if ($n < 0)
                return -1; /*Wrong value*/
            if ($n == 0)
                return 1; /*Terminating condition*/
            return ($n * factorial($n - 1));
        }
        echo factorial(5);
		?>
		</body>
</html>