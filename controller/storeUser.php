<?php
session_start();
include_once "../database/env.php";
$name = $_REQUEST['username'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$password = $_REQUEST['password'];
$encPassword = password_hash($password, PASSWORD_BCRYPT);




$errors = [];
// validation

if(empty($name)){
    $errors ['title'] = "Title is required";
} else if(strlen($name) < 3 ){
    $errors ['title'] = "Title too short";
}


if(empty($email)){
    $errors['email'] = "email is required";
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Invalid email";
}  else{
    $query ="SELECT email  FROM users where email = '$email'";
    $result =mysqli_query($conn, $query);
    if($result->num_rows > 0){
        $errors['email'] = "Email already exist";
    }
}

if(empty($phone)){
    $errors['phone'] = "phone is required";
} else if(strlen($phone) !=11){
    $errors['phone'] ="Invlid phone number";
}  else{
    $query ="SELECT phone  FROM users where phone = '$phone'";
    $result =mysqli_query($conn, $query);
    if($result->num_rows > 0){
        $errors['phone'] = "phone already exist";
    }
}

if(empty($password)){
    $errors ['password'] = "password is requored";
} else if(strlen($password) < 6 ){
    $errors ['password'] ="password too short";
}


if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $_REQUEST;
    header("Location: ../register.php");
} else{
    $query = "INSERT INTO users(name, email, phone, password) VALUES ('$name','$email','$phone','$encPassword')";
    $result = mysqli_query($conn, $query);
    header("Location: ../login.php");
}