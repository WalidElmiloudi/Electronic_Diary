<?php
session_start();
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "user_db";

$conn = new mysqli($servername, $username, $password, $dbname);

$name           = htmlspecialchars(trim($_POST['username']));
$name_reg = "/^[a-zA-Z^\s._-]+$/";
$email          = htmlspecialchars(trim($_POST['email']));
$email_reg = "/^[a-zA-Z0-9._-]+@[a-z]+\.[a-z]{2,}$/";
$password       = htmlspecialchars(trim($_POST['password']));
$password_reg ="/^[a-zA-Z0-9!@#$%^&*-_.]{8,}$/";

if((!preg_match($name_reg,$name) || !preg_match($email_reg,$email) || !preg_match($password_reg,$password))){
  $_SESSION['displayRegister'] = "flex";
    $_SESSION['displayLogin']    = "hidden";
  if(!preg_match($name_reg,$name)){
    $_SESSION['message'] = "<div class='w-60 py-2 border border-red-600 flex justify-center items-center'>
<h1 class='text-red-600 text-md font-bold'>Please enter a valid username</h1>
    </div>";
    $conn->close();
    header("Location: index.php");
exit;
  }
  if(!preg_match($email_reg,$email)){
    $_SESSION['message'] = "<div class='w-60 py-2 border border-red-600 flex justify-center items-center'>
<h1 class='text-red-600 text-md font-bold'>Please enter a valid email</h1>
    </div>";
    $conn->close();
    header("Location: index.php");
exit;
  }
  if(!preg_match($password_reg,$password)){
    $_SESSION['message'] = "<div class='w-60 py-2 border border-red-600 flex justify-center items-center'>
<h1 class='text-red-600 text-md font-bold'>Please enter a valid password</h1>
    </div>";
    $conn->close();
    header("Location: index.php");
exit;
  }
}
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$checkemail = $conn->query("SELECT * FROM users WHERE email ='$email'");
if ($checkemail->num_rows > 0) {
    $_SESSION['displayRegister'] = "flex";
    $_SESSION['displayLogin']    = "hidden";
    $_SESSION['Registermessage']         = "<div class='w-60 h-10 border border-red-600 flex justify-center items-center'>
<h1 class='text-red-600 text-md font-bold'>This Email Already exists</h1>
    </div>";

} else {
    $conn->query("INSERT INTO users (name, email, password)
VALUES ('$name', '$email', '$hashedPassword')");
    session_unset();
}

$conn->close();
header("Location: index.php");
exit;
