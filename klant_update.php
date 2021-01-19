<?php

require 'database.php';
include 'header.php';
include 'menu.php';

$id=$_GET['id'];
$sql = "SELECT * FROM users WHERE ID = :ph_id";
$statement = $db_conn->prepare($sql);
$statement->bindParam(":ph_id", $id);
$statement->execute();
$database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);


if(isset ($_POST['submit']) && $_POST['Email'] && $_POST['Wachtwoord'] !=""){
    $voornaam = $_POST['VoorNaam'];
    $achternaam = $_POST['AchterNaam'];
    $email = $_POST['Email'];
    $wachtwoord = $_POST['Wachtwoord'];
//UPDATE EEN WAARDE IN EEN DATABASE TABEL
$sql = "UPDATE users SET VoorNaam = :ph_VoorNaam, AchterNaam = :ph_AchterNaam,
Email = :ph_Email, Wachtwoord = :ph_Wachtwoord WHERE ID = :ph_id ";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_VoorNaam", $voornaam );
$stmt->bindParam(":ph_AchterNaam", $achternaam );
$stmt->bindParam(":ph_Email", $email );
$stmt->bindParam(":ph_Wachtwoord", $wachtwoord );
$stmt->bindParam(":ph_id", $id );
$stmt->execute();
header('location: klant_index.php');
}

?>

<div class="container">
    <h4 class="display-4">Update Klant</h4>
    <form action="" method="post">
        <div class="col-6"></div>
        <input type="text" name="VoorNaam" class="form-control" value="<?php echo $database_gegevens['VoorNaam'];?>">
        <input type="text" name="AchterNaam" class="form-control" value="<?php echo $database_gegevens['AchterNaam'];?>">
        <input type="text" name="Email" class="form-control" value="<?php echo $database_gegevens['Email'];?>">
        <input type="password" name="Wachtwoord" class="form-control">
        <button type="submit" class=" btn btn-info  mt-3" name="submit">opslaan!</button>
    </form>
</div>