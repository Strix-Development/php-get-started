<?php


for($a=1; $a<=10; $a++){

    if($a==5){
        goto abc;
    
    }
    echo $a . '<br>';

}

echo 'apple';
abc:
echo 'grapes';

echo "<br>";

for($b=1; $b<=10; $b++){

    if($b==6){
        goto apple;
    }

    echo $b ."<br>";
}

echo 'you should know';
echo 'look me in the face';
apple:
echo 'legends never dies';


echo "<br>";


$c=2;

switch($c){
    case 1;
    echo 'what is up';
    break;
    case 2;
    echo 'how you been ';
    break;
    case 3;
    echo 'hows it goin';
    goto name;
    default;
    echo 'im headed to';
}


echo 'hey there ';
name:
echo 'come here ';




?>