<html>
	<head>
		<title>PHP Call By Reference</title>
	</head>
		<body>
		<?php
        function increment(&$i){
		    $i++;
        }
        $i = 10;
        increment($i);
        echo $i;
		?>
		</body>
</html>