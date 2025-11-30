<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = new mysqli($servername,$username,$password,$dbname);

$email = htmlspecialchars(trim($_POST['email']));
$password =htmlspecialchars(trim($_POST['password']));

$result = $conn ->query("SELECT * FROM users WHERE email = '$email'");
if($result->num_rows > 0){
  $user = $result ->fetch_assoc();
  if(password_verify($password, $user['password'])){
    $_SESSION['email'] = $user['email'];
    $_SESSION['name'] = $user['name'];
    if(isset($_SESSION['message'])){
      unset($_SESSION['message']);
    }
    header("Location: user.php");
    exit;
  }
}
 $_SESSION['Loginmessage']         = "<div class='w-60 h-10 border border-red-600 flex justify-center items-center'>
<h1 class='text-red-600 text-md font-bold'>Wrong Password Or Email !</h1>
    </div>";

header("Location: index.php");
exit;
?>