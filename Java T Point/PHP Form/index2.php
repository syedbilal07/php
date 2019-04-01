<html>
	<head>
		<title>PHP Form</title>
	</head>
		<body>
		<?php
		$name = $_POST["name"];
		$pass = $_POST["password"];
		echo "Welcome, $name. Your Password Is $pass";
		?>
		<form action="index2.php" method="post">
			<table>
				<tr><td>Name:</td><td> <input type="text" name="name"/></td></tr>
				<tr><td>Password:</td><td> <input type="password" name="password"/></td></tr>
				<tr><td colspan="2"><input type="submit" value="login"/>  </td></tr>
			</table>
		</form>
		</body>
</html>