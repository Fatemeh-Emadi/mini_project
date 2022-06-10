<?php //session_start();
include "model/database.php";

?>

<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">   
        <link rel="stylesheet" href="view/css/style.css">   
    </head >
    <body class="bg-secondary">      
    <nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
      <img src="images/a.png">
   <span class="ms-1"><a class="navbar-brand text-secondary" href="#"> Health Care</a></span> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php if($_SESSION["login_status"] != null && $_SESSION["login_status"] == true):?>
      <li class="nav-item">
          <a class="nav-link active text-secondary" aria-current="page" href=""><i class="fa fa-user"></i> <?php echo $_SESSION["first_name"]." ".$_SESSION["last_name"];?></a>
        </li>
        <?php endif;?>
        <li class="nav-item">
          <a class="nav-link active text-secondary" aria-current="page" href="index"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-secondary" aria-current="page" href="index"><i class="fa fa-info-circle"></i> About US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-secondary" aria-current="page" href="index"><i class="fa fa-phone-square"></i> Contact US</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-user-check"></i> Register
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-secondary" href="d-register"><i class="fa fa-user-nurse"></i> Register doctor</a></li>
            <li><a class="dropdown-item text-secondary" href="p-register"><i class="fa fa-user"></i> Register patient</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <?php if($_SESSION["login_status"] != null && $_SESSION["login_status"] == true):?>
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout">log out</a>
        </li>
        <?php endif;?>
      
      </ul>
      <form class="d-flex" method="post" action="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="text">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
 