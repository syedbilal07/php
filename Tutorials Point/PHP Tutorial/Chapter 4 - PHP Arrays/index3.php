<html>
    <head>
        <title>PHP Arrays</title>
    </head>
    <body>
    <?php
    $marks = array(
        "Huzaifa" => array(
            "Physics" => 55,
            "Chemistry" => 76,
            "Maths" => 85
        ),
        "Bilal" => array(
            "Physics" => 89,
            "Chemistry" => 66,
            "Maths" => 95
        ),
        "Omer" => array(
            "Physics" => 43,
            "Chemistry" => 87,
            "Maths" => 64
        )
    );
    echo "Marks Of Huzaifa In Maths Is : ".$marks['Huzaifa']['Maths']."<br>";
    echo "Marks Of Bilal In Physics Is ".$marks['Bilal']['Physics']."<br>";
    echo "Marks Of Omer In Chemistry Is ".$marks['Omer']['Chemistry'];
    ?>
    </body>
</html>