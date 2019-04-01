<html>
    <head>
        <title>PHP Classes</title>
    </head>
    <body>
    <?php
    class Person{
        var $name;

        function setName($new_name){
            $this->name = $new_name;
        }

        function getName(){
            return $this->name;
        }
    }
    ?>
    </body>
</html>