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



     /* PHP CONSTATNT:- WHO'S VALUE CANT BE MODIFIED.....
      A constant is an identifier (name) for a simple value. The value cannot be changed during the execution.
      A valid constant name starts with a letter or underscore (no $ sign before the constant name).
      Note: Unlike variables, constants are automatically global across the entire script.*/

       //synrax of contant is:-
      //define(constant var name, value, case-insensitive)

      //Create a constant with a case-sensitive name: 
        //it is false we are not write here true so it is false(insensitive)
        define("wish", "hi how are you !");  //we are write herestring and numeric value
        echo wish;
        echo "<br>";

       //Create a constant with a case-insensitive name:
        define( "msg" , "this is my pen" ,true);
        echo msg;
        echo "<br>";

        define ("pi",3.141592,TRUE);  //case insensitive  
        echo pi;  
        echo "<br>";


       

       
        //PHP CONSTANT ARRAY:- you can create an Array constant using the define() function.
        define("cars",[
           "bmw",
           "mg-hector",
           "maruti"
         ]);
         print_r(cars);   //print_r is used to print array 
         echo "<br>";






         // CLASS in PHP:- GROUP OF VALUE WITH SET OF OPRATION TO MANIPULATE THIS VALUE.
         // CLASS ALSO PROVIDE FACILITY TO HIDE INFORMATION. CLASS USE TO DEFINE DATATYPE
         // CAN NOT ASSIGN THIS TYPE OF VALUE IN A CLASS
           //  1 PUBLIC $PRICE = 10+20; IS NOT USED IN CLASS
           // 2.PUBLIC $NAME = "KIRTI"."THAKUR"  CONCATINATION IS NOT DONE IN CLASS

        /* class Classname{
           var $var_name;    //property/attribute/data-member

           function mthod_name( ){   // method/member-function
             //without parameter or with parameter
            body of method
           }

          }*/


           //older method
          class Mobile 
          {
            var $model;   //property
            function showModel($number)
            {   //method
             global $model;
             $model = $number;
             echo "model number:$model";
            }
          }
          //OBJECT (SAMSUNG) WORK IS START HERE
          $samsung = new Mobile;// object name($ samsung) new is keyword and mobile is(class name)
          $samsung->showModel('A8'); //object name(samsung) ,(operator)->,functionn name(with parameter);
          //OUT PUT IS :- MODEL NUMBER A8
          
          //OBJECT (LG) WORK IS START HERE
          $lg = new Mobile;
          $lg -> showModel('g3');
          echo "<br>";
          //out put is :- model number g5

 

  

          //CLASS IS NOT WORKING JAB TK KI OBJECT NA BNAYA JAYE YE CLASS MEMORY ME KNHI NHI HOGI
          //KAISE ACCESS KRNA H CLASS(MEMBER) KO USING OBJECT
          //  (->) IS USED TO ACCESS CLASS MEMBER USING OBJECT
          /* OBJECT_NAME -> VARIABLE_NAME;                          OBJECT_NAME -> METHOD_NAME;
          $SAMSUNG -> MODEL;                                      $SAMSUNG -> SHOWMODEL();
                                                                   OBJECT_NAME -> METHOD_NAME(PARAMETER_LIST);
                                                                   $SAMSUNG -> SHOWMODEL(08);*/





          //new method
         /* class mobile
           {
            public $model;   //private and protected is also used
            function showModel($number)
            {
            $this->model = $number;
            echo "model number:$this->model";
            }
          }*/


          /*class Mobile
          {
            var $model;
            function showModel($number){
              echo "model number is $this->model";
            }
          }
      $samsung = new Mobile; object creat krna ho to objectname($samsung)=keyword(new)and classname(mobile) 
      $samsung->model= "a8";  variable access kia  ($samsung->model="a8")objectname->variablename=a8   
      $samsung->showModel();  function access kia ($samsung->showModel())Objectname->functionname() */
      // out put is :- model number is a8
         
           





      // ITERABLE (FOR-EACH) LOOP
      $name = array("kirti","himanshu","nikhil","vicky");
      foreach($name as $value){
        echo $value,"<br>";
       }
  

       //MY CALL BACK FUNCTION
       function my_callback_function(){
         echo 'hello world';
       }

       class MyClass {
        static function myCallbackMethod() {
            echo 'Hello World!';
        }
    }



    //STRING INTERPOLLATION
    $value = 10;
    echo "value is",$value;
    echo "<br>";
    $a = 20;
    echo "value is $value";  // this is string interpollation which provide facility to print double quatation
   echo "<br>";
   $name = "geeky";
   echo "{$name}shows"; // we are use {}(curly brackets) for no space and 
   //('') single quaton is not apply in php
   


      
  ?>
</body>
</html>



