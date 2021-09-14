<?php


$foo=array(
 'name',
 'class',
 'subject',
);


foreach($foo as $boo){

    echo $boo .'<br>';
}

echo "<br>";

$go=array(
    'name'=>'sachin',
    'class'=>'10th',
    'roll no'=>9,
);


foreach($go as $do=>$co){

    echo "$do = $co <br>";
}

echo "<br>";

$class=array(
    'name'=>'rahul',
    'class'=>'6th',
    'roll no'=>6,
);

foreach($class as $child=>$val){

    echo "$child=>$val <br>";
}

echo "<br>";



$yolo=array(
    1,2,3,4,5,6,
);

foreach($yolo as $we){

    echo "$we <br>";
}

echo '<br>';




// $school=array(
// [    
//     'name'=>'Govinda',
//     'class'=>'8th',
//     'roll no'=>18
// ],


// [
//     'name'=>'prabhu',
//     'class'=>'7th',
//     'roll no'=>12,
// ],

// [
//     'name'=>'gopal',
//     'class'=>'10th',
//     'roll no'=>15,
// ]);


// $keys = array_keys($school);
// for($i = 0; $i <count($school); $i++){
//     echo $keys[$i] . "{<br>";
//     }
// foreach($school[$students[$i]] as $students=>$var){

//     echo $students . " : " . $var . '<br>';
// }



// echo "<br>";




$never=array(
    'name'=>'abhu',
    'class'=>'5th',
    'roll no'=>12,
    'subject'=>'hindi','english','maths'
);




foreach($never as $lose=>$hope){

    echo "$lose=>$hope <br>";
}


echo '<br>';



$messi=array(
    'name'=>'sumit',
    'class'=>'11th',
    'roll no'=>25,
);


foreach($messi as $cr7=>$legend){

    echo "$cr7=>$legend <br>";
}


echo '<br>';






$cars = array( 
    "car1" => array (   
        "brand" => 'BMW',
        "license" => '30-KL-PO',    
        "price" => 10000
        ),

    "car2" => array (
       "brand" => 'Mercedes',
       "license" => '51-ZD-ZD',
       "price" => 20000
    ),

    "car3" => array (
       "brand" => 'Maserati',
       "license" => 'JB-47-02',
       "price" => 30000
    )
 );

foreach($cars as $car)
printf("%-10s %s\n",  $car['brand'], $car['license']);




$cars = array( 
    "car1" => array (   
        "brand" => 'BMW',
        "license" => '30-KL-PO',    
        "price" => 10000
    ),
    "car2" => array (
        "brand" => 'Mercedes',
        "license" => '51-ZD-ZD',
        "price" => 20000
    ),
    "car3" => array (
        "brand" => 'Maserati',
        "license" => 'JB-47-02',
        "price" => 30000
    )
);
$result = []; // blank array to store result 
foreach($cars as $key => $val){
$result[$key]["brand"] = $val["brand"]; 
$result[$key]["license"] = $val["license"]; 
$result[$key]["price"] = $val["price"]; 
}
echo "<pre>";
print_r($result);
echo "</pre>";



?>