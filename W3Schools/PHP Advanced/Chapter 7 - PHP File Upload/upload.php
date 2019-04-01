<?php
$target_dir = "C:\\xampp\\htdocs\\upload\\";
$target_file = $target_dir. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check If Image File Is Actual Image Or Fake Image
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false){
        echo "File Is An Image - ". $check["mime"]. ".<br>";
        $uploadOk = 1;
    }
    else {
        echo "File Is Not An Image.<br>";
        $uploadOk = 0;
    }
}
// Check If File Already Exists
if(file_exists($target_file)){
    echo "Sorry File Already Exists.<br>";
    $uploadOk = 0;
}
// Check File Size
if($_FILES["fileToUpload"]["size"] > 500000){
    echo "Sorry Your File Is Too Large.<br>";
    $uploadOk = 0;
}
// Allow Certain File Formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "gif" && $imageFileType != "jpeg"){
    echo "Sorry Only JPG, PNG & GIF Files Are Allowed.<br>";
    $uploadOk = 0;
}
// Check If $uploadOk Is Set To 0 By Any Error
if($uploadOk == 0){
    echo "Sorry Your File Cannot Be Uploaded Due To An Error.<br> ";
}
// If Everything Is Ok, Try To Upload The File
else{
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
        echo "The File ". basename($_FILES["fileToUpload"]["name"]. " Has Been Uploaded");
    }
    else{
        echo "Sorry There Was An Error In Uploading Your File.<br>";
    }
}
?>