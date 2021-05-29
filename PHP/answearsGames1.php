<?php
$conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres"); 
// if($_POST["evalueaza"])
$exercitiu = $_POST["exercitiu"];
$query2 = "SELECT raspuns FROM addandsubstract WHERE exercitiu = "$exercitiu";";
$raspuns = pg_query($conn, $query2);


?>