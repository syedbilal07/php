<html>
    <head>
        <title>PHP Object Oriented</title>
    </head>
    <body>
    <?php
    class BaseClass
    {
        public function test()
        {
            echo "BaseClass Function Test Called";
        }
        final public function moreTest()
        {
            echo "BaseClass Function MoreTest Called";
        }
    }
    class childClass extends BaseClass
    {
        public function moreTest()
        {
            echo "ChildClass Function MoreTest Called";
        }
    }
    ?>
    </body>
</html>