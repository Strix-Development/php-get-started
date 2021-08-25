<?php 
//PHP CODING STANDERED


// SINGLE AND DOUBLE QUOTES
// we are use double quotes ("") with in single quotes 
echo "kirti '<br/>'";
echo 'himanshu "<br/>"';


//INTENDATION:- Tabs should be used at the beginning of the line for indentation
//while spaces can be used mid-line for alignment.
//Your indentation should always reflect
// logical structure. Use real tabs and not spaces,
// to make code for more readable use TAB
    $a = 10;
    $b = 20;
    $c = 30;


//For associative arrays, each item should start on a new line when the array contains more than one item
$name = array(
    'kirti'     =>  'php',
    'himanshu'  =>  'python',
    'hitender'  =>  'java',     //Note the comma after the last array item this is recommended
);


/*For switch structures case should indent one tab from the switch statement 
and break one tab from the case statement*/
switch ($type) {
    case 'foo':
        some_function();
        break;
    case 'bar':
        some_function();
        break;      
}

//  BRACE-STYLE:-
//Use elseif, not else if

if (condition) {
    statement1();
    statement2();
}elseif (condition2 && condition3) {
    statement3();
    statement4();

}else {
    defaultstatemnt();
}




//DECLARING ARRAY
/*Using long array syntax ( array( 1, 2, 3 ) ) for declaring arrays is generally more readable than
 short array syntax ( [ 1, 2, 3 ] ), particularly for those with vision difficulties. 
 Additionally, it’s much more descriptive for beginners.
Arrays must be declared using long array syntax.*/




//opening and closing php tag
// single line
	<input name="<?php echo esc_attr( $name ); ?>" />


// multiple lime
function foo() {
    ?>
    <div>
        <?php
        echo bar(
            $baz,
            $bat
        );
        ?>
    </div>
    <?php
}



// NO SHORT HAND PHP  TAG




//Remove Trailing Spaces #Remove Trailing Spaces
/*Remove trailing whitespace at the end of each line of code.
 Omitting the closing PHP tag at the end of a file is preferred.
 If you use the tag, make sure you remove trailing whitespace.*/




 //SPACE USAGES
 //Always put spaces after commas, and on both sides of logical, comparison, string and assignment operators.
 $a && $b;
 $c == $v;
 $c = 10;
 $c .= $d;
 $c . "kirti";



//spaces on both sides of the opening and closing parentheses of if, elseif, foreach, for, and switch blocks  
if ( a > 10 ) {
  echo "true";  
}else {
    echo "false";
}



//Type casts must be lowercase. Always prefer the short form of type casts,
 //(int) instead of (integer) and (bool) rather than (boolean). For float casts use (float).


 //In a switch block, there must be no space before the colon for a case statement.
switch ( $foo ) {
    case 'bar': // correct
    case 'ba' : // incorrect
}

//Similarly, there should be no space before the colon on return type declarations.
function sum( $a, $b ): float {
    return $a + $b;
}





?>