<html>
    <head>
        <title>PHP Object Oriented</title>
    </head>
    <body>
    <?php
    class Person{
        var $name;
        function __construct($person_name)
        {
           $this->name = $person_name;
        }
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