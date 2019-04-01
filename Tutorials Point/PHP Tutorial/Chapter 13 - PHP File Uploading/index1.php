<html>
    <head>
        <title>PHP File Uploading</title>
    </head>
    <body>
    <?php
    if(isset($_FILES['image'])){
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $_file_type = $_FILES['image']['type'];
        if($file_size > 2097152){
            $errors[] = "File Must Be Not More Than 2 MB";
        }

        if(empty($errors) == true){
            move_uploaded_file($file_tmp, "C:\\xampp\\htdocs\\upload".$file_name);
            echo "File Uploaded Successfully";
        }
        else {
            print_r($errors());
        }
    }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" />
        <input type="submit"/>
    </form>
    </body>
</html>