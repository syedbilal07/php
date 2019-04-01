 <?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     $name = $_POST['name'];
     $email = $_POST['email'];
     if(empty($name) || empty($email)){
         echo "Please Input Name & Email";
     }
     else{
         echo "Hello ".$name. ". Your Email Address Is ". $email;
     }
 }
 ?>