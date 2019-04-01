<html>
    <head>
        <title>MySQL Prepared</title>
    </head>
    <body>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'guests';
    $con = new mysqli($servername,$username,$password,$database);
    if($con->connect_error){
        die("Cannot Connect To Database ". $con->connect_error. "<br>");
    }
    else{
        echo "Connected Successfully To Database <br>";
    }
    // Preapre & Bind
    $sql = $con->prepare("INSERT INTO myguests(firstname,lastname,email) VALUES(?,?,?)");
    $sql->bind_param("sss", $firstname, $lastname, $email);
    // Set Parameters & Execute
    $firstname = 'John';
    $lastname = 'Doe';
    $email = 'johndoe@example.com';
    $sql->execute();

    $firstname = 'Ali';
    $lastname = 'Arshad';
    $email = 'aliarshad@yahoo.com';
    $sql->execute();

    $firstname = 'Shahrukh';
    $lastname = 'Khan';
    $email = 'srk@hotmail.com';
    $sql->execute();

    echo "New Records Inserted Successfully <br>";
    $sql->close();
    $con->close();
    ?>
    </body>
</html>