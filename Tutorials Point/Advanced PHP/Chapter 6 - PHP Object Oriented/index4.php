<html>
    <head>
        <title>PHP Object Oriented</title>
    </head>
    <body>
    <?php
    class Foo
    {
        public static $mystatic = "foo";
        public function staticFunction()
        {
            return self::$mystatic;
        }
    }
    print Foo::$mystatic. "<br>";
    $foo = new Foo();
    print $foo->staticFunction(). "<br>";
    ?>
    </body>
</html>