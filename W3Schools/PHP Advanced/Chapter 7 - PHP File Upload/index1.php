<html>
    <head>
        <title>PHP File Upload</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label class="control-label">Select Image To Upload:</label>
        <input type="file" name="fileToUpload" class="btn btn-lg btn-default" id="fileToUpload"><br />
        <input type="submit" value="Upload Image" class="btn btn-success btn-lg" name="submit">
    </form>
    </body>
</html>