<?php
$emailAwal = "sadam@gmail.com";
$passwordAwal = "S@dam123";
$email = $_POST['email'];
$password = $_POST['password'];
$checkbox = $_POST['remember-me'];

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
    echo "success";
    exit; 
} else {
    echo 'Invalid email or password';;
    exit; 
}

