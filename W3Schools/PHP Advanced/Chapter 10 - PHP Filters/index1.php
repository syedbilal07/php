<html>
    <head>
        <title>PHP Filters</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <table class="table table-responsive table-striped">
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
        foreach(filter_list() as $id => $name){
            echo '<tr><td>'. $name. '</td><td>'. filter_id($name). '</td></tr>';
        }
        ?>
    </table>
    </body>
</html>