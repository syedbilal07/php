<html>
<head>
    <title>Complete Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
<?php
    $name = $email = $time = $details = $gender = $subject = "";
    $nameErr = $emailErr = $timeErr = $detailsErr = $genderErr = $subjectErr = "";
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
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr = "Email Must Be Correct <br>";
            }
        }
        if(empty($_POST['time'])){
            $timeErr = "Time Is Required <br>";
        }
        else{
            $time = test_input($_POST['time']);
        }
        if(empty($_POST['details'])){
            $detailsErr = "Class Details Must Be Correct <br>";
        }
        else{
            $details = test_input($_POST['details']);
        }
        if(empty($_POST['subject'])){
            $subjectErr = "Subject Must Be Selected";
        }
        else{
            $subject = test_input($_POST['subject']);
        }
        if(empty($_POST['gender'])){
            $genderErr = "Gender Must Be Specified <br>";
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
                <span class="error"><?php echo $nameErr ?></span>
            </tr>

            <tr>
                <td>E-mail:</td>
                <td><input type = "text" name = "email" class="form-control"></td>
                <span class="error"><?php echo $emailErr ?></span>
            </tr>

            <tr>
                <td>Time:</td>
                <td><input type = "text" name = "time" class="form-control"></td>
                <span class="error"><?php echo $timeErr ?></span>
            </tr>

            <tr>
                <td>Class Details:</td>
                <td><textarea class="form-control" name = "details" rows = "5" cols = "40"></textarea></td>
                <span class="error"><?php echo $detailsErr ?></span>
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
                    <span class="error"><?php echo $genderErr ?></span>
                </td>
            </tr>
            <tr>
                <td>Select:</td>
                <td>
                    <div class="form-group">
                    <select name = "subject" size = "6" multiple class="form-control">
                        <option value = "Android">Android</option>
                        <option value = "Java">Java</option>
                        <option value = "C#">C#</option>
                        <option value = "SQL">SQL</option>
                        <option value = "Angular">Angular JS</option>
                        <option value = "VB">Visual Basic</option>
                    </select>
                    </div>
                </td>
                <?php
                if(!isset($_POST['subject'])){ ?>
                    <span class = "error">* <?php echo "Subject Must Be Selected"; ?></span>
                <?php } ?>

            </tr>

            <tr>
                <td>Agree</td>
                <div class="checkbox">
                <td><input type = "checkbox" name = "checked" value = "1"></td>
                </div>
                <?php if(!isset($_POST['checked'])){ ?>
                    <span class = "error">* <?php echo "You Must Agree To The Terms <br><br>";?></span>
                <?php } ?>
            </tr>

            <tr>

            <tr>
                <td>
                    <input type = "submit" name = "submit" value = "Submit" class="form-control btn btn-success">
                </td>
            </tr>
        </div>
        </table>
    </form>
<?php
    echo "Given Details Are : <br> <br>";
    echo "Your Name Is : $name <br> <br>";
    echo "Your Email Address Is : $email <br> <br>";
    echo "Time Is : $time <br> <br>";
    echo "Class Details Are : $details <br> <br>";
    echo "Gender Is : ". strtoupper($gender)."<br> <br>";
    echo "Selected Subject Is : $subject <br> <br>";
?>
</body>
</html>