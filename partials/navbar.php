<?php
include("head.php");
 $now = strval(basename($_SERVER['PHP_SELF'], '.php'));
?>
<nav class="navbar navbar-expand-lg position-fixed w-100" style="z-index: 999; background:white;">
  <div class="container">
        <a class="navbar-brand d-flex align-items-center" href=".">
            <img src="./assets/img/logo.png" alt="logo" class="me-3" height="36px" width="36px">
            <h1 class="my-auto">CREANOMIC</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?= strcmp($now, 'index') == 0 ? ' active' : '' ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= strcmp($now, 'fest') == 0 ? ' active' : '' ?>" href="fest.php">Fest</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= strcmp($now, 'talkshow') == 0 ? ' active' : '' ?>" href="talkshow.php">Talkshow</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= strcmp($now, 'competition') == 0 ? ' active' : '' ?>" href="competition.php">Competition</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= strcmp($now, 'merchandise') == 0 ? ' active' : '' ?>" href="merchandise.php">Merchandise</a>
            </li>
            <li class="nav-item">
              <a class="nav-link special-nav" href="fest.php">Buy Tickets</a>
            </li>
          </ul>
        </div>
    
  </div>
</nav>