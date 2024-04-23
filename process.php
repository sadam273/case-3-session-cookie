<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

function validate($email, $password) {
  
    if ($email == "sadam@gmail.com" && $password == "S@dam123") {
        //set session
        $_SESSION['login']=true;
        $_SESSION['email']="sadam@gmail.com";
        if(isset($_POST['remember'])){
            setcookie('login', 'true', time() + 3600 * 24); 
        }
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

