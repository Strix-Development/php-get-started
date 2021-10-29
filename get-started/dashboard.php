<style>
body{
    background-image:url(https://images.unsplash.com/photo-1617824077840-0d7a0cd13448?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80);
    background-repeat: no-repeat;
    background-size: 100%;
}

.foot{

    margin-top: 500px;
}
</style>
<?php
require_once __DIR__. '/bootstrap/app.php';
require_once header_file();

$file_get=file_get_contents('database/user.json');

// if(($_SESSION['ename'])==$file_get){
//     'Name     =>'.@$_SESSION['fname'];
//     'Email    =>'.@$_SESSION['ename'];
//     'Password =>'.@$_SESSION['pname'];
//     'Role     =>'.@$_SESSION['role'];
    
// }else{
//     echo 'false';
// }



echo'Name     =>'.@$_SESSION['fname'];
echo'Email    =>'.@$_SESSION['ename'];
echo'Password =>'.@$_SESSION['pname'];
echo'Role     =>'.@$_SESSION['role'];

require_once footer_file();

?>
