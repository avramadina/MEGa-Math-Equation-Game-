<?php

$grad=json_decode(file_get_contents("php://input"))->grad;
 $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=iulia");
 $max_id = "SELECT MAX(id) from exercises";
 $max_id_run = pg_query($conn, $max_id);
 while ($row = pg_fetch_row($max_id_run)) {
     $max_id_run = $row[0];
     break;
 }
 $random_id = rand(1, $max_id_run);
 $query = "SELECT exercitiu FROM exercises WHERE grad = $grad order by random() limit 1;";
 $result = pg_query($conn, $query);

 while($result==false){
    $random_id = rand(1, $max_id_run);
    $query = "SELECT exercitiu FROM exercises WHERE grad = $grad order by random() limit 1;";
    $result = pg_query($conn, $query);
 }
 $exercitiu = pg_fetch_result($result, 0);
 error_reporting(E_ERROR | E_PARSE);
print_r($exercitiu);

?>