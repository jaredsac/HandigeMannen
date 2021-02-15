<?php
require 'database.php';


$id=$_GET['id'];
//VERWIJDER EEN WAARDE UIT EEN DATABASE TABEL
$sql = "DELETE FROM klussen WHERE Klussen_ID = :ph_Klussen_ID";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_Klussen_ID", $id );
$stmt->execute();

header('location: klusOpdracht_index.php');
?>