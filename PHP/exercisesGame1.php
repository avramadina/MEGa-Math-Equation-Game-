<?php
class exercitii{
 public function autentificare(){

    $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres"); 

    // if(isset($_POST["grad"]); iau butonul de submit din html 
    $grad = $_GET["grad1"];
    $query = "SELECT * FROM addandsubstract WHERE grad = 1 AND ales = 0;";
    $gasit = pg_query($conn, $query);
    if(pg_num_rows($gasit) > 0)
    {   $query1 = "SELECT exercitiu FROM addandsubstract WHERE grad = 1 AND ales = 0;";
        $exercitiu = pg_query($conn, $query1);
        $query2 = "SELECT raspuns FROM addandsubstract WHERE exercitiu = "$exercitiu";";
        $raspuns = pg_query($conn, $query2);
        // trimit la afisare exercitiul si astept cerere de raspuns


            die();
        }
         else echo "joc terminat"; 

    } 
    else echo "Nu exista cerere de joc";

}
}







?>