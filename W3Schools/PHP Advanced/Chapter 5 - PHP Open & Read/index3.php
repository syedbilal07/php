<html>
    <head>
        <title>PHP Open & Read</title>
    </head>
    <body>
    <?php
    $myfile = fopen("webdictionary.txt", "r") or die("Cannot Open File");
    while(!feof($myfile)){
        echo fgets($myfile). "<br>";
    }
    fclose($myfile);
    ?>
    </body>
</html>