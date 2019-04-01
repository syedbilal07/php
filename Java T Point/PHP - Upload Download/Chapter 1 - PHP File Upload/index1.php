<html>
	<head>
		<title>PHP File Upload</title>
	</head>
		<body>
		<?php
		$target_path = "C:\\xampp\\htdocs\\upload";
		$target_path = $target_path.basename($_FILES['fileToUpload']['name']);
		if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_path)){
			echo "File Uploaded Succesfully";
		}
		else{
			echo "Sorry, File Cannot Be Uploaded";
		}
		?>
		<form action="index1.php" method="post" enctype="multipart/form-data">
			Select File:
			<input type="file" name="fileToUpload"/>
			<input type="submit" value="Upload Image" name="submit"/>
		</form>
		</body>
</html>