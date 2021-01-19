<?php

require 'database.php';

$sql = "SELECT * FROM klussen";
$statement = $db_conn->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
 
<?php include 'header.php';?>
<?php include 'menu.php';?>
<body>
<div class="container">
<h4 class="display-4">klus Opdrachten</h4>
<table class="table">

    <thead>
        <tr>
            <th>Id</th>
            <th>Klussen</th>
            <th>Klant</th>
            <th>Plaats</th>
            <th>Datum</th>
            <th>DELETE</th>
            <th>UPDATE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($database_gegevens as $item):?>
            <tr>
                <td><?php echo $item['ID']?></td>
                <td><?php echo $item['Klussen']?></td>
                <td><?php echo $item['Klant']?></td>
                <td><?php echo $item['Plaats']?></td>
                <td><?php echo $item['Datum']?></td>
                <td>
                <a href="klusOpdracht_delete.php?id=<?php echo $item['ID']?>">DELETE</a>
                </td>
                <td>
                <a href="klusOpdracht_update.php?id=<?php echo $item['ID']?>">UPDATE</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
</body>
</html>