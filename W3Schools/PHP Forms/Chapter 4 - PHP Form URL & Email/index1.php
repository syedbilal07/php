<html>
    <head>
        <title>PHP Form URL & Email</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php
    $name = $email = $website = $comment = $gender = "";
    $nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['name'])){
            $nameErr = "Name Is Empty";
        }
        else {
            $name = test_input($_POST['name']);
            if(!preg_match("/^[a-zA-Z ]*$/",$name)){
                $nameErr = "Only Letters & White Spaces Are Allowed";
            }
        }
        if(empty($_POST['email'])){
            $emailErr = "Email Is Empty";
        }
        else {
            $email = test_input($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid Email Format";
            }
        }
        if(empty($_POST['website'])) {
            $websiteErr = "Website Cannot Be Empty!";
        }
        else {
            $website = test_input($_POST['website']);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
                $websiteErr = "URL Is Invalid";
            }
        }
        if(empty($_POST['comment'])){
            $commentErr = "Please Comment";
        }
        else {
            $comment = test_input($_POST['comment']);
        }
        if(empty($_POST['gender'])){
            $genderErr = "Specify Your Gender";
        }
        else {
            $gender = test_input($_POST['gender']);
        }
    }
    function test_input($data){
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        return $data;
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label class="control-label">Name : </label><input type="text" class="form-control" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        <label class="control-label">Email : </label><input type="text" class="form-control" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        <label class="control-label">Website : </label><input type="text" class="form-control" name="website">
        <span class="error">* <?php echo $websiteErr;?></span>
        <br><br>
        <label class="control-label">Comment : </label><textarea name="comment" class="form-control" rows="5" cols="40"></textarea>
        <span class="error">* <?php echo $commentErr;?></span>
        <br><br>
        <label class="control-label">Gender : </label>
        <input type="radio" name="gender" class="form-control" value="female">Female
        <input type="radio" name="gender" class="form-control" value="male">Male<br /><br />
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit">
    </form>
    </body>
    <?php
    echo "Your Name Is : " . $name . "<br>";
    echo "Your Email Address Is : " . $email . "<br>";
    echo "Your Website Is : " . $website . "<br>";
    echo "Your Comments Are : " . $comment . "<br>";
    echo "Your Gender Is : " . strtoupper($gender);
    ?>
    </body>
</html>