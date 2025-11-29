<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = new mysqli($servername,$username,$password,$dbname);


$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashedPassword = password_hash($password,PASSWORD_DEFAULT);

$conn ->query("INSERT INTO users (name, email, password)
VALUES ('$name', '$email', '$hashedPassword')");

header('Location: http://localhost/in-team%20challenge/index.php');
exit;
?>