<html>
    <head>
        <title>PHP Files & IO</title>
    </head>
    <body>
    <?php
    $filename = "file.txt";
    $file = fopen($filename, "r");
    if(!$file){
        echo "Error In Reading File";
        exit();
    }
    $filesize = filesize($filename);
    $filetext = fread($file,$filesize);
    fclose($file);
    echo "File Size : $filesize bytes <br>";
    echo "<pre>$filetext</pre>";
    ?>
    </body>
</html>