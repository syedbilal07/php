<html>
    <head>
        <title>PHP Object Oriented</title>
    </head>
    <body>
    <?php
    include('class2.php');
    $person1 = new Person("Syed Bilal");
    echo "Person 1 Name Is : ". $person1->getName();
    ?>
    </body>
</html>