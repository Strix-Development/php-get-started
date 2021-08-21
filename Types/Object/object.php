<!DOCTYPE html>
<html>
    <head>
        <title>
            Object
        </title>
    </head>
    <body>
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
       echo 'Quantity: '.$object->fname2('2');

        ?>
    </body>
</html>