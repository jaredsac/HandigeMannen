<?php 
require 'database.php';

if(isset ($_POST['submit']) && $_POST['Email'] && $_POST['Wachtwoord'] !=""){
    $voornaam= $_POST['VoorNaam'];
    $achternaam= $_POST['AchterNaam'];
    $email= $_POST['Email'];
    $wachtwoord = $_POST['Wachtwoord'];
    //ZET WAARDE IN DATABASE
 $sql = "INSERT INTO users (VoorNaam, AchterNaam, Email, Wachtwoord) VALUES (:ph_voornaam, :ph_achternaam, :ph_email, :ph_wachtwoord)" ;
 $stmt = $db_conn->prepare($sql); //stuur naar mysql.
 $stmt->bindParam(":ph_voornaam", $voornaam );
 $stmt->bindParam(":ph_achternaam", $achternaam);
 $stmt->bindParam(":ph_email", $email);
 $stmt->bindParam(":ph_wachtwoord", $wachtwoord);
 $stmt->execute();
 header('location: Inlogscherm.php');
}

?>
<?php include 'header.php';?>
<div class="container">
    <h4 class="display-4">Account Aanmaken</h4>
    <form action="" method="post">
        <div class="col-6"></div>
        <input type="text" name="Voornaam" class="form-control" placeholder="geef je voornaam.">
        <input type="text" name="Achternaam" class="form-control" placeholder="geef je achternaam.">
        <input type="text" name="Email" class="form-control" placeholder="geef je email.">
        <input type="password" name="Wachtwoord" class="form-control" placeholder="geef je wachtwoord.">
        <button type="submit" class=" btn btn-info  mt-3" name="submit">opslaan!</button>
</div>
</form>