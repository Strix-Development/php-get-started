<!DOCTYPE html>
<html>
    <head>
        <title>
            New
        </title>
    </head>
    <body>
        <?php
        $new=["School"=>['Students'=>['Class'=>['12',['Section'=>['A','Name'=>'ABC','Roll No.'=>'1','Subject'=>
     ['English'=>['Teacher'=>'QWER','Timing'=>'8:30am','Building'=>['Room No.'=>'10','Room'=>'A.C','Capacity'=>'20']],
     'Chemistry'=>['Teacher'=>'TYUI','Timing'=>'9:30am','Building'=>['Room No.'=>'10','Room'=>'A.C','Capacity'=>'20']],
     'Computer'=>['Teacher'=>'OPAS','Timing'=>'10:30am','Building'=>['Room No.'=>'10','Room'=>'A.C','Capacity'=>'20']],
     'Physics'=>['Teacher'=>'DFGH','Timing'=>'11:00am','Building'=>['Room No.'=>'10','Room'=>'A.C','Capacity'=>'20']]],
     'Total Students'=>'20']],

     ['Section'=>['B','Name'=>'DEF','Roll No.'=>'21',['Subject'=>
     ['English'=>['Teacher'=>'QWER','Timing'=>'9:30am','Building'=>['Room No.'=>'10','Room'=>'A.C','Capacity'=>'20']],
     'Chemistry'=>['Teacher'=>'TYUI','Timing'=>'10:30am','Building'=>['Room No.'=>'10','Room'=>'A.C','Capacity'=>'20']],
     'Computer'=>['Teacher'=>'OPAS','Timing'=>'11:30am','Building'=>['Room No.'=>'10','Room'=>'A.C','Capacity'=>'20']],
     'Physics'=>['Teacher'=>'DFGH','Timing'=>'1:00pm','Building'=>['Room No.'=>'10','Room'=>'A.C','Capacity'=>'20']]]],
     'Total Students'=>'20']],

     ['Section'=>['C','Name'=>'GHI','Roll No.'=>'41',['Subject'=>
     ['English'=>['Teacher'=>'QWER','Timing'=>'10:30am','Building'=>['Room No.'=>'10','Room'=>'A.C','Capacity'=>'20']],
     'Chemistry'=>['Teacher'=>'TYUI','Timing'=>'11:30am','Building'=>['Room No.'=>'10','Room'=>'A.C','Capacity'=>'20']],
     'Computer'=>['Teacher'=>'OPAS','Timing'=>'1:00pm','Building'=>['Room No.'=>'10','Room'=>'A.C','Capacity'=>'20']],
     'Physics'=>['Teacher'=>'DFGH','Timing'=>'2:00pm','Building'=>['Room No.'=>'10','Room'=>'A.C','Capacity'=>'20']]]],
     'Total Students'=>'20']]]],
    
     'Total Students'=>'500',
     ['Teachers'=>[
     ['Name'=>'QWER','Qualification'=>'BSC','Subject'=>'English'],
     ['Name'=>'TYUI','Qualification'=>'PHD','Subject'=>'Chemistry'],
     ['Name'=>'OPAS','Qualification'=>'BCA','Subject'=>'Computer'],
     ['Name'=>'DFGH','Qualification'=>'JBT','Subject'=>'Physics']],
     ['Total Teachers'=>'20']],
        ]];
        echo "<pre>";
        print_r ($new);
        echo "</pre>"
       ?>
    </body>
</html>
