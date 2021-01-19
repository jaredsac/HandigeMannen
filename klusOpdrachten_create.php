<?php

session_start();

$name = $_SESSION['VoorNaam'];

echo 'Welkom ' . $name;

require 'database.php';
include 'header.php';
include 'menu.php';


$sql = "SELECT * FROM klussen";
$statement = $db_conn->prepare($sql);
$statement->bindParam(":ph_id", $id);
$statement->execute();
$database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);


if(isset ($_POST['submit']) && $_POST['Klussen'] && $_POST['Klant'] && $_POST['Plaats'] !=""){
    $klus = $_POST['Klussen'];
    $klant = $_POST['Klant'];
    $plaats = $_POST['Plaats'];
    $datum = $_POST['Datum'];
//UPDATE EEN WAARDE IN EEN DATABASE TABEL
$sql = "INSERT INTO klussen (Klussen, Klant, Plaats, Datum) VALUES (:ph_klus, :ph_Klant, :ph_Plaats, :ph_Datum)" ;
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_klus", $klus );
$stmt->bindParam(":ph_Klant", $klant );
$stmt->bindParam(":ph_Plaats", $plaats );
$stmt->bindParam(":ph_Datum", $datum );
$stmt->execute();
header('location: klusOpdracht_index.php');
}

?>

<div class="container">
    <h4 class="display-4">Klus Opdracht Aanmaken</h4>
    <form action="" method="post">
        <div class="col-6"></div>
        <input type="text" name="Klussen" class="form-control" placeholder = "KLussen" >
        <input type="text" name="Klant" class="form-control" placeholder = "Klant" >
        <input type="text" name="Plaats" class="form-control" placeholder = "Plaats" >
        <input type="text" name="Datum" class="form-control" placeholder = "Datum">
        <button type="submit" class=" btn btn-info  mt-3" name="submit">opslaan!</button>
    </form>
</div>