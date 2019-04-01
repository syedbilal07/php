<html>
    <head>
        <title>PHP Open & Read</title>
    </head>
    <body>
    <?php
    $myfile = fopen("webdictionary.txt", "r") or die("Unable To Open File!");
    echo fread($myfile, filesize("webdictionary.txt"));
    fclose($myfile);
    ?>
    </body>
</html>