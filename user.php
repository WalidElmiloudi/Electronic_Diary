<?php
  if(!isset($_SESSION['email'])){
    header("Location: index.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Walid log</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-black w-full h-screen">
  <section class ="fixed bottom-0 w-full h-20 bg-gray-900 border border-green-600 flex justify-center items-center ">
  <form class="flex gap-4" action="user.php" method = "post">
    <input type="text" name="username" class="w-50 h-10 border border-green-600 text-green-600 px-2" placeholder="Your Name">
    <input type="text" name="message" class="w-200 h-10 border border-green-600 text-green-600 px-2" placeholder="message">
    <button type="submit" class="py-2 px-2 rounded-md border border-green-600 text-green-600 hover:bg-green-600 hover:text-white cursor-pointer">Submit</button>
  </form>
  </section>
  <?php
    $name = $_POST['username'];
    $message = $_POST['message'];
    $time = date("d-m-y h:i");
    $logContent = "[$time] $name : $message" . PHP_EOL;
    file_put_contents("guestbook.txt",$logContent,FILE_APPEND);
    $logs = file("guestbook.txt",FILE_IGNORE_NEW_LINES);
    foreach($logs as $log){
      echo "<li class='text-green-600 text-2xl'>$log</li>";
    }  
  ?>
</body>
</html>