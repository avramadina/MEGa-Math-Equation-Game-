<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/games.css" />
    <title>Games</title>
    <script src="../JS/exercise.js"></script>
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
                echo "<a href=\"../PHP/logout.php\">Logout</a>";
        ?> 

    </div>
    <h1>GAMES</h1>

    <form method="POST" action="../PHP/sendGame.php">
        <section class="form_buttons">

        <label>
                <input type="radio" name="grad" value="1" checked><a class="margin_img" onclick="setGrad(1)"><img class="img_grades" alt="img" src="../IMG/button1.PNG"></a>
            </label>
            <label>
                <input type="radio" name="grad" value="2"><a class="margin_img" onclick="setGrad(2)"><img class="img_grades" alt="img" src="../IMG/button2.PNG"></a>
            </label>
            <label>
                <input type="radio" name="grad" value="3"><a class="margin_img" onclick="setGrad(3)"><img class="img_grades" alt="img" src="../IMG/button3.PNG"></a>
            </label>
            <label>
                <input type="radio" name="grad" value="4"><a class="margin_img" onclick="setGrad(4)"><img class="img_grades" alt="img" src="../IMG/button4.PNG"></a>
            </label>

        </section>

        <hr>

        <section class="games">
            <label class="label_games">
                <input id="hide"><a class="margin_img" href="../HTML/Learn.html"><img class="img_games" src="../IMG/games1.png" alt="img"></a>
            </label>
           
            <label class="label_games">
                <input type="submit" id="hide" name="game" value="2"><a class="margin_img"><img class="img_games" alt="img" src="../IMG/game2.png"></a>
            </label>
      
            </label>
            <label class="label_games">
                <input id="hide"><a class="margin_img" href="../HTML/Quiz.html"><img class="img_games" src="../IMG/quiz.png" alt="img"></a>
            </label>
           

        </section>
    </form>

</body>

</html>