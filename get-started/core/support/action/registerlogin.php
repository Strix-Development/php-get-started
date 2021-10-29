<?php
require_once __DIR__. '/../../../bootstrap/app.php';

$getting=file_get_contents('database/user.json');
$decode=json_decode($getting,true);

$arr_filter=array_filter($decode,function($decode){
    $_SESSION['fname']=$decode['first name']."<br>";
    $_SESSION['ename']=$decode['email']."<br>";
    $_SESSION['pname']=$decode['password']."<br>";
    $_SESSION['role'] =$decode['role']."<br>";

    if($_POST['ename']==$decode['email'] && $_POST['pname']==$decode['password']){
        return $decode;
    }
});

if($arr_filter){

    header('LOCATION:dashboard.php');
}else{

    echo "<span style='color:black;font-size:30px;font-family: Audiowide, sans-serif;text-shadow: 3px 3px 3px #ababab;'>" . "Something fishy! Don't you think?" . "</span>";;
}

?>

