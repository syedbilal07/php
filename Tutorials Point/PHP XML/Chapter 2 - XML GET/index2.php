<html>
    <head>
        <title>XML GET</title>
    </head>
    <body>
        <?php
            $xml = simplexml_load_file("books.xml") or die("Error: Cannot Load File");
            foreach($xml->children() as $books){
                echo "The Title Is : ". $books->title. "<br>";
                echo "The Tutor Is : ".$books->tutor. "<br>";
                echo "The Duration Is : ".$books->duration. "<br>";
                echo "The Price Is : ".$books->price. "<br>";
                echo "-----------------------------------------<br>";
            }
        ?>
    </body>
</html>