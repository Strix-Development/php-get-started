<!DOCTYPE html>
<html>
    <head>
        <title>
            Array
        </title>
    </head>
    <body>
        <h1>Array</h1>
        <?php
        $sch=array( 
            "School"=>
            array('Students'=>array('Class'=>array('12',
            array('Section'=>array('A',
        'Name'=>'ABC','Roll No.'=>'1',
        array('Subject'=>array(
         'Chemistry'=>array('Teacher'=>'TYUI','Timing'=>'8:30am',
        'Building'=> array('Room No.'=>'10','Room'=>'A.C','Capacity'=>'20')),
        'Physics'=>array('Teacher'=>'OPAS','Timing'=>'9:30am',
        'Building'=> array('Room No.'=>'10','Room'=>'A.C','Capacity'=>'20')),
         'English'=>array('Teacher'=>'DFGH','Timing'=>'10:30am',
        'Building'=> array('Room No.'=>'10','Room'=>'A.C','Capacity'=>'20')),
       'Computer'=>array('Teacher'=>'JKLZ','Timing'=>'11:30am',
        'Building'=> array('Room No.'=>'10','Room'=>'A.C','Capacity'=>'20')))),
        'Total Students'=>'20')),
         
     array('Section'=>array('B',
         'Name'=>'DEF','Roll No.'=>'21',
         array('Subject'=>array( 'Chemistry'=>array('Teacher'=>'TYUI','Timing'=>'9:30am',
        'Building'=> array('Room No.'=>'11','Room'=>'A.C','Capacity'=>'20')),
     'Physics'=>array('Teacher'=>'OPAS','Timing'=>'8:30am',
        'Building'=> array('Room No.'=>'11','Room'=>'A.C','Capacity'=>'20')),
     'English'=>array('Teacher'=>'DFGH','Timing'=>'11:30am',
       'Building'=> array('Room No.'=>'11','Room'=>'A.C','Capacity'=>'20')),
       'Computer'=>array('Teacher'=>'JKLZ','Timing'=>'9:30am',
        'Building'=> array('Room No.'=>'11','Room'=>'A.C','Capacity'=>'20')),
        'Total Students'=>'20')))),

       'Section'=>array('C',
        'Name'=>'GHJ','Roll No.'=>'41',
        array('Subject'=>array(  'Chemistry'=>array('Teacher'=>'TYUI','Timing'=>'10:30am',
        'Building'=> array('Room No.'=>'12','Room'=>'A.C','Capacity'=>'20')),
          'Physics'=>array('Teacher'=>'OPAS','Timing'=>'1:00pm',
        'Building'=> array('Room No.'=>'12','Room'=>'A.C','Capacity'=>'20')),
         'English'=>array('Teacher'=>'DFGH','Timing'=>'2:00pm',
        'Building'=> array('Room No.'=>'12','Room'=>'A.C','Capacity'=>'20')),
       'Computer'=>array('Teacher'=>'JKLZ','Timing'=>'3:00am',
        'Building'=> array('Room No.'=>'12','Room'=>'A.C','Capacity'=>'20'))),
        'Total Students'=>'20')),
        )),
      
        'Total Students'=>array('800'),
        
        
        array('Teachers'=>array(
        array('Name'=>'TYUI','Qualification'=>'PHD','Subject'=>'Chemistry'),
        array('Name'=>'OPAS','Qualification'=>'JBT','Subject'=>'Physics'),
        array('Name'=>'DFGH','Qualification'=>'BSC','Subject'=>'English'),
        array('Name'=>'JKLZ','Qualification'=>'BCA','Subject'=>'Computer')),

        array('Total Teachers'=>'20')),
       ));
       echo"<pre>";
       print_r($sch);
       echo"</pre>";
      ?>
    </body>
</html>