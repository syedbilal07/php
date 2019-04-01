<html>
	<head>
		<title>PHP WHILE Loop</title>
	</head>
		<body>
		<?php
		$m = 1;
		while($m <= 3){
		    $n = 1;
            while ($n <= 3){
                echo "$m $n <br />";
                $n++;
            }
            $m++;
        }
		?>
		</body>
</html>