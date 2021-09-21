<?php 

//EXAMPLE OF GO TO STATEMENT
$x=(int)readline("enter a number");
if ($x%2==0)
   goto abc;
echo "x is an odd number";
return;
abc:
echo "x is an even number";
echo "<br>";



//EXAMPLE OF GO TO STATEMENT
for($i=0,$j=50; $i<100; $i++) {
  while($j--) {
    if($j==17) goto end; 
  }  
}
echo "i = $i";
end:
echo 'j hit 17';
echo "<br>";






//EXAMPLE OF RETURN STATEMENT
function add($a , $b)
{
  return($a + $b);
}
echo add(2,6);
echo "<br>";




//OTHER EXAMPLE OF RETURN STATEMENT
function added($a , $b)
{
  $sum = $a + $b;
  return ($sum);
}
$total = added(2,4);
echo "total = $total";
echo "<br>";
?>