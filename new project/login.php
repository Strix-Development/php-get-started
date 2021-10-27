
<?php
  require_once __DIR__. "/bootstrap/app.php";
  //header function call
  include file_header();
?>
<div class="container">
     <form class="login-email" method="post" action="">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;"> login </p>
            
        <!-- hidden field -->
        <input type="hidden" name="action" value="login">

        <div class="input-group">
        <input type="email" placeholder="email" name="email" value="email">
        </div><br>

        <div class="input-group">
        <input type="password" placeholder="password" name="password" value="password">
        </div><br> 

        <div class="input-group">
        <input type="submit" name="submit" value="submit">
        </div>
        <p class="login-register-text"> Dont have an account? <a href="./register.php"> register here</a></p>
    </form>
</div>
</body>
<?php
include file_footer();
?>