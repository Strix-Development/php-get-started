<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--DATA-TYPE
Variables can store data of different types, and different data types can do different things.
STRING,INT,FLOAT,BOOLEAN,OBJECT,ARRAY,NULL 

 STRING:- COLLECTION OF CHARACTERS-->
 <?php







$name1 = "himanshu";
$name2 = "vicky";
echo "$name1 is friend of $name2";
echo"<br>";


//INTEGER DATA TYPE :- int is store +ve and -ve value
$salary = 100;
$income = -30;
echo "$salary<br>";
echo "$income<br>";


//float data type
$salary = 678.78;
echo "$salary<br>";



//boolean data type
$x = true;
$y = false;
echo "$x";               //its out put is 1
echo "<br>";
 var_dump($x);      // VAR-DUMP() TELLS US variable  {value} and {type}  
// echo is not compusary to use for var_dump 
echo "<br>";
echo gettype($y);     //gettype expect only one parameter 
// GETTYPE() TELLS US ONLY TYPE OF VARIABLE


require_once __DIR__."/array.php";


?>
</body>
</html>






