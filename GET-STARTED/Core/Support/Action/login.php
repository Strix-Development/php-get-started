<?php
if ($_POST['email']==''||$_POST['password']=='') {
    echo "All fields are required";
}else{
$action = json_decode(file_get_contents('Database/user.json'), true);
$filter = array_filter($action, function ($action) {
    if ($action['E-mail'] == $_POST['email']) {
        if ($action['Password'] == $_POST['password']) {
            return $action;
        }
    }
});
if (count($filter)) {
    echo "Welcome";
} else {
    echo "Invalid email or password";
}
}
?>