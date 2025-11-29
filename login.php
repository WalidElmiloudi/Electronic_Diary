<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = new mysqli($servername,$username,$password,$dbname);

$email = $_POST['email'];
$password = $_POST['password'];

$result = $conn ->query("SELECT * FROM users WHERE email = '$email'");
if($result->num_rows > 0){
  $user = $result ->fetch_assoc();
  if(password_verify($password, $user['password'])){
    $_SESSION['email'] = $user['email'];
    $_SESSION['name'] = $user['name'];
    header("Location: user.php");
    exit;
  }
}

header("Location: index.php");
exit;
?>