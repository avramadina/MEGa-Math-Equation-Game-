<?php
class Login
{
    public function autentificare()
    {
        $conn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres");
        session_start();
        if (isset($_POST["email"]) && isset($_POST["parola"])) {
            $email = $_POST["email"];
            $parola = md5($_POST["parola"]);

            $query = "SELECT * FROM users WHERE email = '" . $email . "' AND parola = '" . $parola . "' ;";
            $result = pg_query($conn, $query);

            if (pg_num_rows($result) > 0) {
                $_SESSION["utilizator"] = $_POST["email"];
                return true;
            }
        }
        return false;
    }
}

$utilizator = new Login();

if ($utilizator->autentificare()) {
    if (isset($_SESSION["utilizator"])) {
        // daca utilizatorul a folosit la logare email-ul "admin@yahoo.com", atunci merg in PHP/indexAdmin.php
        if ($_SESSION["utilizator"] == "admin@yahoo.com") {
            // header('Location: ../PHP/indexAdmin.php');
            echo "<script>
                alert('Te-ai logat cu contul de admin.');
                window.location.replace('../PHP/indexAdmin.php');
            </script>";
        } else { // daca nu, il duc in PHP/indexGame.php
            // header('Location: ../PHP/indexGame.php');
            echo "<script>
                alert('Te-ai logat cu succes.');
                window.location.replace('../PHP/indexGame.php');
            </script>";
        }
    }
} else {
    // header('Location: ../HTML/Login.html');
    echo "<script>
        alert('Logarea a esuat. .');
        window.location.replace('../HTML/Login.html');
    </script>";
}
?>
