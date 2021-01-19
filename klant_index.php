<?php


session_start();

$name = $_SESSION['VoorNaam'];

echo 'Welkom ' . $name;

require 'database.php';

$sql = "SELECT * FROM users";
$statement = $db_conn->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
 
<?php include 'header.php';?>
<?php include 'menu.php';?>
<body>
<div class="container">
<h4 class="display-4">Klanten</h4>
<table class="table">

    <thead>
        <tr>
            <th>ID</th>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Gebruiker</th>
            <th>DELETE</th>
            <th>UPDATE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($database_gegevens as $item):?>
            <tr>
                <td><?php echo $item['ID']?></td>
                <td><?php echo $item['VoorNaam']?></td>
                <td><?php echo $item['AchterNaam']?></td>
                <td><?php echo $item['Gebruiker']?></td>
                <td>
                <a href="klant_delete.php?id=<?php echo $item['ID']?>">DELETE</a>
                </td>
                <td>
                <a href="klant_update.php?id=<?php echo $item['ID']?>">UPDATE</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
</body>
</html>