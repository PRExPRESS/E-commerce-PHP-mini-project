<?php 

$Fname ="Pasindu";
$lName ="Rashmika";
$email = "ampraush@gmail.com";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xpress PC</title>
  
  
  

</head>
<body class="bg-dark">
  <!--Start nav bar-->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
    <a class="navbar-cream" href="index.php">Xpress PC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    
      <div class="collapse navbar-collapse " id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto  ">
          <li class="nav-item">
            <a class="nav-link" href="myaccount.php">My Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Check Out</a>
          </li>
          <li class="nav-item">
            <?php if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
            {
            ?>
              <a class="nav-link" href="logout.php">Sign out</a>
            <?php }else{?>
              <a class="nav-link" href="login.php">Sign in</a>
            <?php } ?>
          
          </li>    
        </ul>
      </div>  
  </nav>
  <!--End nav bar-->
  <!--Start second  nav bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ">
        <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="#">All Laptop</a>
        <a class="nav-link" href="#">Gamming Laptop</a>
        <a class="nav-link" href="#">Professional Laptop</a>
        <a class="nav-link" href="#">Ultrabooks </a>
        <a class="nav-link" href="#">Accessories </a> 
      </div>
      <input class=" col-7 col-sm-7 col-md-7 col-lg-2 col-xl-2  ml-aut form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn  btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </div>
    
      
       
      
    
  </nav>
  <hr>
  </div>
  <!--End second  nav bar-->