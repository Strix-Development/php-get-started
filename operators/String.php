<?php




// Operator	      Name	                            Example	             Result	
// .	          Concatenation	                    $txt1 . $txt2	     Concatenation of $txt1 and $txt2	
// .=	          Concatenation assignment	        $txt1 .= $txt2	     Appends $txt2 to $txt1









//Concatenation $txt1 . $txt2......................	



$test="Hello ";
$raw="there";
echo $test . $raw ."<br>";



$rock="How's it goin' ";
$paper="pal";
echo $rock . $paper ."<br>";


$y="year ";
$num=20;
$ber=21;
echo $y . $num . $ber ."<br>";


$text1='L';
$text2='O';
$text3='C';
$text4='O';
echo $text1 . $text2 . $text3 . $text4 ."<br>";



$a='apple ';
$b='ball ';
$c='cat ';
$d='dog ';
$e='elephant ';
$f='fish';
echo $a . $b . $c . $d . $e . $f ."<br>";






//Concatenation assignment $txt1 .= $txt2.............................


$x=20;
$y=12;
echo $x .= $y ."<br>";



$jar="Tooth";
$var='less';
$jar .= $var;
echo $jar ."<br>";


$car='mango ';
$bus='banana ';
$bike='grapes ';
$car .= $bus .= $bike;
echo $car ."<br>";


$p=200;
$q=0;
$r=' To ';
$s=20;
$t=21;
echo $p .= $q .= $r .= $s .= $t ."<br>";



$test1='Never ';
$test2='have ';
$test3='i ';
$test4='ever';
$test1 .= $test2 .= $test3 .= $test4;
echo $test1;









?>