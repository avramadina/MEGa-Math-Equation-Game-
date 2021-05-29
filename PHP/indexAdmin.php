<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/addExercise.css" />
    <title>Administrativ</title>
</head>

<body>

<div class="topnav-right">

    <?php
        session_start();
        if ((isset($_SESSION["utilizator"]) || $_SESSION["utilizator"]!='') && $_SESSION["utilizator"]=="admin@yahoo.com")
            echo "<a href=\"../HTML/home.html\">Logout</a>";
        else
            header('Location: ../PHP/IndexGame.php');

        ?>
</div>


    <h1>WELCOME ADMIN!!</h1>
    <!-- <script>
        function valideaza_formular() {
            var grad = document.forms["reg"]["grad"].value;

            if (grad > 5 && grad < 0) alert("Gradul este intre 1 si 4");
            return (grad > 5 && grad < 0);
        }
    </script> -->
    <form name="reg" method="POST" action="../PHP/addExercise.php" >
        <div class="imgcontainer">
            <label for="categorie"><b>Category</b></label>

            <select name="categorie">
                  <option value="1">Add and Subtract</option>
                  <option value="2">Multiply and Divide</option>
                  <option value="3">Fractions and Decimals</option>
                  <option value="4">Geometric Shapes</option>
                  <option value="5">Quiz</option>
                </select>

            <label for="exercitiu"><b>Exercise</b></label>
            <input type="text" id="exercitiu" placeholder="Enter Exercise" name="exercitiu" required>

            <label for="raspuns"><b>Solving</b></label>
            <input type="text" id="raspuns" placeholder="Enter Solving" name="raspuns" required>

            <label for="grad"><b>Grad</b></label>
            <input type="number" id="grad" placeholder="Enter grad" name="grad" required>


            <br>
            <button class="button_save" type="submit" name="submit">Save</button>

        </div>


    </form>




</body>

</html>