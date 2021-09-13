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
?>
