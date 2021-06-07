<?php

$conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=iulia");
if ($_POST['btn_submit'] == "Save") {
    if (isset($_POST["exercitiu"]) && isset($_POST["raspuns"]) && isset($_POST["grad"]) && isset($_POST["categorie"])) {
        $exercitiu = $_POST["exercitiu"];
        $raspuns = $_POST["raspuns"];
        $grad = $_POST["grad"];
        $categorie = $_POST["categorie"];

        $luat = 0;

        if ($categorie == 2) {
            $query = pg_query($conn, "INSERT INTO exercises (id, exercitiu, raspuns, grad, luat)  VALUES ((SELECT COALESCE(MAX(id)+1,1) FROM exercises), '$exercitiu', '$raspuns', '$grad', '$luat');");
            if ($query) {
                echo "<script>
                        alert('Am inserat cu succes.');
                        window.location.replace('../PHP/indexAdmin.php');
                    </script>";
                die();
            } else {
                echo "<script>
                    alert('Nu am inserat.');
                    window.location.replace('../PHP/indexAdmin.php');
                </script>";
            }
        }
    }
} else if ($_POST['btn_submit'] == "Import CSV") {
    if (isset($_POST["categorie"])) {
        $categorie = $_POST["categorie"];
        $nume_tabel = null;
        if ($categorie == 2) {
            $nume_tabel = "exercises";
        }  

        if ($nume_tabel != null) {
            $filename = $_FILES['userfile']['tmp_name'];

            $query = "COPY public." . $nume_tabel . " FROM '" . $filename . "' DELIMITER ',' CSV HEADER;";
            $result = pg_query($conn, $query);

            if ($result != false) {
                echo '<script>alert("Am importat cu succes fisierul.")
                window.history.back();</script>';
            } else {
                echo '<script>alert("Internal error. Try again")</script>';
            }
            die();
        }
    }
} else if ($_POST['btn_submit'] == "Export CSV") {
    if (isset($_POST["categorie"])) {
        $categorie = $_POST["categorie"];
        $nume_tabel = null;
        if ($categorie == 2) {
            $nume_tabel = "exercises";
        } 
        

        if ($nume_tabel != null) {
            $query = "SELECT * FROM " . $nume_tabel . ";";
            $result = pg_query($conn, $query);
            $date = array();

            // aici iau datele si le pun in array-ul $date
            while ($row = pg_fetch_row($result)) {
                $date[] = $row;
            }

            $header_name = 'Content-Disposition: attachment; filename=' . 'date_' . $nume_tabel . '.csv';

            header('Content-Type: text/csv; charset=utf-8');
            header($header_name);
            $output = fopen('php://output', 'w');
            fputcsv($output, array('ID', 'Exercitiu', 'Raspuns', 'Grad', 'Luat'));

            if (count($date) > 0) {
                foreach ($date as $row) {
                    fputcsv($output, $row);
                }
            }
        }
    }
}

?>