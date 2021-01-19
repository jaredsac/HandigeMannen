<?php 
require 'database.php';

if(isset ($_POST['submit']) && $_POST['Email'] && $_POST['Wachtwoord'] !=""){
    
    
    $voornaam = $_POST['VoorNaam'];
    $achternaam = $_POST['AchterNaam'];
    $email = $_POST['Email'];
    $wachtwoord = $_POST['Wachtwoord'];
    //ZET WAARDE IN DATABASE
 $sql = "INSERT INTO users (VoorNaam, AchterNaam, Email, Wachtwoord) VALUES (:ph_VoorNaam, :ph_AchterNaam, :ph_Email, :ph_Wachtwoord)" ;
 $stmt = $db_conn->prepare($sql); //stuur naar mysql.
 $stmt->bindParam(":ph_VoorNaam", $voornaam );
 $stmt->bindParam(":ph_AchterNaam", $achternaam );
 $stmt->bindParam(":ph_Email", $email );
 $stmt->bindParam(":ph_Wachtwoord", $wachtwoord );
 $stmt->execute();
 header('location: klant_index.php');
}



?>
<?php include 'header.php';?>
<?php include 'menu.php';?>
<div class="container">
    <h4 class="display-4">Voeg Klant Toe</h4>
    <form action="" method="post">
        <div class="col-6"></div>
        <input type="text" name="VoorNaam" class="form-control" placeholder="Voornaam">
        <input type="text" name="AchterNaam" class="form-control" placeholder="Achternaam">
        <input type="text" name="Email" class="form-control" placeholder="Email">
        <input type="password" name="Wachtwoord" class="form-control" placeholder="Wachtwoord">
        <button type="submit" class=" btn btn-info  mt-3" name="submit">opslaan!</button>
</div>
</form>