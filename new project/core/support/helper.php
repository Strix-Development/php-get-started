<?php
// header function declaration 
    function file_header()
    {
      return realpath(__DIR__."/layout/header.php");
    }


//master  function declaration
    function file_master()
    {
       return realpath(__DIR__."/layout/master.php");
    }


//footer function declaration
    function file_footer()
    {
      return realpath(__DIR__."/layout/footer.php");
    }


// action function
    function action($action)
    {
      $actions = __DIR__.'./action/' . $action . '.php';
    if (has_Action($actions)) 
    {
       return realpath($actions);
    } 
    else 
    {
      return __DIR__. "/action/fallback.php";
    }
    }
  /* creat has_Action
     @return the file is exists or not
     if file exists then the action is successsfully submit
     else
     It goes to the fallbacks.php file in action folder 
  */

    
    function has_Action($actions)
    {
      return file_exists($actions);
    }

?>