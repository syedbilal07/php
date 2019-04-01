<html>
    <head>
        <title>Form Validation</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
    <?php
    $name = $email = $time = $details = $gender = "";
    $nameErr = $emailErr = $timeErr = $detailsErr = $genderErr = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['name'])){
            $nameErr = "Name Is Required <br>";
        }
        else{
            $name = test_input($_POST['name']);
        }
        if(empty($_POST['email'])){
            $emailErr = "Email Is Required <br>";
        }
        else{
            $email = test_input($_POST['email']);
            // Check If Email Is Well Formed Or Not
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr = "Email Must Be Correct <br>";
            }
        }
        if(empty($_POST['time'])){
            $timeErr = "Time Must Be Specified <br>";
        }
        else{
            $time = test_input($_POST['time']);
        }
        if(empty($_POST['details'])){
            $detailsErr = "Details Should Be Filled <br>";
        }
        else{
            $details = test_input($_POST['details']);
        }
        if(empty($_POST['gender'])){
            $genderErr = "Gender Should Be Specified <br>";
        }
        else{
            $gender = test_input($_POST['gender']);
        }
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>PHP Form</h2>
    <p><span class = "error">* Required Field.</span></p>
    <form method = "post" action = "index1.php">
        <table class = "table table-responsive">
            <div class="form-control">
                <tr>
                    <td>Name:</td>
                    <td><input type = "text" name = "name" class="form-control"></td>
                    <span class = "error"><?php echo $nameErr ?></span>
                </tr>

                <tr>
                    <td>E-mail:</td>
                    <td><input type = "text" name = "email" class="form-control"></td>
                    <span class = "error"><?php echo $emailErr ?></span>
                </tr>

                <tr>
                    <td>Specific Time:</td>
                    <td><input type = "text" name = "time" class="form-control"></td>
                    <span class = "error"><?php echo $timeErr ?></span>
                </tr>

                <tr>
                    <td>Class details:</td>
                    <td><textarea class="form-control" name = "details" rows = "5" cols = "40"></textarea></td>
                    <span class = "error"><?php echo $detailsErr ?></span>
                </tr>

                <tr>
                    <td>Gender:</td>
                    <td>
                        <div class="radio">
                            <label class="radio-inline"><input type="radio" name = "gender" value = "male">Male</label>
                        </div>
                        <div class="radio">
                            <label class="radio-inline"><input type="radio" name = "gender" value = "female">Female</label>
                            <span class = "error"><?php echo $genderErr ?></span>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type = "submit" name = "submit" value = "Submit" class="form-control btn btn-info">
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
    echo "The Time Is : $time";
    echo "<br><br>";
    echo "Your Class Details Are : $details";
    echo "<br><br>";
    echo "You Are ". strtoupper($gender);
    ?>
    </body>
</html>