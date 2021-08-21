<!DOCTYPE html>
<html>
    <head>
        <title>
            Constant
        </title>
    </head>
    <body>
    <?php
    define("CONSTANT","HELLO THIS IS FIRST");
    echo CONSTANT."<br>";
    echo CONSTANT."<br>";
    echo CONSTANT."<br>";
    define("name",array('Cat','Dog','Meow','Bhaw'));
    echo name[0]."<br>";
    echo name[2]."<br>";
    echo name[1]."<br>";
    echo name[3]."<br>";
    define("a","This is second");
    echo a."<br>";
    define('B', 'This is third');
    echo B;
    ?>
    </body>
</html>
