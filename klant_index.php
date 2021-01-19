<?php

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
<h4 class="display-4">Klant</h4>
<table class="table">

    <thead>
        <tr>
            <th>Id</th>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Klus</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($database_gegevens as $item):?>
            <tr>
                <td><?php echo $item['ID']?></td>
                <td><?php echo $item['VoorNaam']?></td>
                <td><?php echo $item['AchterNaam']?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
</body>
</html>