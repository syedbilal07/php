<?php
session_start();
?>
<html>
	<head>
		<title>PHP Session</title>
	</head>
		<body>
		<?php
		$_SESSION["User"] = "Bilal"; //Set Information
		echo "Session Information Is Set Successfully. <br />";
		echo "User Is : ".$_SESSION["User"];// Get Information
		?>
		</body>
</html>