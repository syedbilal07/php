<?php
if( $_POST["name"] || $_POST["age"] ){
    echo "Welcome ". $_POST['name']. "<br />";
    echo "You are ". $_POST['age']. " years old.";
}
?>
<html>
    <head>
        <title>PHP Web Concepts</title>
    </head>
    <body>
    <form action = "index2.php" method = "POST">
        Name: <input type = "text" name = "name" />
        Age: <input type = "text" name = "age" />
        <input type = "submit" />
    </form>
    </body>
</html>