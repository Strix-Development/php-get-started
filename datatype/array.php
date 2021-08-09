<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--An array is a special variable, which can hold more than one value at a time-->
    <!-- 1 Indexed arrays - Arrays with a numeric index
2 Associative arrays - Arrays with named keys
3 Multidimensional arrays - Arrays containing one or more arrays-->

    <?php
    $var = array("kirti", 123, 123.4, true, null);
    echo $var; //in case of array echo is genrate error array to string conversion
    print_r($var);  //we are use print_r() for print output of array
    echo "<br>";
    echo count($var);  // count function tells the length of the array
    echo "<br>";


    //FIRST TYPE OF ARRAY IS INDEXED ARRAY:- index can be assigned automatically in php
    $type = ["toyota", "maruti", "hyundai"];
    print_r($type);
    echo "<br>";


    //SECOND TYPE  ARRAY  ASSOCIATIVE ARRAY :-Associative arrays are arrays that use named keys that you assign to them.
    $age = array("rohan" => "22", "shyam" => "34", "reeta" => "45");
    print_r($age);
    echo "<br>";

    $num["rr"] = "34";
    $num["sunny"] = "35";
    $num["raghav"] = "56";
    print_r($num);
    echo "<br>";


    //THIRD TYPE ARRAY MULTIDIMENSIONAL ARRAY:-A multidimensional array is an array containing one or more arrays
 $scl = array(
       'school'=>
    [
        'student' => [
            'details' => ['name'=>['girls'=>['name'=>['radha','geeta','maya'],'section'=>['a','b','c']],
                 'boys'=>['name'=>['himanshu'=>['section'=>'a'],'rajat'=>['section'=>'b'],
                 'nikhil'=>['section'=>'c']]]],

                 'rolno'=>['1'=>['name'=>'kartik','e-mail'=>'rajpur123@gmail.com','dob'=>'6/5/1993'
                 ,'phone-no'=>'8945336567','address'=>'vpo-kot-tungal teh-kotli dis-mandi'],

                 '2'=>['name'=>'akhil','e-mail'=>'ertff@gmail.com','dob'=>'9/3/1992','phn-no'=>'5678453412'
                 ,'address'=>'vpo-kot teh-kotli dis-mandi'],

                 '3'=>['name'=>'rajiv','e-mail'=>'erty234@gmail.com','dob'=>'8/7/1994','phone-no'=>'4567342314'
                 ,'address'=>'vpo-drubal teh-kotli dis-mandi' ]]], 
            'class' => [
                'sectionA' => [
                    'name' => 'kirti', 'roll-no' => '12',
                    'subject' => [
                        'hindi' => ['teacher' => 'rakesh', 'timing' => '9am', 'building' => ['class' => '12th', 'ac/non ac' => 'ac', 'capacity' => '20']],
                        'english' => ['techer' => 'hitesh', 'timing' => '10am', 'building' => ['class' => '11th', 'ac/non/ac' => 'ac', 'capacity' => '23']],
                        'maths' => ['techer' => 'hitesh', 'timing' => '10am', 'building' => ['class' => '11th', 'ac/non/ac' => 'ac', 'capacity' => '23']],
                        'science' => ['techer' => 'hitesh', 'timing' => '10am', 'building' => ['class' => '11th', 'ac/non/ac' => 'ac', 'capacity' => '23']],
                    ]
                ],


                'sectionB' => [
                    'name' => 'himanshu', 'roll-no' => '14',
                    'subject' => [
                        'hindi' => ['teacher' => 'rakesh', 'timing' => '9am', 'building' => ['class' => '12th', 'ac/non ac' => 'ac', 'capacity' => '20']],
                        'english' => ['techer' => 'hitesh', 'timing' => '10am', 'building' => ['class' => '11th', 'ac/non/ac' => 'ac', 'capacity' => '23']],
                        'maths' => ['techer' => 'hitesh', 'timing' => '10am', 'building' => ['class' => '11th', 'ac/non/ac' => 'ac', 'capacity' => '23']],
                        'science' => ['techer' => 'hitesh', 'timing' => '10am', 'building' => ['class' => '11th', 'ac/non/ac' => 'ac', 'capacity' => '23']],
                    ]
                ],


                'sectionC' => [
                    'name' => 'anil', 'roll-no' => '24',
                    'subject' => [
                        'english' => ['teacher' => 'aman', 'timing' => '9am', 'building' => ['class' => '10th', 'ac/non ac' => 'ac', 'capacity' => '12']],
                        'science' => ['teacher' => 'aman', 'timing' => '9am', 'building' => ['class' => '10th', 'ac/non ac' => 'ac', 'capacity' => '12']],
                        'maths' => ['teacher' => 'aman', 'timing' => '9am', 'building' => ['class' => '10th', 'ac/non ac' => 'ac', 'capacity' => '12']],
                        'gk' => ['teacher' => 'aman', 'timing' => '9am', 'building' => ['class' => '10th', 'ac/non ac' => 'ac', 'capacity' => '12']]
                    ]
                ],
            ],
            'total-student' => '120'
        ],
 'teacher' => ['name' => "hitesh", 'aualifiaction' => "bsc", 'subject' => 'maths', 'total-teacher' => '50']
       ]);
    print_r($scl);
    echo "</pre>";
    ?>
</body>

</html>