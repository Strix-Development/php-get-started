<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php


function name($fun){
  
    return  $fun();
}


echo name(function(){
    return "hello world". "<br>";
});



function dogsays($cat){
    
    return $cat();
}

echo dogsays(function(){
    return "cat suck";
})


      

?>


</body>
</html>