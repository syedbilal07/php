<html>
    <head>
        <title>PHP Super Globals</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_REQUEST['fname'];
        if(empty($name)){
            echo "Name Is Empty!";
        }
        else{
            echo "Hello ". $name;
        }
    }
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label class="control-label">Name : </label><input type="text" class="form-control" name="fname">
        <input type="submit" class="btn btn-success btn-lg">
    </form>
    </body>
</html>