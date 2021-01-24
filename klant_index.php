<?php

  session_start();
require 'database.php';

$sql = "SELECT * FROM users";
$statement = $db_conn->prepare($sql);
$statement->execute();
$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
 
<?php include 'header.php';?>


  

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

   

<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" Style="background-color: #3c1414;">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="klusOpdracht_index.php">Klusbedrijf Handige Mannen</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    <a class="nav-link" href="inlogscherm.php">Sign out</a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
          <?php
            $name = $_SESSION['VoorNaam'];

            echo "Welkom"  . $name;
          ?>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="klant_index.php">klanten weergeven</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="klant_create.php">Klant aanmaken.</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="medewerker_index.php">medewerker weergeven.</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="klusOpdracht_index.php">klusopdracht weergeven.</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="klusOpdrachten_create.php">klusopdracht Aanmaken.</a>
          </li>
        </ul>

        
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
        <h1 class="h2">Klanten</h1>
        
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
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
    </main>
  </div>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>