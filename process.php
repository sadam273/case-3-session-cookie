<?php
$emailAwal = "sadam@gmail.com";
$passwordAwal = "S@dam123";
$email = $_POST['email'];
$password = $_POST['password'];

function validate($email, $password) {
    global $emailAwal;
    global $passwordAwal;
    if ($emailAwal === $email && $passwordAwal === $password) {
        return true;
    } else {
        return false;
    }
}

if (validate($email, $password)) {
    header("Location: profil.php");
    exit; 
} else {
    header("Location: index.php");
    exit; 
}
