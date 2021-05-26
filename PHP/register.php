<?php

    class Utilizator{ // CRUD = Create / Read / Update / Delete
     
        public function adauga_utilizator(){
            $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=iulia"); 

            if(isset($_POST["nume"]) && $_POST["nume"]!='' &&
                isset($_POST["prenume"]) && $_POST["prenume"]!='' &&
                isset($_POST["email"]) && $_POST["email"]!='' &&
                isset($_POST["parola"]) && $_POST["parola"]!='') {

                $nume = $_POST["nume"];
                $prenume = $_POST["prenume"];
                $email = $_POST["email"];
                $parola = md5($_POST["parola"]);
            
                $logat = 0;

                $query = pg_query($conn, "INSERT INTO users (id, nume, prenume, email, parola, logat)  VALUES ((SELECT COALESCE(MAX(id)+1,1) FROM users), '$nume', '$prenume', '$email', '$parola', '$logat');");
                if ( $query ) {
                    header('Location: ../HTML/Login.html');
                    die();
                }
                else echo "Nu m am conecat";
            
            } 
            else echo "Nu m am conectat";  
            
        }
    }

    
    $utilizator = new Utilizator();
    $utilizator->adauga_utilizator();
   

?>