<html>
	<head>
		<title>PHP Switch</title>
	</head>
		<body>
		<?php
		$num = 20;
		switch($num){
            case 10:
                echo "Number Is Equal To 10";
                break;
            case 20:
                echo "Number Is Equal To 20";
                break;
            case 30:
                print "Number Is Equal To 30";
                break;
            default:
                echo "Number Is Out Of Range";
		}
		?>
		</body>
</html>