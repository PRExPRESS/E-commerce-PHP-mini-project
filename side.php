<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<div class=" text-light ">
        <span>Hello,<?php echo $_SESSION['user_name'] ?></span><br>
        <span class="topic text-warning">Manage Account</span><br>
        <div class=" txt text-light pl-2 pb-3">
            <a href="myaccount.php" class=" text-light mb-3"><li class="mt-3">My Profile</li></a>
            <li class="mt-3"><a href="#"class=" text-light mb-2 disabled" >Address Book</a></li>    
            <li class="mt-3"><a href="PaymentOption.php"class=" text-light mb-2 " >My Payment</a></li>
        </div>
        <span class="topic text-warning">My Orders</span><br>
        <div class="text-light pl-2 ">
            <li class="mt-3"><a href="orderdetail.php" class=" text-light">Order Returns</a></li>
            <li class="mt-3"><a href="cancel.php"class=" text-light" >Order Cancellation</a></li>
            
        </div>
        
        
</div>
    
</body>
</html>
