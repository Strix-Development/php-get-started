<?php
require_once __DIR__. '/bootstrap/app.php';

// if(isset($_post['logout'])) {
//     session_destroy();
//     unset($_SESSION['ename']);
//     header('LOCATION:login.php');
// }


session_destroy();    //session_destroy() ends session completely
// unset($_SESSION['ename']);   //logout
header('LOCATION:login.php');


// unset($_SESSION['ename']);
// header('location:login.php');
//  session_abort();
?>