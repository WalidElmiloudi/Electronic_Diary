<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOG | Login - Register</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="w-full h-screen bg-black flex justify-center items-center">
  <div id="login" class="w-80 h-65 bg-gray-900 rounded-md border border-green-600 py-2 flex flex-col justify-center items-center gap-5">
    <h1 class="text-2xl text-green-600">LOGIN</h1>
    <form class="flex flex-col justify-center items-center gap-4" action = "login.php" method ="post" >
      <input name="email" class="w-60 h-8 border bg-gray-800 pl-2 text-xl text-green-600 border-green-600" type="email" placeholder="Email">
      <input name="password" class="w-60 h-8 border bg-gray-800 pl-2 text-xl text-green-600 border-green-600" type="password" placeholder="Password">
      <button type="submit" class="border border-green-600 text-green-600 py-1 px-2 rounded-md">LOGIN</button>
    </form>
    <h2 class="text-xl text-green-600">or <span id="goToRegister" class="font-bold">Register</span> Now !</h2>
  </div>
  <div id="register" class="w-80 h-75 bg-gray-900 rounded-md border border-green-600 py-2 hidden flex-col justify-center items-center gap-5" aria-hidden="true">
    <h1 class="text-2xl text-green-600">REGISTER</h1>
    <form class="flex flex-col justify-center items-center gap-4" action="register.php" method="post">
      <input name="username" class="w-60 h-8 border bg-gray-800 pl-2 text-xl text-green-600 border-green-600" type="text" placeholder="Username">
      <input name="email" class="w-60 h-8 border bg-gray-800 pl-2 text-xl text-green-600 border-green-600" type="email" placeholder="Email">
      <input name="password" class="w-60 h-8 border bg-gray-800 pl-2 text-xl text-green-600 border-green-600" type="password" placeholder="Password">
      <button type="submit" class="border border-green-600 text-green-600 py-1 px-2 rounded-md">REGISTER</button>
    </form>
    <h2 class="text-xl text-green-600">or <span id="goToLogin" class="font-bold">Login</span></h2>
  </div>
  <script src="script.js"></script>
</body>
</html>