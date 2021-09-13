<!DOCTYPE html>
<html>
    <head>
        <title>
            Iterable
        </title>
    </head>
    <body>
        <h1>Iterable</h1>
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
        ?>
    </body>
</html>