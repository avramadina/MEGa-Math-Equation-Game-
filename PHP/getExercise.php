<?php

    $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres");
    if(isset($_POST["grad"]))
    {
        $grad = $_POST["grad"];
        // echo $grad;
    }

    if (isset($_POST["game"])) {
        $game = $_POST["game"];
        // if($game == 1)
        //     header('Location: ../HTML/Game1.html');
        // if($game == 2)
        //     header('Location: ../HTML/Game2.html');
        // if($game == 3)
        //     header('Location: ../HTML/Game3.html');
        // if($game == 4)
        //     header('Location: ../HTML/Game4.html');

        // $luat = 0;    
        switch ($game) {
            case 1: {
                //$query = "SELECT exercitiu FROM addandsubtract WHERE grad = '" . $grad . "' and luat = '" .$luat. "' ";
                $namegame = "addandsubtract";
                break;
            }
            case 2: {
                // $query = "SELECT * FROM multiplyanddivide WHERE grad = '" . $grad . "';";
                $namegame = "multiplyanddivide";
                break;
            }
            case 3: {
                // $query = "SELECT * FROM fractionsanddecimals WHERE grad = '" . $grad . "';";
                $namegame = "fractionsanddecimals";
                break;
            }
            case 4: {
                // $query = "SELECT * FROM geometricshapes WHERE grad = '" . $grad . "';";
                $namegame = "geometricshapes";
                break;
            }
        }

        $max_id = "SELECT MAX(id) from " . $namegame . ";";
        $max_id = pg_query($conn, $max_id);

        while ($row = pg_fetch_row($max_id)) {
            $max_id = $row[0];
            break;
        }

        while (true) {
            $random_id = rand(1, $max_id);

            $query = "SELECT exercitiu FROM " . $namegame . " WHERE grad = '" . $grad . "' AND id = '" . $random_id . "' AND luat = 0;";
            $result = pg_query($conn, $query);

            $exercitiu = null;
            while ($row = pg_fetch_row($result)) {
                $exercitiu = $row[0];
                break;
            }

            if ($exercitiu != null) {
                $luat = 1;

                $query = "UPDATE " . $namegame . " SET luat = '" . $luat . "' WHERE id = '" . $random_id . "';";
                $result = pg_query($conn, $query);

                break;
            }
        }

        echo $exercitiu;

    }

?>