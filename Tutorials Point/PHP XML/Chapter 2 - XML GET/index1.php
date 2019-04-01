<html>
    <head>
        <title>XML GET</title>
    </head>
    <body>
    <?php
        $xml = simplexml_load_file("note.xml") or die("Error : Cannot Load File");
        echo "The Course Is : ". $xml-> COURSE. "<br>";
        echo "The Country Is : ". $xml -> COUNTRY. "<br>";
        echo "The Company Is : ". $xml -> COMPANY. "<br>";
        echo "The Price Is : ". $xml -> PRICE;
    ?>
    </body>
</html>