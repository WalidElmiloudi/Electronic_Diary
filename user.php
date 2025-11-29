<?php
    session_start();
    if (! isset($_SESSION['email'])) {
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
  <form class="flex gap-4" action="log.php" method = "post">
    <input type="text" name="message" class="2xl:w-200 border border-green-600 text-green-600 px-2" placeholder="message">
    <button type="submit" class="py-2 px-2 rounded-md border border-green-600 text-green-600 hover:bg-green-600 hover:text-white cursor-pointer">Submit</button>
  </form>
  </section>
  <section class =" w-full h-230 overflow-scroll [scrollbar-width:none]">
    <?php
        
        $host     = "localhost";
        $username = "root";
        $password = "";
        $db       = "user_db";

        $name      = $_SESSION['name'];
        $tablename = $name . "_logs";

        $conn = new mysqli($host, $username, $password, $db);

        $result = $conn->query("SELECT * FROM `$tablename`");

        if ($result->num_rows > 0) {

            while ($user = $result->fetch_assoc()) {
                echo "<li class = 'text-green-600 text-xl'> [" . $user["currenttime"] ."] " . $_SESSION['name'] ." : ". $user["logTxt"] ."</li>";
            }

        }

    ?>
  </section>
</body>
</html>