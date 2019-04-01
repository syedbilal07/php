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
    try {
        $con = mysqli_connect($servername, $username, $password, $database);
        $con = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully To Database <br>";
        // Prepare & Bind
        $sql = $con->prepare("INSERT INTO myguests(firstname,lastname,email) VALUES(:firstname,:lastname,:email)");
        $sql->bindParam(':firstname',$firstname);
        $sql->bindParam(':lastname',$lastname);
        $sql->bindParam(':email',$email);
        // Set Parameters & Execute
        $firstname = 'Syed';
        $lastname = 'Jawwad';
        $email = 'jawwadali@outlook.com';
        $sql->execute();

        $firstname = 'Maira';
        $lastname = 'Imtiaz';
        $email = 'mairabaig@yahoo.com';
        $sql->execute();

        $firstname = 'Mubarak';
        $lastname = 'Baloch';
        $email = 'mubarakbaloch452@hotmail.com';
        $sql->execute();
        echo "Data Inserted Successfully <br>";
    }
    catch(PDOException $e){
        echo "Error ". $sql. "<br>". $e->getMessage();
    }
    $con = null;
    ?>
    </body>
</html>