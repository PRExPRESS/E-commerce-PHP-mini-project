<?php
session_start();
    include 'head.php';
   
    
    $Fname ="Pasindu";
    $lName ="Rashmika";
    $email = "ampraush@gmail.com";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body class="bg-dark">

<div class="container mt-5 " >
      <form name="myForm" action="action.php" onsubmit="return validation()" method="post" id="cont"  class="col-12 col-sm-12- col-md-4 modal-content align-middle ">
        
      <!----------------ALERT---------------->
        <div class="popup  " onclick="validation()">
            <span class="popuptext lead col p-2" id="myPopup">Field must be Filled!</span>
          </div>
          <!------------Invalid username or password------------->
          <?php if(isset($_GET['id'])){ ?>
            <div class="col mt-2 p-2 rounded bg-red">
              <div class="lead text-white text-center">Invalid username or password</div>
            </div>
          <?php } ?>
          
          <div class=" mt-2 h3 text-center text-warning">XPRESSPC</div>
          <legend class="text-center text-white">SIGN IN </legend>
          
        
        <div class="form-group text-white">
          <label for="exampleInputEmail1">Username*</label>
          <input type="text" class="form-control " autocomplete="off" name="fname" aria-describedby="emailHelp" placeholder="Username">
          
          
        </div>
        <div class="form-group text-white">
          <label for="exampleInputPassword1">Password*</label>
          <input type="password" class="form-control " autocomplete="off" name="paswd" placeholder="Password">
        
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label text-white" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" name="signin" class="btn btn-warning ">Submit</button>
        
        <div class="row mt-3 p-3">
            <span class="psw text-white text-left">Create <a href="register.php" class="text-eg">New Account</a></span>
            <span class="psw text-white ml-auto mr-3">Forgot <a href="#" class="text-eg">Password?</a></span>
        </div>
        
      </form>
      
    </div>
  </div>
  

  <script src="assets/js/validation.js"></script>
<script>
  function validateForm() {
    
  }
</script>
  
</body>
</html>