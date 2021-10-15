
<title>Login</title>

<?php require_once "../bootstrap/app.php"  ?>
    <div class="container">

        <?php require_once header_file() ?>

    <div class="login">
        <div class="account-login">
            <h1>Account Login</h1>
            <form action="" class="login-form" method="post">
                <!-- <input type="hidden" name=action value="register"> -->
                <div class="form-group">
                    <input type="text"name="user" placeholder="User Name" class="form-control">
                </div><br>
                <div class="form-group">
                    <input type="password" name="upass" placeholder="Password" class="form-control">
                </div>
                <div class="remember">
                    <label class="custom-checkbox">Remember me
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <a href="#" class="pull-right">Forgot Password?</a>
                </div>
                <button class="btn">Login</button>
                <p>Are you new?<a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </div>
    </div>

<?php require_once footer_file()  ?>
