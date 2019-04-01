<html>
    <head>
        <title>PHP & XML</title>
    </head>
    <body>
    <?php
    $channel = array('title' => 'Whats For Dinner',
                     'link' => 'http://menu.example.com/',
                     'description' => 'Choose What To Eat Tonight.');
    print "<channel>\n";
    foreach($channel as $element => $content){
        print "<$element>";
        print htmlentities($content);
        print "</$element\n>";
    }
    print "</channel>";
    ?>
    </body>
</html>