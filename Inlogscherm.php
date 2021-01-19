<?php

require 'database.php';

if(isset($_POST['form_login'])){

  $email    =$_POST['form_email'];
  $password =$_POST['form_password'];

  $sql = "SELECT * FROM users WHERE email= :ph_email";
  $statement = $db_conn->prepare($sql);
  $statement->bindParam(":ph_email", $email); 
  $statement->execute();
  $database_gegevens= $statement->fetch(PDO::FETCH_ASSOC);

  if($database_gegevens != FALSE){

        if($database_gegevens['Wachtwoord'] == $password){
<<<<<<< HEAD
            echo'gebruiker mag inloggen!';
            header('')
=======
          header('location: klant_index.php');
>>>>>>> 9cc1f942d36e29ecb8dc68a8dfc80cd864beddb1
        }
  }
 
}
//0:46:23 tijd

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="signin.css" rel="stylesheet">
    <title>HandigeMannen</title>
</head>
<body class="text-center">
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="account_create.php">Account aanmaken</a>
    </li>
</ul>
    <main class="form-signin">
      <form method="post" action="">
        <h1 class="h3 mb-3 fw-normal"> Sign In</h1>

        <label for="form_email" class="visually-hidden">Email address</label>
        <input type="email" id="form_email" class="form-control" name="form_email" placeholder="Email address" required autofocus>

        <label for="form_password" class="visually-hidden">Password</label>
        <input type="password" id="form_password" name="form_password" class="form-control" placeholder="Password" required>

        <button class="w-100 btn btn-lg btn-warning" type="submit" name="form_login">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
      </form>
    </main>
    
    
        
      </body>
</html>
