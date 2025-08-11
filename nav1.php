<?php
if (!isset($_SESSION['notification'])) {
  $_SESSION['notification'] = 0;
}

?>
<style>
  .MonMenu {
    list-style: none;
    display: none;
  }

  .nav-link {
    color: green;
  }

  .nav-link:hover {
    border-bottom: 2px solid green;
  }

  .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='green' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    background-color: white;
  }
</style>
<div class="container-fluid position-fixed w-100 text-light" style="background-color: rgb(4, 95, 4); z-index: 999; height:50px">
  <div class="row align-items-center" 
  style="
    display:grid;
    grid-template-columns: 25% 50% 25%;
  ">
    <h6 class="float-start">+223 94-66-80-57</h6>
    <h3 >Siby-Center</h3>
    <a href="#" class="float-end">siby-center@gmail.com</a>
  </div>
</div>
<nav class="cc-navbar navbar navbar-expand-lg position-fixed navbar-light bg-light w-100 mt-5" style="box-shadow: 0.5px 0.5px 0.5px 0.5px; font-weight: bold; z-index: 999;">
  <div class="container-fluid">
    <a class="navbar-brand text-uppercase fw-bolder mx-4 py-3" href="#"> <img src="../Clients/siby_images/log_de_siby_prev_ui.png" alt="Siby-center" class="img rounded float-start" style="width: 80px; height: 70px;"></a>
    <button class="navbar-toggler" style="border: none;" type="button"
      data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon fs-1"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav" style="margin: 0 auto; color:green;">
        <li class="nav-item pe-4">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item pe-4">
          <a class="nav-link" href="menu.php">Menu</a>
        </li>
        <li class="nav-item pe-4">
          <a class="nav-link" href="resevation.php">Réservation</a>
        </li>
        <li class="nav-item pe-4">
          <a class="nav-link" href="avis_clients.php">Avis clients</a>
        </li>
        <li class="nav-item pe-4">
          <a class="nav-link" href="propos.php">À propos</a>
        </li>
      </ul>

      <!-- lien vers le panier -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item position-relative">
          <a href="voir_pannier.php" class="btn btn-outline-success mt-3 position-relative">
            🛒 Panier
          </a>
          <?php if ($_SESSION['notification'] > 0): ?>
            <sup style="width:20px; font-size:12px;" class="badge rounded bg-danger">
              <?php echo $_SESSION['notification'] ?>
            </sup>
          <?php endif ?>
        </li>
      </ul>

    </div>
  </div>
</nav>



<script>
  const afficher = document.querySelector('.afficherMenu');
  const element = document.querySelector('.MonMenu');
  afficher.addEventListener('click', function() {
    if (element.style.display === 'none') {
      element.style.display = 'block';
    } else {
      element.style.display = 'block';
    }
  });


  // afficher.onmouseover = function(){ element.style.display='block';}
  // afficher.onmouseout = function(){element.style.display='none';}
</script>