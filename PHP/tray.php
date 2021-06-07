<?php
//$grad = $_POST["grad"];
$grad=json_decode(file_get_contents("php://input"))->grad;
//echo file_get_contents("php://input");
//echo $grad;
//echo $grad->grad;
//print_r($grad) ;
//exit();
 $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=iulia");
 $max_id = "SELECT MAX(id) from multiplyanddivide";
 $max_id_run = pg_query($conn, $max_id);
 while ($row = pg_fetch_row($max_id_run)) {
     $max_id_run = $row[0];
     break;
 }
 $random_id = rand(1, $max_id_run);
 $query = "SELECT exercitiu FROM multiplyanddivide WHERE grad = $grad order by random() limit 1;";
 //echo $query;
 //exit();
 $result = pg_query($conn, $query);

 while($result==false){
    $random_id = rand(1, $max_id_run);
    $query = "SELECT exercitiu FROM multiplyanddivide WHERE grad = $grad order by random() limit 1;";
    $result = pg_query($conn, $query);
 }
 $exercitiu = pg_fetch_result($result, 0);
 error_reporting(E_ERROR | E_PARSE);
print_r($exercitiu."=");




?>