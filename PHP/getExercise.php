<?php

$conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=iulia");
        if(isset($_POST["grad"]))
        {
            $grad = $_POST["grad"];
            echo $grad;
        }

        if (isset($_POST["game"])) {
            $game = $_POST["game"];
            if($game == 1)
                header('Location: ../HTML/Game1.html');
            if($game == 2)
                header('Location: ../HTML/Game2.html');
            if($game == 3)
                header('Location: ../HTML/Game3.html');
            if($game == 4)
                header('Location: ../HTML/Game4.html');
        }
            
            

?>