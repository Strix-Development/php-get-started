<?php
    session_start();
  

     //redirect to login page
    header("Location: ./login.php");
    
    session_destroy();

?>