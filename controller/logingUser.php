<?php
session_start();
include_once "../database/env.php";

$errors = [];

$email = $_REQUEST['email_phone'];
$phone = $_REQUEST['email_phone']; 
$password = $_REQUEST['password'];

if(empty($email)){
    $errors['email'] = "Email or phone is required";
} 

if(empty($password)){
    $errors['password'] = "Password is required";
} elseif(strlen($password) < 6){
    $errors['password'] = "Password too short";
}

if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header("Location: ../login.php");
    exit();
} else {
    $query = "SELECT * FROM users WHERE email='$email' OR phone='$phone'";
    $res = mysqli_query($conn, $query);

    if(mysqli_num_rows($res) == 0){
        $errors['email'] = "Email or phone is not registered";
        $_SESSION['errors'] = $errors;
        header("Location: ../login.php");
        exit();
    } else {
        $user = mysqli_fetch_assoc($res);
        if(password_verify($password, $user['password'])){
            $_SESSION['user'] = $user;
            header("Location: ../dashboard/index.php"); 
            exit();
        } else {
            $errors['password'] = "Password didn't match!";
            $_SESSION['errors'] = $errors;
            header("Location: ../login.php");
            exit();
        }
    }
}
?>

