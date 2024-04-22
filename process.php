<?php

$email = $_POST['email'];
$password = $_POST['password'];

function validate($email, $password) {
  
    if ($email == "sadam@gmail.com" && $password == "S@dam123") {
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

