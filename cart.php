<?php 
session_start();
if(!isset($_SESSION["user_name"])){
    header('Location:login.php');
}

    
$order_id ="#123321";
$order_date ="01-02-2021";
$order_topic ="Shahunas Men's Sunglasses (9961) - Gold&Brown";
$qty = 1;
$price =100.00;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <header>
        <?php include 'header.php';
        include 'head.php';?>
        
    </header>
    <article >
        <!-----------------TITLE------------>
        <nav class="container" aria-label="breadcrumb">

            <ol class="breadcrumb">
                <li class="breadcrumb-item h3 text-warning"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active h3 text-warning" aria-current="page">Cart</li>
            </ol>
        </nav>
        <div class="container">
            <!------------------cart items--------------->
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 card p-3 mr-3 box fl "id="m" >
                <div class="h3 text-warning border-bottom">Cart Items</div>
                <span>Order <?php echo $order_id;?></span>
                <span>Date <?php echo $order_date;?> </span>
                <div class="border-bottom border-secondary"></div>
                 <div class="row p-3">
                    <input class="col-1 my-auto" type="checkbox" aria-label="Checkbox for following text input">
                    <div class="col-2">
                        <img src="#" alt="item">
                    </div>
                    <div class="col-4"><?php echo $order_topic;?></div>
                    <div class="col-2">Qty: <?php echo $qty;?></div>
                    <div class="col-2 "><?php echo "$".$price;?></div> 
                    <div class="1"><a href="action.php?del=1"><i class="far fa-trash-alt"></i></a></div> 
                 </div>
            </div>
        
            <!-------------ORDER SUMMERY-------------->
            <div class="col-lg-4 col-xl-4 p-2   card"id="ml">
                <span class="h3 text-warning border-bottom">Order Summery</span>
                <div class="row">
                    <div class="col">Subtotal (Item 0) </div>
                    <div class="col text-right">$0</div>
                </div>
                <div class="row mt-3">
                    <input type="email" class="ml-3 col-8 form-control" id="exampleInputEmail1"  placeholder="Enter Voucher Code">
                    <button type="button" class="ml-3 btn btn-primary float-right">Apply</button>
                </div>
                <div class="row mt-3">
                    <div class="col">Total  </div>
                    <div class="col text-right">$0</div>
                </div>
                <div>
                    <a href="check-out.php"><button type="button" class=" col btn btn-primary float-right">Checkout</button></a> 
                </div>
        

        </div>
        
    </article>
    <footer>
    <?php include 'footer.php';?>
    </footer>
</body>
</html>