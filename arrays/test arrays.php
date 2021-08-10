<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Array</title>
</head>

<body>


    <?php

    //This is the example of multidimensional arrays..
    $radio = array(
        "school" => array(
            //school has main 'students and teachers' array in it
            "students" => [
                //1st array students hold multiple arrays 'Name, class, roll no, sections, subjects, buildings and total students'
                "total students" => 300,
                "class" => [
                    10,
                    [
                        "section" => [
                            //section A start here..
                            "A",
                            "name" => "karan", "roll no" => 7,
                            "subjects" => [
                                //1st subject
                                "hindi" => [
                                    "teacher" => "sunita sen",
                                    "timing" => "10am",
                                    "building" => [
                                        "A",
                                        "room no." => 20, "ac rooms" => 15, "non ac rooms" => 5, "capacity" => "20 rooms"
                                    ]
                                ],

                                "english" => [
                                    //2nd subject
                                    "teacher" => "ayush thakur",
                                    "timing" => "11am",
                                    "building" => [
                                        "B",
                                        "room no." => 5, "ac rooms" => 22, "non ac rooms" => 3, "capacity" => "25 rooms"
                                    ],
                                ],

                                "maths" => [
                                    //3rd subject
                                    "teacher" => "kamal roy",
                                    "timing" => "12pm",
                                    "building" => [
                                        "C",
                                        "room no." => 1, "ac rooms" => 25, "non ac rooms" => 5, "capacity" => "30 rooms"
                                    ],
                                ],

                                "science" => [
                                    //4th subject
                                    "teacher" => "payal sharma",
                                    "timing" => "1pm",
                                    "building" => [
                                        "D",
                                        "room no." => 10, "ac rooms" => 30, "non ac rooms" => 5, "capacity" => "35 rooms"
                                    ],

                                ]

                            ],
                            "total students" => 50,
                        ],

                    ],

                    [
                        "section" => [
                            //section B start here..
                            "B",
                            "name" => "ankush", "roll no" => 10,
                            "subjects" => [
                                "hindi" => [
                                    //1st subject
                                    "teacher" => "sneha verma",
                                    "timing" => "11am",
                                    "building" => [
                                        "B",
                                        "room no." => 20, "ac rooms" => 22, "non ac rooms" => 3, "capacity" => "25 rooms"
                                    ]
                                ],

                                "english" => [
                                    //2nd subject
                                    "teacher" => "virat thakur",
                                    "timing" => "12pm",
                                    "building" => [
                                        "A",
                                        "room no." => 5, "ac rooms" => 15, "non ac rooms" => 5, "capacity" => "20 rooms"
                                    ],
                                ],

                                "maths" => [
                                    //3rd subject
                                    "teacher" => "shivam rana",
                                    "timing" => "1pm",
                                    "building" => [
                                        "D",
                                        "room no." => 1, "ac rooms" => 30, "non ac rooms" => 5, "capacity" => "35 rooms"
                                    ],
                                ],

                                "science" => [
                                    //4th subject
                                    "teacher" => "ruchi sharma",
                                    "timing" => "2pm",
                                    "building" => [
                                        "C",
                                        "room no." => 10, "ac rooms" => 25, "non ac rooms" => 5, "capacity" => "30 rooms"
                                    ],

                                ]

                            ],
                            "total students" => 60,
                        ]




                    ],

                    [
                        "section" => [
                            //section C start here..
                            "C",
                            "name" => "rohit", "roll no" => 12,
                            "subjects" => [
                                "hindi" => [
                                    //1st subject
                                    "teacher" => "sachin thakur",
                                    "timing" => "9am",
                                    "building" => [
                                        "D",
                                        "room no." => 20, "ac rooms" => 30, "non ac rooms" => 5, "capacity" => "35 rooms"
                                    ]
                                ],

                                "english" => [
                                    //2nd subject
                                    "teacher" => "anil chauhan",
                                    "timing" => "10am",
                                    "building" => [
                                        "C",
                                        "room no." => 5, "ac rooms" => 25, "non ac rooms" => 5, "capacity" => "30 rooms"
                                    ],
                                ],

                                "maths" => [
                                    //3rd subject
                                    "teacher" => "suresh choudhary",
                                    "timing" => "11am",
                                    "building" => [
                                        "B",
                                        "room no." => 1, "ac rooms" => 22, "non ac rooms" => 3, "capacity" => "25 rooms"
                                    ],
                                ],

                                "science" => [
                                    //4th subject
                                    "teacher" => "apurva sharma",
                                    "timing" => "12pm",
                                    "building" => [
                                        "A",
                                        "room no." => 10, "ac rooms" => 15, "non ac rooms" => 5, "capacity" => "20 rooms"
                                    ],

                                ]

                            ],
                            "total students" => 70,
                        ]
                    ]

                ]

            ],


            "Teachers" => array(
                //2nd array teachers hold multiple arrays as well 'Name, Qualification, subjects and total teachers'

                [
                    "name" => "apurva sharma",
                    "qalification" => "m sc",
                    "subject" => "hindi"
                ],


                [
                    "name" => "sunita",
                    "qualification" => "bp ed",
                    "subject" => "physical education"
                ],


                [
                    "name" => "ayush thakur",
                    "qualification" => "b ed",
                    "subject" => "english"
                ],

                "total teachers" => 20,

            )






        )





    );

    echo "<pre>";
    print_r($radio);
    echo "</pre>";









    ?>

</body>

</html>