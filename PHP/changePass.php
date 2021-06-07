<?php
class ChangePass { // CRUD = Create / Read / Update / Delete
    public function schimbare_parola() {
        $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=iulia");

        if (isset($_POST["email"]) && isset($_POST["parola_curenta"]) && isset($_POST["parola_noua"])) {
            $email = $_POST["email"];
            $parola_curenta = md5($_POST["parola_curenta"]);
            $parola_noua = md5($_POST["parola_noua"]);

            // verific daca exista in baza de date
            $query = "SELECT * FROM users WHERE parola = '" . $parola_curenta . "';";
            $result = pg_query($conn, $query);

            // in caz afirmativ
            if (pg_num_rows($result) > 0) {
                // actualizez parola
                $query = "UPDATE users SET parola = '" . $parola_noua . "' WHERE email = '" . $email . "';";
                $result = pg_query($conn, $query);
                
                return pg_affected_rows($result) > 0;
            }
        }

        return false;
    }
}

$utilizator = new ChangePass();

if ($utilizator->schimbare_parola()) {
    echo "<script>
        alert('Parola s-a actualizat cu succes.');
        window.location.replace('../HTML/Login.html');
    </script>";
   
} else {
    echo "<script>
        alert('Parola nu s-a actualizat. Ai gresit user/parola.');
        window.location.replace('../HTML/ChangePass.html');
    </script>";
    
}
