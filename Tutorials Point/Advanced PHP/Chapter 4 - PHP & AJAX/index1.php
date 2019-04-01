<html>
    <head>
        <title>PHP & AJAX</title>
    </head>
    <body>
    <?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $con = mysqli_connect($host,$user,$pass,"myphpdb");
    if(!$con){
        die("Cannot Connect To Database Engine ". mysqli_error($con))."<br>";
    }

//    // Retrieve data from Query String
    $age = (!empty($_GET['age']) ? $_GET['age'] : null);
    $sex = (!empty($_GET['sex']) ? $_GET['age'] : null);
    $wpm = (!empty($_GET['wpm']) ? $_GET['age'] : null);
    $age = $_GET['age'];
    $wpm = $_GET['wpm'];
    $sex = $_GET['sex'];
    // Escape User Input to help prevent SQL Injection
    $age = mysqli_real_escape_string($con,$age);
    $sex = mysqli_real_escape_string($con,$sex);
    $wpm = mysqli_real_escape_string($con,$wpm);
    //build query
    $query = "SELECT Name,Age,Sex,WPM FROM ajax WHERE age = '$age'";

    if(is_numeric($age)){
        $query .= "AND Age <= $age";
    }
    if(is_numeric($wpm)){
        $query .= " AND WPM <= $wpm";
    }
    //Execute query
    $result = mysqli_query($con,$query);


   // Build Result String
    echo "<table>";
    echo "<tr>";
    echo  "<th>Name</th>";
    echo "<th>Age</th>";
    echo "<th>Sex</th>";
    echo "<th>WPM</th>";
    echo "</tr>";
    // Insert a new row in the table for each person returned
    while($row = mysqli_fetch_row($result)){
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    while($row = mysqli_fetch_row($result)){
        echo $row[0];
        echo $row[1];
        echo $row[2];
        echo $row[3];
    }
    mysqli_close($con);
    ?>
    </body>
</html>