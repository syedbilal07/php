<html>
    <head>
        <title>PHP Arrays</title>
    </head>
    <body>
    <?php
    echo "First Way Of Associative Array : <br><br>";
    $arr = array("Muhammad" => 50000, "Qadir" => 45000, "Zara" => 40000);
    echo "Salary Of Muhammad Is : ". $arr['Muhammad']."<br>";
    echo "Salary Of Qadir Is : " .$arr['Qadir']."<br>";
    echo "Salary Of Zara Is : ".$arr['Zara']."<br><br>";
    echo "Second Way Of Associative Array : <br><br>";
    $salary['Huzaifa'] = 50000;
    $salary['Bilal'] = 45000;
    $salary['Omer'] = 20000;
    echo "Salary Of Huzaifa Is : ".$salary['Huzaifa']."<br>";
    echo "Salary Of Bilal Is : ".$salary['Bilal']."<br>";
    echo "Salary Of Omer Is : ".$salary['Omer'];
    ?>
    </body>
</html>