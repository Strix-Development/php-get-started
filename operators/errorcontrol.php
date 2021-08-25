<?php


$fp=fopen("nosuchfile.txt","r");
echo "Hello World \n";
echo "<br>";


?>







<?php


$fp=@fopen("nosuchfile.txt","r");
echo "Hello World \n";



?>