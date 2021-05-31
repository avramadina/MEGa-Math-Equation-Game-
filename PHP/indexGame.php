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
        <!-- <?php
        // session_start();
        // if ((isset($_SESSION["utilizator"]) || $_SESSION["utilizator"]!='') && $_SESSION["utilizator"]=="admin@yahoo.com")
        //     echo "<a href=\"../HTML/AddExercise.html\">AddExercise</a>";
        // else
        // {
        //     echo "<a href=\"../HTML/home.html\">Home</a>
        //     <a href=\"../HTML/Register.html\">Register</a>
        //     <a href=\"../HTML/Settings.html\">Settings</a>";
        // }
        // if (!isset($_SESSION["utilizator"]) || $_SESSION["utilizator"]=='')
        //     echo "<a href=\"../HTML/Login.html\">Login</a>";
        // else
        //     echo "<a href=\"../PHP/logout.php\">Logout</a>";
        ?> -->
        
        
        <a href="../HTML/home.html">Home</a>
        <a href="../HTML/Register.html">Register</a>
        <a href="../HTML/Settings.html">Settings</a>
          <?php
            session_start();
            if (!isset($_SESSION["utilizator"]) || $_SESSION["utilizator"]=='')
                echo "<a href=\"../HTML/Login.html\">Login</a>";
            else
                echo "<a href=\"../PHP/logout.php\">Logout</a>";
        ?> 

    </div>
    <h1>GAMES</h1>

    <form method="POST" action="../PHP/getExercise.php">
        <section class="form_buttons">

            <label>
                <input type="radio" name="grad" value="1" checked><a class="margin_img"><img class="img_grades" alt="img" src="../IMG/button1.PNG"></a>
            </label>
            <label>
                <input type="radio" name="grad" value="2"><a class="margin_img"><img class="img_grades" alt="img" src="../IMG/button2.PNG"></a>
            </label>
            <label>
                <input type="radio" name="grad" value="3"><a class="margin_img"><img class="img_grades" alt="img" src="../IMG/button3.PNG"></a>
            </label>
            <label>
                <input type="radio" name="grad" value="4"><a class="margin_img"><img class="img_grades" alt="img" src="../IMG/button4.PNG"></a>
            </label>

            <!-- <button name="grad" class="button1"><input type="radio"  value="1" checked>grade<a class="margin_img"><img class = "icons" src="../IMG/1.png" alt="1 img"></a></button>
            <button name="grad2" class="button2" onclick="selectareGrad(2)">grade<img class = "icons" src="../IMG/2.png" alt="2 img"></button>
            <button name="grad3" class="button3" onclick="selectareGrad(3)">grade<img class = "icons" src="../IMG/3.png" alt="3 img"></button>
            <button name="grad4" class="button4" onclick="selectareGrad(4)">grade<img class = "icons" src="../IMG/4.png" alt="4 img"></button> -->
        </section>

        <hr>

        <section class="games">
            <label class="label_games">
                <input id="hide"><a class="margin_img" href="../HTML/Learn.html"><img class="img_games" src="../IMG/games1.png" alt="img"></a>
            </label>
            <label class="label_games">
                <input type="submit" id="hide" name="game" value="1"><a class="margin_img"><img class="img_games" alt="img" src="../IMG/games2.png"></a>
            </label>
            <label class="label_games">
                <input type="submit" id="hide" name="game" value="2"><a class="margin_img"><img class="img_games" alt="img" src="../IMG/games3.png"></a>
            </label>
            <label class="label_games">
                <input type="submit" id="hide" name="game" value="3"><a class="margin_img"><img class="img_games" alt="img" src="../IMG/games4.png"></a>
            </label>
            <label class="label_games">
                <input type="submit" id="hide" name="game" value="4"><a class="margin_img"><img class="img_games" alt="img" src="../IMG/games5.png"></a>
            </label>
            <label class="label_games">
                <input id="hide"><a class="margin_img" href="../PHP/getExercise.php"><img class="img_games" src="../IMG/games6.png" alt="img"></a>
            </label>
            <!-- <a class="margin_img" href="../PHP/getExercise.php" onclick="selectGame(1)"><input type="image" name="game" value="1" alt="submit" class="img_games" src="../IMG/games2.png" alt="img"></a>
            <a class="margin_img" name="game" value="2" href="../PHP/getExercise.php" onclick="selectGame(2)"><img class="img_games" src="../IMG/games3.png" alt="img"></a>
            <a class="margin_img" name="game" value="3" href="../PHP/getExercise.php" onclick="selectGame(3)"><img class="img_games" src="../IMG/games4.png" alt="img"></a>
            <a class="margin_img" name="game" value="4" href="../PHP/getExercise.php" onclick="selectGame(4)"><img class="img_games" src="../IMG/games5.png" alt="img"></a> -->

        </section>
    </form>

    
    <!-- <form class="form_buttons" method="POST" action="../HTML/Games.html">
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
        <a class="margin_img" href="../HTML/Game5.html"><img class="img_games" src="../IMG/games6.png" alt="img"></a> -->
        
        <!-- <?php
        
        // include ../CSS/game.css;
        //    session_start();
        //    if (!isset($_SESSION["utilizator"]) || $_SESSION["utilizator"]=='')
        //        echo "  <a class="margin_img" href="../HTML/Game5.html"><img class="img_games" src="../IMG/games6.png" alt="img"></a> ";
        //     else
        //         echo "<a href=\"../PHP/logout.php\">".$_SESSION["utilizator"].": Logout</a>";
        ?>  -->
    <!-- </section> -->
</body>

</html>