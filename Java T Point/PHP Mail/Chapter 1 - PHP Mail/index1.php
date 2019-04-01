<html>
	<head>
		<title>PHP Mail</title>
	</head>
		<body>
		<?php
		ini_set("sendmail_from","syedbilal07@hotmail.com");
		$to = "wasifrehman93x@gmail.com";
		$subject = "This Is PHP";
		$message = "I Am Using PHP Storm";
		$header = "From:syedbilal07@hotmail.com \r\n";
		$result = mail($to,$subject,$message,$header);
		if(result == true){
			echo "Email Sent Successfully";
		}
		else{
			echo "Unable To Send Mail";
		}
		?>
		</body>
</html>