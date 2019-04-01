<html>
    <head>
        <title>PHP Files & IO</title>
    </head>
    <body>
    <?php
    $filename = "write.txt";
    $file = fopen($filename,"w");
    if($file == false){
        echo "Error In Opening File";
        exit();
    }
    fwrite($file,"This Is PHP");
    fclose($file);
    ?>
    </body>
</html>