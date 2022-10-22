<?php include 'head.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body class="bg-dark"onload="submitDisable()">
<div class="container text-light ">
    <form action="action.php" method="post" onsubmit="return formVal()" class=" modal-content col-12 col-sm-12- col-md-4 mx-auto mt-5 border rounded p-2">
      <div class="h3 mt-3 text-warning text-center">XPRESSPC</div>
        <legend class="text-center">Create Account</legend>
        <div class="form-group">
          <label for="exampleInputEmail1">Username*</label>
          <input type="text" name="r_username" class="form-control col" id="uname"  placeholder="Username">
          <p class="invalid" id="fv"></p>

          <label for="exampleInputEmail1">Email*</label>
          <input type="email" name="r_email" class="form-control col" id="email"  placeholder="email">
          <p class="invalid" id="ev"></p>

          <label for="exampleInputPassword1">Password*</label>
          <input type="password" class="form-control col" id="pass" placeholder="Password">
          <p class="invalid" id="pv"></p>
          <div id="hint">
            <span id="capital" class="invalid">A Uppercase</span><br>
            <span id="letter" class="invalid">A lovercase</span><br/>
            <span id="number" class="invalid">A number</span><br/>
            <span id="length" class="invalid"> 8 characters</span>
                
          </div>

          <label for="exampleInputPassword1">Comfirm Password*</label>
          <input type="password" class="form-control col" name="r_paswd" id="c_pass" placeholder="Re-Enter Password">
          <p class="invalid" id="pcv"></p>

          
          <span>
            <input type="checkbox" name="aggry" id="aggry" onchange="btnDis()">
              I accept the <a href="http://" target="_blank" rel="noopener noreferrer">Term of Use </a>&
              <a href="">Privacy Policy</a>
          </span>
          <button type="submit" name="signup" id="submit" class="btn col font  btn-warning mt-2">Sign Up</button>
        </div>
        
        
        
      </form>
      <script src="assets/js/validation.js"></script>
  </div>
</body>
</html>