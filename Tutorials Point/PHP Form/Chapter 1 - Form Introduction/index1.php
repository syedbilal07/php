<html>
    <head>
        <title>Form Introduction</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $gender = test_input($_POST['gender']);
        $comment = test_input($_POST['comment']);
        $website = test_input($_POST['website']);
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>PHP Form</h2>

    <form method = "post" action = "index1.php">
        <table class = "table table-responsive">
            <div class="form-control">
            <tr>
                <td>Name:</td>
                <td><input type = "text" name = "name" class="form-control"></td>
            </tr>

            <tr>
                <td>E-mail:</td>
                <td><input type = "text" name = "email" class="form-control"></td>
            </tr>

            <tr>
                <td>Specific Time:</td>
                <td><input type = "text" name = "website" class="form-control"></td>
            </tr>

            <tr>
                <td>Class details:</td>
                <td><textarea class="form-control" name = "comment" rows = "5" cols = "40"></textarea></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <div class="radio">
                        <label class="radio-inline"><input type="radio" name = "gender" value = "male">Male</label>
                    </div>
                    <div class="radio">
                        <label class="radio-inline"><input type="radio" name = "gender" value = "female">Female</label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <input type = "submit" name = "submit" value = "Submit" class="form-control btn btn-success">
                </td>
            </tr>
            </div>
        </table>
    </form>
    <?php
        echo "Your Given Details Are :<br><br>";
        echo "Your Name Is : $name";
        echo "<br><br>";
        echo "Your Email Is : $email";
        echo "<br><br>";
        echo "The Time Is : $website";
        echo "<br><br>";
        echo "Your Class Details Are : $comment";
        echo "<br><br>";
        echo "You Are ". strtoupper($gender);
    ?>
    </body>
</html>