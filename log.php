<?php
  session_start();
  $host = "localhost";
  $username = "root";
  $password = "";
  $db = "user_db";

  $conn = new mysqli($host,$username,$password,$db);
  if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
  $tablename = $name . "_logs";
  $conn->query("
  CREATE TABLE IF NOT EXISTS `$tablename`(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 logTxt TEXT,
currenttime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )");

  $log = $_POST['message'];
  $date = date("d-m-y h:i");
  $conn->query("INSERT INTO `$tablename` (logTxt,currenttime) VALUES ('$log','$date')");

 header("Location: user.php");
 exit;
  }
  header("Location: index.php");
  exit;
?>