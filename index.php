<?php
session_start();
include("controller.php");
if (!isset($_SESSION['username'])) {
   echo "<a href=\"login.php\">You're not connected, we recommend you to login first</a>";
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dice</title>
   <link rel="stylesheet" href="public/css/game.css?v=<?php echo time(); ?>">
</head>

<body>
   <div id="container">

      <div id="game">
         <div id="us1" class="us">
            <h1 class="uname 1">
               <?php if (isset($_SESSION['username'])) {
                  echo $_SESSION['username'];
               } else
                  echo "Guest"; ?>
            </h1>
            <div id="rand1" class="rand">0</div>
            <div id="sc1" class="sc">0</div>
         </div>
         <div id="buttons">
            <div id="new" class="btn">
               <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
               <lord-icon src="https://cdn.lordicon.com/iiixgoqp.json" trigger="hover" colors="primary:#121331"
                  state="hover-1" style="width:20px;height:20px"></lord-icon>Nouveau
            </div>
            <img id="image">
            <div id="lance" class="btn">Lance</div>
            <div id="exit" class="btn"><a href="login.php">Exit</a></div>
         </div>
      </div>

      <div id="user">
         <?php
         if (isset($_SESSION['username'])) {
            $usr = user_data($_SESSION['username']);
            echo "<div id=\"usr\"><table><tr><th>User</th><th>Score</th><th>E-mail</th></tr><tr><td>$usr[username]</td><td>$_SESSION[score]</td><td>$usr[email]</td></tr></table></div>";
         }
         $data = get_data();
         echo "<h2>Top 3 players</h2><table><tr><th>Players</th><th>Score</th></tr>";
         foreach ($data as $i) {
            echo "<tr><td>$i[username]</td><td>$i[score]</td></tr>";
         }
         echo "</table>";

         ?>
      </div>

   </div>
   <script src="public/js/game.js"></script>
</body>

</html>