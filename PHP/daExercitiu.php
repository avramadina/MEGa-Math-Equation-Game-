<?php
include "getGradAndGame.php";
$exercitiu="";
class Mor
{
    public $exe;
    public function sinucidere($acces)
    { //1=apel din html ; 0=apel din print

        $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=iulia");
        $clasa = new GradAndGame();
        if ($acces == 1) {
            if (isset($_POST["grad"])) {
                $grad = $_POST["grad"];
            }


            if (isset($_POST["game"])) {
                $game = $_POST["game"];
            }
            $clasa->__set("grad", $grad);
            $clasa->__set("game", $game);
        } else {
            $grad = $clasa->__get("grad");
            $game =  $clasa->__get("game");
        }




        switch ($game) {
            case 1: {
                    // header('Location: ../HTML/Game1.html');
                    $namegame = "addandsubtract";
                    break;
                }
            case 2: {
                    //  header('Location: ../HTML/Game2.html');
                    $namegame = "multiplyanddivide";
                    break;
                }
            case 3: {
                    // header('Location: ../HTML/Game3.html');
                    $namegame = "fractionsanddecimals";
                    break;
                }
            case 4: {
                    // header('Location: ../HTML/Game4.html');
                    $namegame = "geometricshapes";
                    break;
                }
        }

        $max_id = "SELECT MAX(id) from multiplyanddivide";
        $max_id_run = pg_query($conn, $max_id);

        while ($row = pg_fetch_row($max_id_run)) {
            $max_id_run = $row[0];
            break;
        }
        //echo $grad . "->" . $namegame;
        //while (true) {
            $random_id = rand(1, $max_id_run);
           // echo $random_id;

            // $query = "SELECT exercitiu FROM " . $namegame . " WHERE grad = " . $grad . " AND id = " . $random_id ;
            // $query = "SELECT exercitiu FROM " . "multiplyanddivide" . " WHERE grad = '" . "1" . "' AND id = '" . $random_id . "' AND luat = 0;";
            // $query = "SELECT exercitiu FROM  addandsubtract  WHERE grad = " . $grad . "AND id = '" . $random_id .'";
            $query = "SELECT exercitiu FROM multiplyanddivide WHERE grad = 1 AND id = " . $random_id . " AND luat = 0 order by random() limit 1;";
            //$query = "SELECT * FROM users WHERE email = '" . $email . "' AND parola = '" . $parola . "' ;";
            $result = pg_query($conn, $query);
            //echo $result;
           // $exercitiu = null;
            // while ($row = pg_fetch_row($result)) {
            //     $exercitiu = $row[0];
            //     //array_push($exercitiu, $row[0]);
            //     break;
            // }
                $exercitiu = pg_fetch_row($result);
            if ($exercitiu != null) {
                $luat = 1;

                $query = "UPDATE multiplyanddivide SET luat = " . $luat . " WHERE id = " . $random_id . ";";
               // $query = "UPDATE " . "multiplyanddivide" . " SET luat = '" . $luat . "' WHERE id = '" . $random_id . "';";
                $result = pg_query($conn, $query);

               // break;
            }
       // }
       

        // $this->$exe = $exercitiu;
        $this->__set("exe", $exercitiu);

        if ($acces == 1) {
            switch ($game) {
                case 1: {
                        header('Location: ../HTML/Game1.html');
                        break;
                    }
                case 2: {
                        header('Location: ../HTML/Game2.html');
                        break;
                    }
                case 3: {
                        header('Location: ../HTML/Game3.html');
                        break;
                    }
                case 4: {
                        header('Location: ../HTML/Game4.html');
                        break;
                    }
            }
        }
    }
   
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }
}
 echo $exercitiu;

$mor = new Mor();
$mor->sinucidere(1);
