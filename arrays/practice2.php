<!DOCTYPE html>
<html>

<head></head>

<style>
    body {
        background: pink;
        font-size: 20px;
    }
</style>

<body>
    <?php

    $rar = array(

        "school" => array(

            "students" => array(



                [
                    "name" => "ram", "class" => "10th", "roll no" => 7,
                    "subject" => array("hindi", "english", "maths", "science", "sanskrit", "social science", "computer", "physical education")
                ],

                [
                    "name" => 'jignesh', "class" => "9th", "roll no" => 6,
                    "subject" => array("hindi", "english", "maths", "science", "sanskrit", "social science", "computer", 'physical education')
                ],

                [
                    "name" => "sachin", "class" => "8th", "roll no" => 5,
                    "subject" => array("hindi", "english", "maths", "science", "sanskrit", "social science", "computer", "physical education")
                ],

                [
                    "name" => "naruto", "class" => "7th", "roll no" => 9,
                    "subject" => array("hindi", "english", "maths", "science", "sanskrit", "social science", "computer", "physical education")
                ],

                [
                    "name" => "sakura", "class" => "6th", "roll no" => 1,
                    "subject" => array("hindi", "english", "maths", "science", "sanskrit", "social science", "computer", "physical education")
                ],

                [
                    "name" => "rohan", "class" => "8th", "roll no" => 2,
                    "subject" => array("hindi", "english", "maths", "science", "sanskrit", "social science", "computer", 'physical education')
                ],

                [
                    "name" => "sahil", "class" => "9th", "roll no" => 5,
                    "subject" => array("hindi", "english", "maths", "science", "sanskrit", "social science", "computer", "physical education")
                ],

                [
                    "name" => "lokesh", "class" => "5th", "roll no" => 10,
                    "subject" => array("hindi", "english", "maths", "science", "sanskrit", "social science", "computer", "physical education")
                ],

                [
                    "name" => "yogesh", "class" => "4th", "roll no" => 15,
                    "subject" => array("hindi", "english", "maths", "science", "sanskrit", "social science", "computer", "physical education")
                ],

                [
                    "name" => "manish", "class" => "11th", "roll no" => 20,
                    "subject" => array("hindi", "english", "maths", "science", "sanskrit", "social science", "computer", "physical education")
                ],



            ),

            "teachers" => array(


                ["name" => "suman", "qalification" => "m sc", "subject" => "hindi"],

                ["name" => "sunita", "qualification" => "bp ed", "subject" => "physical education"],

                ["name" => "archana", "qualification" => "b ed", "subject" => "english"],

                ["name" => "sangita", "qualification" => "phd", "subject" => "maths"],

                ["name" => "rama", "qualification" => "m sc", "subject" => "skill english"],

                ["name" => "lata", "qualication" => "mp ed ", "subject" => "physical education"],

                ["name" => "sizuka", "qualication" => "phd", "subject" => "computer science"],

                ["name" => "koyoko", "qualification" => "m sc", "subject" => "skill hindi"],

                ["name" => "sapna", "qualification" => "m sc", "subject" => "sanskrit"],

                ["name" => "kokila", "qualification" => "php", "subject" => "social science"],



            )
        )
    );



    echo "<pre>";
    print_r($rar);
    echo "</pre>";













    ?>
</body>

</html>