<?php

require 'database.php';
include 'header.php';
include 'menu.php';

$id=$_GET['id'];
$sql = "SELECT * FROM klussen WHERE ID = :ph_id";
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
$sql = "UPDATE klussen SET Klussen = :ph_klus, Klant = :ph_Klant,
Plaats = :ph_Plaats, Datum = :ph_Datum WHERE ID = :ph_id ";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_klus", $klus );
$stmt->bindParam(":ph_Klant", $klant );
$stmt->bindParam(":ph_Plaats", $plaats );
$stmt->bindParam(":ph_Datum", $datum );
$stmt->bindParam(":ph_id", $id );
$stmt->execute();
header('location: klusOpdracht_index.php');
}

?>

<div class="container">
    <h4 class="display-4">Update Klant</h4>
    <form action="" method="post">
        <div class="col-6"></div>
        <input type="text" name="Klussen" class="form-control" value="<?php echo $database_gegevens['Klussen'];?>">
        <input type="text" name="Klant" class="form-control" value="<?php echo $database_gegevens['Klant'];?>">
        <input type="text" name="Plaats" class="form-control" value="<?php echo $database_gegevens['Plaats'];?>">
        <input type="text" name="Datum" class="form-control" value="<?php echo $database_gegevens['Datum'];?>">
        <button type="submit" class=" btn btn-info  mt-3" name="submit">opslaan!</button>
    </form>
</div>