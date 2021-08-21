<!DOCTYPE html>
<html>
    <head>
        <title>
            Arrays
        </title>
    </head>
    <body>
    <?php    
    $variable=array("School"=>
     array('Students'=>array('Class'=>'12', array(
     'Section-A'=>array('Name'=>'ABC','Roll No.'=>'1',
     'Subject'=>array('English'=>array('Teacher'=>'QWER','Timing'=>'8:30am','Building'=>array( 'Room No.'=>'10','Room'=>'A.C','Capacity'=>'20')),
     'Chemistry'=>array('Teacher'=>'TYUI','Timing'=>'9:30am','Building'=>array('Room No.'=>'10','Room'=>'A.C','Capacity'=>'20')),
     'Physics'=>array('Teacher'=>'OPAS','Timing'=>'10:30am','Building'=>array('Room No.'=>'10','Room'=>'A.C','Capacity'=>'20')),
     'Computer'=>array('Teacher'=>'DFGH','Timing'=>'11:30am','Building'=>array('Room No.'=>'10','Room'=>'A.C','Capacity'=>'20'))),
     'Total Students'=>'20'),

     'Section-B'=>array('Name'=>'DEF','Roll NO.'=>'21',
     'Subject'=>array('English'=>array('Teacher'=>'QWER','Timing'=>'9:30am','Building'=>array( 'Room No.'=>'10','Room'=>'A.C','Capacity'=>'20')),
     'Chemistry'=>array('Teacher'=>'TYUI','Timing'=>'10:30am','Building'=>array('Room No.'=>'10','Room'=>'A.C','Capacity'=>'20')),
     'Physics'=>array('Teacher'=>'OPAS','Timing'=>'11:30am','Building'=>array('Room No.'=>'10','Room'=>'A.C','Capacity'=>'20')),
     'Computer'=>array('Teacher'=>'DFGH','Timing'=>'1:00pm','Building'=>array('Room No.'=>'10','Room'=>'A.C','Capacity'=>'20'))),
     'Total Students'=>'20'),

     'Section-C'=>array('Name'=>'GHI','Roll NO.'=>'41',
     'Subject'=>array('English'=>array('Teacher'=>'QWER','Timing'=>'10:30am','Building'=>array( 'Room No.'=>'10','Room'=>'A.C','Capacity'=>'20')),
     'Chemistry'=>array('Teacher'=>'TYUI','Timing'=>'11:30am','Building'=>array('Room No.'=>'10','Room'=>'A.C','Capacity'=>'20')),
     'Physics'=>array('Teacher'=>'OPAS','Timing'=>'12:30pm','Building'=>array('Room No.'=>'10','Room'=>'A.C','Capacity'=>'20')),
     'Computer'=>array('Teacher'=>'DFGH','Timing'=>'1:30pm','Building'=>array('Room No.'=>'10','Room'=>'A.C','Capacity'=>'20'))),
     'Total Students'=>'20'))),
     'Total Students'=>'800',
     array('Teachers'=>array(
     array('Name'=>'TYUI','Qualification'=>'PHD','Subject'=>'Chemistry'),
     array('Name'=>'OPAS','Qualification'=>'JBT','Subject'=>'Physics'),
     array('Name'=>'DFGH','Qualification'=>'BSC','Subject'=>'English'),
     array('Name'=>'JKLZ','Qualification'=>'BCA','Subject'=>'Computer')),
     array('Total Teachers'=>'20')),
     ));
    echo"<pre>";
    print_r($variable);
    echo"</pre>"
    ?>
    </body>
</html>