<!DOCTYPE html>
<html>
<head>
    <title>Operators</title>
</head>
<body>
    <?php
      echo "<h1>Type Operators</h1>";
      class Toys{
        public $name;
        function fname($name){
            echo $this->fname=$name;
        }
    }
    $object= new Toys;
    var_dump($object instanceof Toys);
    echo "<br>";
    class mine{
        public $name;
        function fname($name){
            echo $this->fname=$name;
        }
    }
    $obj= new mine;
    var_dump($object instanceof mine);
    echo "<br>";
    ?>
</body>
</html>