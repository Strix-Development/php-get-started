<!DOCTYPE html>
<html>
    <head>
        <title>
            Object
        </title>
    </head>
    <body>
        <h1>Object</h1>
        <?php
        class Toys{
            public $name;
            function fname($name){
                echo $this->fname=$name;
            }
        }
        $object= new Toys;
        $object->fname('Trucks');
        echo "<br>";
        class TV{
            public $name;
            public $No;
            function fname($channels){
              return $this->fname=$channels;
            }
            function number($ch_no){
            return $this->number=$ch_no;
            }
        }        
        $obj= new TV;
        echo'Name: '.$obj->fname('ABC');
        echo"<br>";
        echo 'No:'.$obj->number('10');
        echo"<br>";

        class Khilone{
            public $name;
            public $color;
            public $quantity;

            function fname($name){
                return $this->fname=$name;
            }
            function fname1($color){
             return   $this->fname1=$color;
            }
            function fname2($quantity){
                return $this->fname2=$quantity;
            }
        }
       $object= new Khilone;
       echo 'Name: '.$object->fname('Truck')."<br>";
       echo 'Color: '.$object->fname1('Black')."<br>";
       echo "<br>";
       echo 'Quantity: '.$object->fname2('2');
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