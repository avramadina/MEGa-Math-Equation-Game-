<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/games.css" />
    <title>Games</title>
</head>

<body>
    <div class="topnav-right">
        <a href="../HTML/home.html">Home</a>
        <a href="../HTML/Register.html">Register</a>
        <a href="../HTML/Settings.html">Settings</a>
          <?php
            session_start();
            if (!isset($_SESSION["utilizator"]) || $_SESSION["utilizator"]=='')
                echo "<a href=\"../HTML/Login.html\">Login</a>";
            else
                echo "<a href=\"../PHP/logout.php\">".$_SESSION["utilizator"].": Logout</a>";
        ?>

    </div>
    <h1>GAMES</h1>
    <form class="form_buttons" method="POST" action="../HTML/Games.html">
        <button name="grad1" class="button1">grade<img class = "icons" src="../IMG/1.png" alt="1 img"></button>
        <button name="grad2" class="button2">grade<img class = "icons" src="../IMG/2.png" alt="2 img"></button>
        <button name="grad3" class="button3">grade<img class = "icons" src="../IMG/3.png" alt="3 img"></button>
        <button name="grad4" class="button4">grade<img class = "icons" src="../IMG/4.png" alt="4 img"></button></form>

    <hr>

    <section class="games">
        <a class="margin_img" href="../HTML/Learn.html"><img class="img_games" src="../IMG/games1.png" alt="img"></a>
        <a class="margin_img" href="../HTML/Game1.html"><img class="img_games" src="../IMG/games2.png" alt="img"></a>
        <a class="margin_img" href="../HTML/Game2.html"><img class="img_games" src="../IMG/games3.png" alt="img"></a>
        <a class="margin_img" href="../HTML/Game3.html"><img class="img_games" src="../IMG/games4.png" alt="img"></a>
        <a class="margin_img" href="../HTML/Game4.html"><img class="img_games" src="../IMG/games5.png" alt="img"></a>
        <a class="margin_img" href="../HTML/Game5.html"><img class="img_games" src="../IMG/games6.png" alt="img"></a>
        
        <!-- <?php
        
        // include ../CSS/game.css;
        //    session_start();
        //    if (!isset($_SESSION["utilizator"]) || $_SESSION["utilizator"]=='')
        //        echo "  <a class="margin_img" href="../HTML/Game5.html"><img class="img_games" src="../IMG/games6.png" alt="img"></a> ";
        //     else
        //         echo "<a href=\"../PHP/logout.php\">".$_SESSION["utilizator"].": Logout</a>";
        ?>  -->
    </section>
</body>

</html>