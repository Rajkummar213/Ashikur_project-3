<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbpassword = '';
$dbName = 'ashikur1';

// Database connection
$conn = mysqli_connect($dbHost, $dbUser, $dbpassword, $dbName);

// Check connection
if (!$conn){
    echo "Something went wrong!";
    exit();
}
?>

