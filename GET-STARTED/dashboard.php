<?php
require_once __DIR__ . "/Bootstrap/app.php";
require_once file_header();
echo "Welcome" . '&nbsp' . $_SESSION['fname'] . "<br>" . "Full Name: " . $_SESSION['fname'] . "&nbsp" .
    $_SESSION['lname'] . "<br>" . " E-mail: " . $_SESSION['email'] . "<br>" . " Role: " . $_SESSION['role'];
require_once file_footer();
?>