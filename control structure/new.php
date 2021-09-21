<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

::-moz-selection { 
color: red;
background: yellow;
}

::selection {
color: red;
background: yellow;
}

a.highlight:hover { /* link hover */
  color: #ff0000;
} 

#hvr {     /*div hover*/
  background-color: green;
  color: white;
  padding: 25px;
  text-align: center;
}
#hvr:hover {
  background-color: blue;
}

/*when i am click on div text now show h2 text */
h2{
    display:none;
    background-color: yellow;
    padding: 12px;
}
#click:hover h2{
display:block;
}

/* this is how we find first child and this is print the first paragraph */
    p:first-child {
    color: red;
    }

    p i:first-child{   /* change perform both paragraph first (i)  */
        background-color: red;
    }
    p:first-child i{   /* change only perform first paragraph*/
        background-color: yellow;
    }

/* table border 
    table ,th , td{
      border: 2px solid red;
    }



 full width table 
table{
  width:100%; 
  border-collapse: collapse; /*this is collapse the borderin single line  
}*/



/* single border around the table 
table{
  width:100%;
  border:1px solid black;
  border-collapse: collapse;
}*/



/*this gives the height of the table   
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 50px;
  padding:15px;
  text-align:center;
}
td{
  height:40px;
  text-align: left;  /*also do text align left or right  */
  /*vertical-align: bottom;     it shows our tect bottom of the box 
  padding:15px;
}*/


table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {background-color: #f2f2f2;}


div.ex1 {
  width: 500px;
  margin: auto;
  border: 3px solid #73AD21;
}

div.ex2 {
  max-width: 500px;
  margin: auto;
  border: 3px solid #73AD21;
}



.div3 {
  float: left;
  padding: 10px;  
  border: 3px solid #73AD21;
}
.div4 {
  padding: 10px;
  border: 3px solid red;
  clear:left;
}



div {
  border: 3px solid #4CAF50;
  padding: 5px;
}
.img2 {
  float: right;
}
.clearfix {
  overflow: auto;
}
</style>
</head>







<body>
<h1>Select some text on this page:</h1>

<h3><a class="highlight" href="css_syntax.asp">CSS Syntax</a></h3> 
<div id="hvr"> mouse over me </div><br>


<div id = "click"> this is div when i am click on div now open our heading data
<h2>  this message is showed</h2>
</div>

<p>I am a <i>strong</i> person. I am a <i>strong</i> person.</p>
<p>I am a <i>strong</i> person. I am a <i>strong</i> person.</p>


<table>
  <tr> 
    <th> name </th>
    <th> roll no </th>
  </tr>
  <tr>
    <td> kirti </td>
    <td> 12 </td>
  </tr>
  <tr> 
    <td> himanshu </td>
    <td> 23 </td>
  </tr>
</table>



<!-- how to make table responsive -->
 <div style="overflow-x:auto;">
<table> 
<tr>  
<th> first name </th>
<th> last name </th>
<th> points </th>
<th> points </th>
<th> points  </th>
<th> points </th>
<th> points </th>
<th> points  </th>
<th> points </th>
<th> points </th>
<th> points </th>
<th> points </th>
<th> points </th>
</tr>
<tr> 
<td> kirti </td>
<td> kumari </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
</tr>
<tr> 
<td> kreena </td>
<td> kumari </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
<td> points </td>
</tr>
</table>
</div>



<div class="ex1"> this is my div </div>
<div class="ex2"> this is my div </div>



<h2>With clear</h2>
<div class="div3">div3</div>
<div class="div4">div4 - Here, clear: left; moves div4 down below the floating div3.
The value "left" clears elements floated to the left. You can also clear "right" and "both".</div>



<h2 style="clear:right">With Clearfix</h2>
<p>We can fix this by adding a clearfix class with overflow: auto; to the containing element:</p>
<div class="clearfix">
  <img class="img2" src="/images/home.jpg" alt="Pineapple" width="170" height="170">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet...
</div>


<?php
$arr = array('kirti','happy','1','7,','a','suit');
foreach($arr as $value){
  echo "$value <br/>";
}

$a=6;
if($a==2){
  echo " this is two";
}elseif($a==4){
  echo "this is 4";
}elseif($a==6){
  echo "this is six";
}
else{
  echo "this is false";
}

$i = 1;
while($i<=10){
  echo "$i <br/>";
  $i++;
}

$i=1;
do{
  echo "$i<br/>";
  $i++;
}while($i>=10);

for($i=1; $i<=10; $i++){
  echo "$i<br/>";
}




?>

</body>
</html>