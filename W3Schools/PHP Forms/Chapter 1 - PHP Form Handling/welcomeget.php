 <?php
 if($_SERVER["REQUEST_METHOD"] == "GET"){
     $name = $_GET['name'];
     $email = $_GET['email'];
     if(empty($name) || empty($email)){
         echo "Please Input Name & Email";
     }
     else{
         echo "Hello ".$name. ". Your Email Address Is ". $email;
     }
 }
 ?>