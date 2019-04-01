<html>
    <head>
        <title>PHP Object Oriented</title>
    </head>
    <body>
    <?php
    include('class1.php');
    $person1 = new Person();
    $person2 = new Person();

    $person1-> setName("Syed Bilal");
    $person2-> setName("Huzaifa Hassan");

    echo "Person-1 Full Name Is : ". $person1->getName()."<br>";
    echo "Person-2 Full Name Is : ". $person2->getName();
    ?>
    </body>
</html>