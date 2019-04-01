<html>
    <head>
        <title>PHP Object Oriented</title>
    </head>
    <body>
    <?php
    class Name
    {
        var $firstName;
        var $lastName;

        function name($first_name, $last_name)
        {
            $this->firstName = $first_name;
            $this->lastName = $last_name;
        }
        function toString()
        {
            return($this->lastName. ", ". $this->firstName);
        }
    }
    class Child extends Name
    {
        var $middleName;
        function Child($first_name,$middle_name,$last_name)
        {
            Name::Name($first_name,$last_name);
            $this->middleName = $middle_name;
        }
        function toString()
        {
            return(Name::toString(). " ". $this->middleName);
        }
    }
    ?>
    </body>
</html>