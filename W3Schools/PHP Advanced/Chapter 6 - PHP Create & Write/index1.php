<html>
    <head>
        <title>PHP Create & Write</title>
    </head>
    <body>
    <?php
    $filename = fopen("myfile.txt", "w") or die("Unable To Create File");
    $txt = "Sadia \n";
    fwrite($filename, $txt);
    $txt = "Bilal \n";
    fwrite($filename, $txt);
    fclose($filename);
    ?>
    </body>
</html>