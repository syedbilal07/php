<html>
    <head>
        <title>PHP GET & POST</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php
    if($_POST["name"] || $_POST["age"]){
        echo "Welcome ". $_POST["name"]."<br>";
        echo "You Are ". $_POST["age"]. " Years Old";
    }
    ?>
    <form action = "index1.php" method = "GET" class="form-control">
        Name: <input type = "text" name = "name" class="control-label" />
        Age: <input type = "text" name = "age" class="control-label" />
        <input type = "submit" class="btn btn-success btn-lg"/>
    </form>
    </body>
</html>