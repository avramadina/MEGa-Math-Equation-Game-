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

    <h1>WELCOME ADMIN!</h1>

    <form enctype="multipart/form-data" name="reg" method="POST" action="../PHP/addExercise.php" >
        <div class="imgcontainer">
            <label for="categorie"><b>Category</b></label>

            <select name="categorie">
                  
                  <option value="2">Exercises</option>
                  
                </select>

            <label for="exercitiu"><b>Exercise</b></label>
            <input type="text" id="exercitiu" placeholder="Enter Exercise" name="exercitiu">

            <label for="raspuns"><b>Solving</b></label>
            <input type="text" id="raspuns" placeholder="Enter Solving" name="raspuns">

            <label for="grad"><b>Grad</b></label>
            <input type="number" id="grad" placeholder="Enter grad" name="grad">

            <div class="buttons">
                <input class="button_save" type="submit" name="btn_submit" value="Save"/>
                <input class="button_save" type="file" name="userfile" accept=".csv" />
                
                <input class="button_save" type="submit" name="btn_submit" value="Import CSV" />
                <input class="button_save" type="submit" name="btn_submit" value="Export CSV" />
            </div>

        </div>

    </form>

</body>

</html>