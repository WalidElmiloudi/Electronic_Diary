<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOG | Login - Register</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="w-full h-screen bg-black flex justify-center items-center">
  <div id="login" class="w-80 bg-gray-900 rounded-md border border-green-600 py-2 <?php if (isset($_SESSION['displayLogin'])) {echo $_SESSION['displayLogin'];} else {echo "flex";}?> flex-col justify-center items-center gap-5">
    <h1 class="text-2xl text-green-600">LOGIN</h1>
  <?php if (isset($_SESSION['Loginmessage'])) {
            echo $_SESSION['Loginmessage'];
        }
    ?>
    <form class="flex flex-col justify-center items-center gap-4" action = "login.php" method ="post" >
      <input name="email" class="w-60 h-8 border bg-gray-800 pl-2 text-xl text-green-600 border-green-600" type="email" placeholder="Email" required title = "email example : example@email.com">
      <input name="password" class="w-60 h-8 border bg-gray-800 pl-2 text-xl text-green-600 border-green-600" type="password" placeholder="Password" required>
      <button type="submit" class="border border-green-600 text-green-600 py-1 px-2 rounded-md">LOGIN</button>
    </form>
    <h2 class="text-xl text-green-600">or <span id="goToRegister" class="font-bold cursor-pointer">Register</span> Now !</h2>
  </div>
  <div id="register" class="w-80  bg-gray-900 rounded-md border border-green-600 py-2 <?php if (isset($_SESSION['displayLogin'])) {echo $_SESSION['displayRegister'];} else {echo "hidden";}?> flex-col justify-center items-center gap-5" aria-hidden="true">
    <h1 class="text-2xl text-green-600">REGISTER</h1>
    <?php if (isset($_SESSION['Registermessage'])) {
            echo $_SESSION['Registermessage'];
        }
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
        }
    ?>
    <form class="flex flex-col justify-center items-center gap-4" action="register.php" method="post">
      <input name="username" class="w-60 h-8 border bg-gray-800 pl-2 text-xl text-green-600 border-green-600" type="text" placeholder="Username" required title = "No space in your username">
      <input name="email" class="w-60 h-8 border bg-gray-800 pl-2 text-xl text-green-600 border-green-600" type="email" placeholder="Email" required title = "email example : example@email.com">
      <input name="password" class="w-60 h-8 border bg-gray-800 pl-2 text-xl text-green-600 border-green-600" type="password" placeholder="Password" required title = "At least 8 charactere with no spaces">
      <button type="submit" class="border border-green-600 text-green-600 py-1 px-2 rounded-md">REGISTER</button>
    </form>
    <h2 class="text-xl text-green-600">or <span id="goToLogin" class="font-bold cursor-pointer">Login</span></h2>
  </div>
  <script src="script.js"></script>
</body>
</html>