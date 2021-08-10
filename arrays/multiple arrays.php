<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAYS</title>
</head>

<body>


    <?php

    $car = array(
        "school" => array(
            "Students" => array(
                [
                    "name" => "vivesh",
                    "class" => [
                        "10th",
                        "building" => [
                            "A",
                            "totle rooms" => 30, "ac rooms" => 20, "non ac rooms" => 10
                        ],
                        "section" => [
                            "A" => ["strength" => 50, "male" => 30, "female" => 20],
                            "B" => ["strength" => 60, "male" => 30, "female" => 30],
                            "c" => ["strength" => 40, "male" => 25, "female" => 15]
                        ]
                    ],
                    "subject" => array("hindi", "english", "maths", "science", "sanskrit", "social science", "computer", "physical education")
                ],


                [
                    "name" => "rohan",
                    "class" => [
                        "9th",
                        "building" => [
                            "B",
                            "total rooms" => 40, "ac rooms" => 35, "non ac rooms" => 5
                        ],
                        "section" => [
                            "A" => ["strength" => 60, "male" => 30, "female" => 30],
                            "B" => ["strength" => 40, "male" => 30, "female" => 10],
                            "c" => ["strength" => 45, "male" => 15, "female" => 30]
                        ]
                    ],
                    "subject" => array("hindi", "english", "maths", "science", "sanskrit", "social science", "computer", "physical education")
                ],


                [
                    "name" => "mayank",
                    "class" => [
                        "8th",
                        "building" => [
                            "C",
                            "totle rooms" => 50, "ac rooms" => 42, "non ac rooms" => 8
                        ],
                        "section" => [
                            "A" => ["strength" => 35, "male" => 20, "female" => 15],
                            "B" => ["strength" => 70, "male" => 40, "female" => 30],
                            "c" => ["strength" => 40, "male" => 20, "female" => 20]
                        ]
                    ],
                    "subject" => array("hindi", "english", "maths", "science", "sanskrit", "social science", "computer", "physical education")
                ],
            ),


            "Teachers" => array(

                [
                    "name" => "radha",
                    "qalification" => "m sc",
                    "subject" => "hindi"
                ],


                [
                    "name" => "sunita",
                    "qualification" => "bp ed",
                    "subject" => "physical education"
                ],


                [
                    "name" => "archana",
                    "qualification" => "b ed",
                    "subject" => "english"
                ],
            )


        )






    );





    echo "<pre>";
    print_r($car);
    echo "</pre>";


















    ?>

</body>

</html>