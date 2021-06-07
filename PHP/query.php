<?php
$ex1 = $_POST["ex1"];
$ex2 = $_POST["ex2"];
$ex3 = $_POST["ex3"];
$ex4 = $_POST["ex4"];
$ex5 = $_POST["ex5"];
$ex6 = $_POST["ex6"];
$ex7 = $_POST["ex7"];
$ex8 = $_POST["ex8"];
$ex9 = $_POST["ex9"];
$ex10 = $_POST["ex10"];
$suma = 0;
if ($ex1 == "D")
    $suma++;
if ($ex2 == "D")
    $suma++;
if ($ex3 == "D")
    $suma++;
if ($ex4 == "B")
    $suma++;
if ($ex5 == "D")
    $suma++;
if ($ex6 == "B")
    $suma++;
if ($ex7 == "D")
    $suma++;
if ($ex8 == "B")
    $suma++;
if ($ex9 == "B")
    $suma++;
if ($ex10 == "C")
    $suma++;
if($suma < 5)
header('Location: ../HTML/LowIQ.html');
else
header('Location: ../HTML/HighIQ.html');
?>
