<?php

$a=0;
while($a<=10){

    echo $a++ ."&nbsp";
    
}

echo "<br>";

$i = 1;
while($i <= 5){
  $x = 1;
  while($x <= 5){
    echo $i * $x." ";
    $x++;
  }
  echo "<br/>";
  $i++;
}
echo "<br>";
?>

<?php

$i=1;
while ($i <= 5) {
	$j=1;
	while ( $j<= $i) {
		$j++;
		echo "&nbsp *";
	}
	$i++;
	echo "<br>";}



?>