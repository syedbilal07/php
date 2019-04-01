<html>
    <head>
        <title>PHP Object Oriented</title>
    </head>
    <body>
    <?php
    class Person
    {
        var $name;
        function __construct($person_name)
        {
            $this->name = $person_name;
        }
        public function getName()
        {
            return $this->name;
        }
        protected function setName($new_name)
        {
            if($this->name != "Jimmy Two Guns"){
                $this->name = strtoupper($new_name);
            }
        }
    }
    class Employee extends Person
    {
        protected function setName($new_name)
        {
            if($new_name == "Stefan Sucks"){
                $this->name = $new_name;
            }
            else if($new_name == "Johnny Fingers") {
                person::setName($new_name);
            }
        }
        function __construct($employee_name)
        {
            $this->setName = $employee_name;
        }
    }
    ?>
    </body>
</html>