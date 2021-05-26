<?php
class Login{
        public function autentificare(){

            $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=iulia"); 

            if(isset($_POST["email"]) && $_POST["email"]!='' &&
                isset($_POST["parola"]) && $_POST["parola"]!='') {

                $email = $_POST["email"];
                $parola = md5($_POST["parola"]);
            
                $query = "SELECT * FROM users WHERE email = '$email' AND parola = '$parola';";
                $result = pg_query($conn, $query);
                if(pg_num_rows($result) > 0) {
                    // $guery2 = ""
                    header('Location: Games.html');
                    die();
                }
                 else echo "Nu m am conectat"; 
            
            } 
            else echo "Nu m am conectat";  

        }

    }

    $utilizator = new Login();
    $utilizator->autentificare();


    ?>