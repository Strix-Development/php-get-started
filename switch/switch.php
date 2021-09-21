<?php

$favcolor = "green";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";

$today= date("D");
switch($today){
  case "Mon":
  echo "Today is monday.Worst day";
  break;

  case "Tue":
  echo "Today is tuesday.Decent day";
  break;

  case "Wed":
  echo "Today is wednesday.Excited day";
  break;

  case "Thu":
  echo "Today is thursday.Fantastic day";
  break;

  case "Fri":
  echo "Today is friday.Party day";
  break;


  case "Sat":
  echo "Today is saturday.Holiday";
  break;

  case "Sun":
  echo "Today is sunday.Best day";
  break;

  default :
  echo "Nothing is specified";
}

echo date("Y");
// echo time()
echo "<br>";
echo "<br>";

?>

<?php

// const hello='ishan sharma';
// return hello;

function name($name){
  return $name ."ishan";
}
function hello($name, $ishan){
  echo $ishan($name);

}
hello("hi","name");
echo "<br>";
?>

<?php

$var="hello";
$$var="world";

echo "$var ${$var}";

echo "<br>";
$i=11;
do{
  echo "hello";
  $i++;
  }
while($i<=10);

echo "<br>";

$var=<<< yes
ishanjsnj
aidajsokjlas
aoisojkdwaslk

yes;
echo $var;
$i=0;
if($i==0){
  echo 'yo';
  // break;
}
?>
<br>
<?php
$cars="lamborghini";
switch($cars){
  case 'maruti';
  echo "not mytype";
  break;
  case 'lamborghini';
  echo "love😍" ;
  break;
  default:
  echo "lambo or nothing";
}

$var=`you`;
echo $var;
?>

<?php
$output = `ls -al`;
echo "<pre>$output</pre>";
?>

<?php


@include 'loops/whil.php';

$var=10;
$var1=10.5;
var_dump($var*$var1);

echo `dir`;

echo "<br>";

$var="hello";
@var_dump($vari);
?>

<?php

$a=10;
$b=5;
var_dump( $a | $b);

$c=null;
var_dump($c);

const name="hello";
echo name;

define('i',$a);
echo i;

?>