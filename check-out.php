<?php 
session_start();
include 'connection.php';
if (isset($_GET['price']) && isset($_GET['id'])) {
    $price =$_GET['price'];
    $order_id = $_GET['id'];

    $query = "SELECT * FROM product WHERE id ={$order_id} LIMIT 1";
    $get_list = mysqli_query($con,$query);
    if ($get_list) {
    
        if(mysqli_num_rows($get_list)==1){
            $list = mysqli_fetch_assoc($get_list);
            $product =$list['modal'];
            
        }
    //echo '<script> alert(" Product add Successfully!")</script>';
    }
}





 
    // ADD ORDER
    if (isset($_POST['submit'])) {
        $address='';
        $product =$_POST['product'];
        $price =$_POST['price'];
        $full_name =$_POST['c_F_Name'];
        $address= $_POST['c_Address'];
        $address .= $_POST['c_city'];
        $address .= $_POST['C_zip'];
        $email = $_POST['c_Email'];
        //$date =now();
        //echo $full_name;
        $query ="INSERT INTO orders(";
        $query .="product_name, date, cust_name, email, address, price ";
        $query .=") VALUES (";
        $query .="'{$product}',now(),'{$full_name}','{$email}','{$address}','{$price}'";
        $query .=")";
        $result_set = mysqli_query($con,$query);

        if($result_set){
            echo '<script> alert(" Product add Successfully!")</script>';
          }else {
            
            echo '<script> alert("Database Query Error!")</script>';
          }
    }
    

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check out</title>
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
    <article class="container">
        <div class="card">
            <form action="check-out.php" method="post">
                <div class="row p-2">
                    <!--------------BILLING DETAILS------------->
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                        <span class="h3 ">Billing Address</span><br/>
                        <label class="mt-3" for=""><i class="fa fa-user"></i> Full Name</label><br/>
                        <input type="text" name="c_F_Name" class=" col form-control"  value=" <?php echo 'Pasindu Rashmika';?>">
                        <label for=""><i class="fa fa-envelope"></i> Email</label><br/>
                        <input type="email" name="c_Email" class=" col form-control"  value=" <?php echo 'amprashmika1231@gmail.com';?>">
                        <label for=""><i class="far fa-address-card"></i> Address</label><br/>
                        <input type="Text" name="c_Address" class=" col form-control"  value=" <?php echo 'Horathapola,Welipannagahamulla';?>">
                        <label for=""><i class="fa fa-institution"></i> City</label><br/>
                        <input type="text" name="c_city" class=" col form-control"  value=" <?php echo 'Kuliyapitiya';?>">
                        <label for="">Zip</label><br/>
                        <input type="text"name="C_zip" class=" col form-control"  value=" <?php echo '60240';?>"> 
                    </div>
                    <!----------------PAYMENT----------------->
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                        <span class="h3 ">Payment</span><br/>
                        <div class="mt-3">
                            <span class="h4"><?php
                            if(isset($_GET['id'])){echo $product;} ?></span>
                            <span class="h4 text-warning">
                                $<?php 
                                    if(isset($_GET['price'])){
                                        
                                        echo $price;
                                    }
                                ?>
                                <input type="hidden" name="price" value="<?php echo $price;?>">
                                <input type="hidden" name="product" value="<?php echo $product;?>">
                            </span>
                        </div>
                        <label class="mt-1" for=""> Accept Payment Methods</label><br/>
                        <div class="icon">
                            <i class="fab fa-cc-visa text-blue"></i>
                            <i class="fab fa-cc-amex text-primary"></i>
                            <i class="fab fa-cc-mastercard text-danger "></i>
                            <i class="fab fa-cc-paypal text-primary"></i>
                            <i class="h4 ml-5"></i>
                        </div>
                        <label for="">Name on Card</label><br/>
                        <input type="text"name="Card_name" class=" col form-control">
                        <label for="">Card Number</label><br/>
                        <input type="text"name="Card_name" placehoder="1111-2222-3333-4444" class=" col form-control">
                        
                        <div class="row">
                            <label class="col-2" for=""> Month</label>
                            <label class="col-2" for="">year</label>
                            <label for="">CVV</label>
                        </div>
                        <div class="row mb-4">
                            <input type="text"name="Card_mnth" class=" col-1 ml-3 form-control">  
                            <input type="text"name="Card_year" class=" col-1 ml-4 form-control">
                            <input type="text"name="Card_cvv" class=" col-2 ml-4 form-control">
                        </div>
                        <button type="Submit" name="submit" class=" col-6 btn btn-primary ">Confirm</button>
                        <button type="reset" class=" col-5 btn btn-danger float-right">Reset</button>
                    </div>
                </div>
            </form>
        </div>

    </article>
    <footer>
        <?php include 'footer.php';?>
    </footer>
</body>
</html>