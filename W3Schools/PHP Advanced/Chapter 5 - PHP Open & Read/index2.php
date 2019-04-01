<html>
    <head>
        <title>PHP Open & Read</title>
    </head>
    <body>
    <?php
    $myfile = fopen("webdictionary.txt", "r") or die("Cannot Open File");
    echo fgets($myfile);
    fclose($myfile);
    ?>
    </body>
</html>