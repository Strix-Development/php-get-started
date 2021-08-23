<!DOCTYPE html>
<html>
    <head>
        <title>
            Callback
        </title>
    </head>
    <body>
        <h1>Callback</h1>
        <?php
        function fname($name){
        return strlen($name);
        }
        $var=array('apple','mango','grapes');
        $var=array_map("fname",$var);
        print_r($var);
        echo "<br>";

        function fname1($name){
            return ($name);
        }
        $var=['apple','mango','grapes'];
        $var=array_map("fname1",$var);
        print_r($var);
        echo "<br>";

        function fname2($name){
        return ($name);
        }
        $var=array('car','bike');
        $var=array_map("fname2",$var);
        print_r($var);
        ?>
    </body>
</html>