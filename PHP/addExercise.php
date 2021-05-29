<?php

$conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=iulia");
if(isset($_POST["exercitiu"]) && $_POST["exercitiu"]!='' &&
    isset($_POST["raspuns"]) && $_POST["raspuns"]!='' &&
    isset($_POST["grad"]) && $_POST["grad"]!='' &&
    isset($_POST["categorie"]) && $_POST["categorie"]!='') {

    $exercitiu = $_POST["exercitiu"];
    $raspuns = $_POST["raspuns"];
    $grad = $_POST["grad"];
    $categorie = $_POST["categorie"];

    $luat = 0;

    if($categorie == 1)
    {
        $query = pg_query($conn, "INSERT INTO addandsubtract (id, exercitiu, raspuns, grad, luat)  VALUES ((SELECT COALESCE(MAX(id)+1,1) FROM addandsubtract), '$exercitiu', '$raspuns', '$grad', '$luat');");
        if ( $query ) {
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        die();
    }
    else echo "Nu m am conecat";
    }

    if($categorie == 2)
    {
        $query = pg_query($conn, "INSERT INTO multiplyanddivide (id, exercitiu, raspuns, grad, luat)  VALUES ((SELECT COALESCE(MAX(id)+1,1) FROM multiplyanddivide), '$exercitiu', '$raspuns', '$grad', '$luat');");
        if ( $query ) {
            echo "am inserat";
        die();
    }
    else echo "Nu m am conecat";
    }

    if($categorie == 3)
    {
        $query = pg_query($conn, "INSERT INTO fractionsanddecimals (id, exercitiu, raspuns, grad, luat)  VALUES ((SELECT COALESCE(MAX(id)+1,1) FROM fractionsanddecimals), '$exercitiu', '$raspuns', '$grad', '$luat');");
        if ( $query ) {
            echo "am inserat";
        die();
    }
    else echo "Nu m am conecat";
    }

    if($categorie == 4)
    {
        $query = pg_query($conn, "INSERT INTO geometricshapes (id, exercitiu, raspuns, grad, luat)  VALUES ((SELECT COALESCE(MAX(id)+1,1) FROM geometricshapes), '$exercitiu', '$raspuns', '$grad', '$luat');");
        if ( $query ) {
            echo "am inserat";
        die();
    }
    else echo "Nu m am conecat";
    }
         
}

    ?>