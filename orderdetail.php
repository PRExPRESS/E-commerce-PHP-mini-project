<?php
    
 
 $order_id ="#123321";
 $order_date ="01-02-2021";
 $order_topic ="Shahunas Men's Sunglasses (9961) - Gold&Brown";
 $qty = 1;
 $status ="Canceled";

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title></title>
 </head>
 <body>
     <header>
         <?php include 'header.php';
         include 'head.php';
         if(!isset($_SESSION["user_name"])){
              header('Location:login.php');
          }
         ?>
     </header>
     <section class="float-left p-2">
        <?php include 'side.php'; ?>
    </section>
    <article class="container">
        <div class="h3 text-warning">Edit Profile</div>
        <div class="card mt-4">
            <span>Order <?php echo $order_id;?></span>
            <span>Date <?php echo $order_date;?> </span>
            <div class="border-bottom border-secondary"></div>
            <div class="row p-2">
                <div class="col-2">
                    <img src="#" alt="item">
                </div>
                <div class="col-4"><?php echo $order_topic;?></div>
                <div class="col-1">Qty: <?php echo $qty;?></div>
                <div class="col-2 "><?php echo $status;?></div>
                
            </div>
        </div>
    </article>
 </body>
 </html>