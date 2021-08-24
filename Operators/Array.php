<!DOCTYPE html>
<html>
<head>
    <title>Operators</title>
</head>
<body>
    <?php
        echo "<h1>Array Operators</h1>";
        echo "<h2>Union</h2>";
        $a= array("a"=>"apple","b"=>"ball");
        $b= array("a"=>"pear","b"=>"stawberry","c"=>"cherry");
        $c= $a+$b;
        var_dump ($c);
        echo "<br>";
        $a= ["a"=>"apple","b"=>"ball"];
        $b= ["a"=>"pear","b"=>"stawberry","c"=>"cherry"];
        $c= $a+$b;
        var_dump ($c);
        echo "<br>";
        $a= ["a"=>"apple","b"=>"ball"];
        $b= ["a"=>"pear"];
        $c= $b+$a;
        var_dump ($c);
        echo "<br>";
        echo "<h2>Equality and Identity</h2>";
        $a=["mango","apple"];
        $b=[1 => "apple", 0=> "mango"];
        var_dump ($a==$b);
        echo "<br>";
        var_dump ($a===$b);
        echo "<br>";
        $a=["mango","apple"];
        $b=[0 => "mango", 1=> "apple"];
        var_dump ($a==$b);
        echo "<br>";
        var_dump ($a===$b);
        echo "<br>";
        echo "<h2>Inequality</h2>";
        $a=["mango","apple"];
        $b=[1 => "apple", 0=> "mango"];
        var_dump ($a!==$b);
        echo "<br>";
        $a=["mango","apple"];
        $b=[0 => "mango", 1=> "apple"];
        var_dump ($a<>$b);
        echo "<br>";
        echo "<h2>Non-identity</h2>";
        $a=["a"=>"red","b"=>"green"];
        $b=["c"=>"red","d"=>"green"];
        var_dump($a!==$b);
        echo "<br>";
        $a=["a"=>"red","b"=>"green"];
        $b=["a"=>"red","b"=>"green"];
        var_dump($a!==$b);
        echo "<br>";
        echo "<h1>Array Functions</h1>";
        $variable=array("firsT"=>1,"Second"=>2);
        print_r(array_change_key_case($variable,CASE_UPPER ));
        echo "<br>";
        $variable=array("FIRSt"=>1,"SEcond"=>2);
        print_r(array_change_key_case($variable,CASE_LOWER));
    ?>
</body>
</html>