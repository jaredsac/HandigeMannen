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
            <a class="nav-link" href="medewerker_create.php">Medewerker Aanmaken.</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="klusOpdracht_index.php">klusopdracht weergeven.</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="klusOpdrachten_create.php">klusopdracht Aanmaken.</a>
          </li>
        </ul>

        
    </nav>