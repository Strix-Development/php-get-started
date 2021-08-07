<!DOCTYPE html>
<html>
    <head>
        <title>
            Data Types
        </title>
    </head>
    <body>
        <?php
        //BOOLEAN
        $a=True;
        echo gettype($a)."<br>";
        $a=False;
        var_dump ($a);
        echo "<br>";
        $a=False;
        echo gettype($a)."<br>";
        $a=True;
        var_dump($a);
        echo "<br>";
        echo gettype($a)."<br>";
        //INTEGER
        $a=56789;
        echo gettype($a)."<br>";
        $a=1234;
        var_dump($a);
        echo"<br>";
        $a= 123;
        $a1=(string)$a;
        var_dump($a1);
        echo "<br>";
        $a=45.6;
        $a1=(bool)$a;
        echo gettype($a1)."<br>";
        var_dump($a1);
        echo "<br>";
        $a=0;
        $a1=(bool)$a;
        echo gettype($a1)."<br>";
        var_dump($a1);
        echo "<br>";
        //FLOATING POINT NUMBERS
        $a=12345.67890;
        echo gettype($a)."<br>";
        $a=12.3;
        var_dump($a);
        echo "<br>";
        $a="1234";
        $a1=(float)$a;
        var_dump($a1);
        echo "<br>";
        echo gettype($a1)."<br>";
        //STRING
        $a="hello";
        echo gettype($a)."<br>";
        $a='world';
        var_dump($a);
        echo "<br>";
        $a= "HELLO";
        $a1=(bool)$a;
        var_dump($a1);
        echo "<br>";
        echo gettype ($a1)."<br>";
        $a='0';
        $a1=(bool)$a;
        echo gettype($a1)."<br>";
        var_dump($a1);
        echo "<br>";
        //HEREDOC
        $a=<<<EOD
        Hello.
        EOD;
        var_dump($a);
        echo "<br>";
        echo gettype($a)."<br>";
        //NOWDOC
        $a=<<<'EOD'
        hello.
        EOD;
        var_dump($a);
        echo "<br>";
        echo gettype($a)."<br>";
        //NUMERIC STRINGS
        $a=10+"10.5";
        echo gettype($a)."<br>";
        var_dump($a);
        echo "<br>";
        $a=100+100+100.5;
        var_dump($a);
        echo "<br>";
        $a=-100+100-100-200;
        var_dump($a);
        echo "<br>";
        echo gettype($a)."<br>";
        //NULL
        $a= null;
        echo gettype($a)."<br>";
        var_dump($a);
        echo "<br>";
        $a="TRUE";
        var_dump(is_string($a));
        ?>
    </body>
</html>