<html>
    <body>
        <?php
        echo "<b> Hello</b> ".$_POST["fname"]."&nbsp".$_POST["lname"]."<br>".
        "<b>Your Information is saved as:</b>"."<br>"." <b>E-mail:</b> ".$_POST["email"]."<br>".
        "<b> Phone Number:</b> ".$_POST["phonenumber"];
        ?>
    </body>
</html>