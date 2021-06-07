<?php
$exercitiu=json_decode(file_get_contents("php://input"))->exercitiu;
$conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=iulia");
$query = "SELECT raspuns FROM multiplyanddivide WHERE exercitiu = $exercitiu order by random() limit 1;";
$result = pg_query($conn, $query);
$raspunsCorect = pg_fetch_row($result)[0];
error_reporting(E_ERROR | E_PARSE);
echo $raspunsCorect;
?>