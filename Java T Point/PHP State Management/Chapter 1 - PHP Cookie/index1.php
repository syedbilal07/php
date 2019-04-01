<?php
setcookie("User","Bilal");
?>
<html>
	<head>
        <title>PHP Cookie</title>
    </head>
		<body>
		<?php
        if(!isset($_COOKIE["User"])){
		    echo "Sorry, Cookie Is Not Found";
        }
        else{
            echo "Cookie Value : ".$_COOKIE["User"];
        }
        ?>
		</body>
</html>