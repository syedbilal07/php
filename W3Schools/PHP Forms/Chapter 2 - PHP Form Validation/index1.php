<html>
    <head>
        <title>PHP Form Validation</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php
    $name = $email = $website = $comment = $gender = "";
    $gender = (isset($_GET['gender']) ? $_GET['gender'] : null);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $website = test_input($_POST['website']);
        $comment = test_input($_POST['comment']);
        $gender = test_input($_POST['gender']);
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label class="control-label">Name : </label><input type="text" class="form-control" name="name">
        <br><br>
        <label class="control-label">Email : </label><input type="text" class="form-control" name="email">
        <br><br>
        <label class="control-label">Website : </label><input type="text" class="form-control" name="website">
        <br><br>
        <label class="control-label">Comment : </label><textarea name="comment" class="form-control" rows="5" cols="40"></textarea>
        <br><br>
        <label class="control-label">Gender : </label>
        <input type="radio" name="gender" class="form-control" value="female">Female
        <input type="radio" name="gender" class="form-control" value="male">Male
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
</html>