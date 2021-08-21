<!DOCTYPE html>
<html>
    <head>
        <title>
            Iterable
        </title>
    </head>
    <body>
        <?php
        function first(iterable $try){
            foreach ($try as $item){
            echo $item;
            }
        }
        $new=["hello this is first"];
        first($new);
        echo "<br>";

        function haha(iterable $new){
            foreach($new as $item){
                echo $item;
            }
        }
        $variable=["this is second "];
        haha($variable);
        echo "<br>";

        function another(iterable $again){
            foreach($again as $item){
                echo $item;
            }
        }
        $var=['Black ','Red ','Green ','Blue'];
        another($var);
        echo "<br>";
        
        class Fruit{
            public $name;
            function set_name($name){
                $this->name =$name;
            }
            function get_name(){
                return $this->name;
            }
        }
        $apple = new Fruit();
        $apple->set_name('Apple');
        echo $apple->get_name();
        echo "<br>";

        class fruits{
            public $name;
            public $color;
            function set_name($set){
                $this->name=$set;
            }
            function get_name(){
                return $this->name;
            }
            function set_color($col){
                $this-> color=$col;
            }
            function get_color(){
               return $this-> color;
            }

        }
        $apple= new fruits();
        $apple->set_name('Apple');
        echo "Name:".$apple->get_name();
        echo "<br>";
        $apple->set_name('Red');
        echo "Color:".$apple->get_name();
        echo "<br>";

        class foo{
            function do_foo(){
                echo "Doing Foo";
            }
        }
        $bar= new foo;
        $bar->do_foo();
        echo"<br>";

        class hello{
            function hi(){
                echo "Hello World";
            }
        }
        $hii= new hello;
        $hii->hi()
        

        ?>
    </body>
</html>