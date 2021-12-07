<?php
require_once __DIR__ . "../../../../Bootstrap/app.php";
session_unset();
header('Location:../../../login.php');
?>