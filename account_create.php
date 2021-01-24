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
 header('location: Inlogscherm.php');
}



?>
<?php include 'header.php';?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<meta name="theme-color" content="#7952b3">


    <script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=Lqks-u8DP869W-4fGqSFAe96YfhPyMECwIByk0_ZvhKlJ0MJwaMXzHRR0pX9OdyvV0wzaKxiMqhqjyHu9g7Y2eqdoqIPk1Fjjb7xbp6tJH0" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://ff.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9nZXRib290c3RyYXAuY29tL2RvY3MvNS4wL2V4YW1wbGVzL2NoZWNrb3V0Lw"/><style>
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
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Maak Een Account</h2>
      
    </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Vul In</h4>
        <form action="" method="post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" name="VoorNaam" class="form-control" placeholder="Voornaam" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" name="AchterNaam" class="form-control" placeholder="Achternaam" required>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="text" name="Email" class="form-control" placeholder="Email">
            </div>

            <div class="col-12">
              <label for="password" class="form-label">Passsword</label>
              <input type="password" name="Wachtwoord" class="form-control" placeholder="Wachtwoord" required>
            </div>

            
          </div>

          <hr class="my-4">

          
          <button class="w-100 btn btn-lg"style="background-color: #F6AA1C" type="submit" class=" btn btn-info  mt-3" name="submit">opslaan!</button>

        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021 Klusbedrijf handige Mannen</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>