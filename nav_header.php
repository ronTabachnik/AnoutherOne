<?php 
function has_prefix($string, $prefix) {
  return substr($string, 0, strlen($prefix)) == $prefix;
}
?>

<header>
    <!-- Fixed navbar -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="styles/images/ProductLogo.png" alt="mdo" width="32" height="32" class="rounded bg-light center" style="light">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link<?= has_prefix($_SERVER['REQUEST_URI'], '/index.php') ? ' active' : '' ?>" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= has_prefix($_SERVER['REQUEST_URI'], '/about.php') ? ' active' : '' ?>" aria-current="page" href="about.php">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= has_prefix($_SERVER['REQUEST_URI'], '/recycling.php') ? ' active' : '' ?>" aria-current="page" href="recycling.php">Recycling</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= has_prefix($_SERVER['REQUEST_URI'], '/market.php') ? ' active' : '' ?>" aria-current="page" href="market.php">Market</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= has_prefix($_SERVER['REQUEST_URI'], '/map.php') ? ' active' : '' ?>" aria-current="page" href="map.php">Map</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?= has_prefix($_SERVER['REQUEST_URI'], '/contact.php') ? ' active' : '' ?>" aria-current="page" href="contact.php">Contact us</a>
            </li>
          </ul>
<? if(empty( $_SESSION['user'])) { ?>
          <div class="col-md-3 text-end">
            <a href="signin.php"><button type="button" href="signin.php" class="btn btn-outline-primary me-2">Sign in</button></a>
            <a href="signup.php"><button type="button" href="signup.php" class="btn btn-primary">Sign up</button></a>
          </div>
<? } else { ?>
			<div class="col-md-3 text-end">
			<span class="me-2 btn-outline-primary" style="color:#fff"><?=  $_SESSION['user']['name'] ?></span>	
            <a href="new_item.php"><button type="button" href="new_item.php" class="btn btn-primary">Add item</button></a>
			<a href="signout.php"><button type="button" href="signout.php" class="btn btn-outline-primary me-2">Sign out</button></a>
		 </div>
<? } ?>
        </div>
      </div>
    </nav>
  </header>
