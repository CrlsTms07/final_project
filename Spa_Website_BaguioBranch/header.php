<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <script src="status.js"></script> -->
   <link rel="stylesheet" href="resources/styles/styles.css">
</head>
<body>  

<nav id="home" class="navbar navbar-expand-md navbar-dark fixed-top bg-body-tertiary" data-bs-theme="dark" style="box-shadow:  2px 2px 20px 2px rgb(119, 117, 108);">
  <div class="container-fluid">
    <a class="navbar-item fs-4 " href="index.php">MOON SPA </a>
    <span class="nav-item ms-3 fs-5" style="color: white;"> <span style="color:red"> <?php  echo $_SESSION['username']  ?> </span>   you're in Baguio</span>
    <button style="border: none;" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Welcome to Moon SPA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-body-tertiary" >
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 bg-body-tertiary">
          <li class="nav-item">
            <a class="nav-link" href="logout.php" > </a>
          </li>
          <li class="nav-item">
            <a class="nav-link "  href="index.php">Home</a>
          </li>
          <li>
            <a class="nav-link" href="#services">Services</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="#aboutUs">About Us</a>
          </li>
          <li class="nav-item" style="background-color:rgb(119, 119, 119); border-radius: 20rem;">
            <a class="nav-link  isLoggedIn" href="logout.php">Log Out</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Other Branch
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="../Spa_Website_CaviteBranch/index.php">Cavite</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

