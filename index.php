<?php
   session_start();
   if (!isset($_SESSION['username'])) {
      echo "<a href=\"login.php\">You're not connected, we recommend you to login first</a>";
   }
   include("controller.php");
   $data = get_data();
   echo "<table><tr><th>Players</th><th>Score</th></tr>";
   foreach ($data as $i) {
      echo "<tr><td>$i[username]</td><td>$i[score]</td></tr>";
   }
   echo "</table>";
   echo "<a href=\"game.php\">Play</a>"

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dice</title>
   <link rel="stylesheet" href="public/css/game.css">
</head>

<body>
   <div id="container">

      <div id="game">
         <div id="us1" class="us">
            <h1 class="uname 1">Joueur 1</h1>
            <div id="rand1" class="rand">0</div>
            <div id="sc1" class="sc">0</div>
         </div>
         <div id="buttons">
            <div id="new" class="btn">
               <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
               <lord-icon src="https://cdn.lordicon.com/iiixgoqp.json" trigger="hover" colors="primary:#121331" state="hover-1" style="width:20px;height:20px"></lord-icon>Nouveau
            </div>
            <img id="image">
            <div id="lance" class="btn">Lance</div>
         </div>
      </div>

      <div id="user">
      </div>

   </div>
   <script src="public/js/game.js"></script>
</body>

</html>