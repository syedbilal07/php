 <?php
    $q = intval($_GET['q']);
    $con = mysqli_connect('localhost', 'root', '', 'guests');
    if(!$con){
        die("Cannot Connect To Database ". mysqli_error($con). "<br>");
    }
    else{
        echo "Connected Successfully To Database <br>";
    }
    $sql = "SELECT * FROM employee WHERE id = '".$q."'";
    $result = mysqli_query($con,$sql);
    echo "<table class='table table-responsive table-hover table-striped'>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
    <th>Hometown</th>
    <th>Job</th>
    </tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>". $row["FirstName"]. "</td>";
        echo "<td>". $row["LastName"]. "</td>";
        echo "<td>". $row["Age"]. "</td>";
        echo "<td>". $row["Hometown"]. "</td>";
        echo "<td>". $row["Job"]. "</td>";
    }
    echo "</table>";
    mysqli_close($con);
 ?>