<?php
// class Login{
        // public function autentificare(){

            $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=iulia"); 
            session_start();
            if(isset($_POST["email"]) && $_POST["email"]!='' &&
                isset($_POST["parola"]) && $_POST["parola"]!='') {

                $email = $_POST["email"];
                $parola = md5($_POST["parola"]);
            
                $query = "SELECT * FROM users WHERE email = $1 AND parola = $2;";
                $result = pg_query_params($conn, $query, array($email, $parola));
                if(pg_num_rows($result) > 0) 
                    $_SESSION["utilizator"] = $_POST["email"];
                    header('Location: ../PHP/indexAdmin.php');
                    die();
            }
                
            //      else echo "Nu m am conectat"; 
            
            // } 
            // else echo "Nu m am conectat";  

        //}

    // }

    // $utilizator = new Login();
    // $utilizator->autentificare();


    ?>