<?php
session_start();
?>
<html>
<head>
	<title>PHP Session</title>
</head>
		<body>
		<?php
		if(!isset ($_SESSION["Counter"])){
			$_SESSION["Counter"] = 1;
		}
		else{
			$_SESSION["Counter"]++;
		}
		echo "Page Views Are : ".$_SESSION["Counter"];
		if($_SESSION["Counter"] >= 10){
			session_destroy();
		}
		?>
		</body>
</html>