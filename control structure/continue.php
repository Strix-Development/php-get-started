 <?php

    // 1:: EXAMPLE OF CONTINUE STATEMENT (FOR LOOP)
    for($i=1; $i<=5; $i++){
        if($i == 2){   // 2 skip because of continue statement
            continue;
        }
        echo "$i";
        echo "<br>";
    }
    echo "<br>";
    


// 2:: EXAMPLE OF CONTINUE STATEMENT  (ARRAY)
    $arr = array('banana','apple','orange','grapes');
    foreach($arr as $val){
        if($val == 'orange'){
            continue;
        }
        echo "$val";
        echo "<br>";
    }
    echo "<br>";


//EXAMPLE OF ONTINUE STATENENT
    for ($i = 0;$i<3;$i++) {
        echo "start of i loop <br/>";
        for ($j=0;;$j++) {
           
            if ($j >= 2) continue 2;                                                                                                                                                                
            echo "I : $i J : $j"."<br/>";  
        }
        echo "End";
        echo "<br>";
    }
    echo "<br>";


?>
 