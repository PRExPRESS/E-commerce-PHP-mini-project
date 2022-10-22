<?php 
if (isset($_SESSION['user_name'])) {
  session_start();
}

    include 'head.php';
?>
<?php 
include 'connection.php';
$row ='';
$list =" ";

$id = $_GET['id'];

//Get product from DB
$query = "SELECT * FROM product WHERE id ={$id} LIMIT 1";
$get_list = mysqli_query($con,$query);
if ($get_list) {
  
    if(mysqli_num_rows($get_list)==1){
        $list = mysqli_fetch_assoc($get_list);
        $image =$list['img'];
        $name =$list['modal'];
        $price =(float)$list['price'];
        $disc =$list['disc'];
    }
  //echo '<script> alert(" Product add Successfully!")</script>';
}

  
  
  


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XpressLap</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <?php include 'header.php'?>
    </header>
    <article>
        <!--content-->
  <div class="container mt-2 mb-3 font p-0">
    <a href="index.html">Home 
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M6.22 3.22a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06L9.94 8 6.22 4.28a.75.75 0 010-1.06z">
    </path></svg></a>
    <a href="lap.html">All Laptop
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M6.22 3.22a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06L9.94 8 6.22 4.28a.75.75 0 010-1.06z"></path></svg>
    </a>
    <a href="acer.html">Acer<!--lap name--></a>
  </div>
  <div class="container bg-secondary mt-2">
    <div class="row">
      <!--Product images-->
      <div class="col-4 p-2 ">
        <img src="admin/images/<?php echo $image;?>"  class="img-dis border d-block"alt="image">
      </div>
      <div class="col-4 mt-2  ">
          <h4 class="text-white"><?php echo $name;?></h4>
            <!--Star Ratings-->
          <div>
            <span class="fa fa-star text-warning "></span>
            <span class="fa fa-star text-warning"></span>
            <span class="fa fa-star text-warning"></span>
            <span class="fa fa-star text-warning"></span>
            <span class="fa fa-star"></span>
          </div>
          <div class="qt mt-3">
            <div>
              <span class="text-white">Price:</span>
              <span class="text-eg  price ml-3">$<?php echo $price;?></span><br/>
            </div>
            <div class="mt-3">
              <label for="qty" class="text-white">Quantity</label>
              <button class="ml-3" id="min" onchange="disable()" onclick="dec()"><i class="fas fa-minus"></i></button>
              <input class="num text-dark" type="text" name="" id="qt" value="0">
              <button onclick="inc()"><i class="fas fa-plus"></i></button><br/>
            </div>
            <div class=" mt-2">
              <a href="check-out.php?price=<?php echo $price?>&id=<?php echo $id?>"><button type="button" class="btn btn-primary">Buy Now</button></a>
              <button type="button" class="btn btn-warning ">Add to Cart</button>
            </div>   
          </div>
      </div>
      <div class="col-4 mt-5 border-left">
        <table class="">
          <tr>
            <th class="text-right">Shipping:</th>
            <td class="p-2">Globle shipping</td>
          </tr>
          <tr>
            <th class="text-right">Delivery:</th>
            <td class="p-2">3 to 7 Days</td>
          </tr>
          <tr>
            <th class="text-right">Payments:</th>
            <td class="p-2"><img class="col-10" src="img/payhere_square_banner.png" alt=""><br>
              <small>Any international shipping and import charges are paid in part to Pitney Bowes Inc.</small>
            </td>
            
          </tr>

        </table>
      </div>
    </div>
  </div>
  <!--Discription-->
  <div class="container bg-secondary mt-2">
    <p class="lead text-white">Product Details & Specs</p>
    <div class="col-12">
      <ul class="text-white">
        <?php echo $disc; ?>
      </ul>
    </div>
  </div>
  <!--Inqure-->
  <div class="container bg-secondary">
    <P class="lead text-white">Inquire about product</P>
    <form action="" method="post">
      <div class="row p-2">
        <div class="col-12 border">
          <form action="" method="post">
              <textarea class="col-12 mt-3" name="inq" id="" cols="100" rows=""></textarea><br/>
              <div class=" row col-12 pr-0  mb-1">
                <small class="col-9">Your question should not contain contact information such as email, phone or external web links. 
                  Visit <a class="text-white" href="myorders">"My Orders"</a>  if you have questions about your previous order.</small>
                <input class="col-3  mx-auto cobtn btn-warning" type="submit" value="Ask Quesstion">
              </div>
          </form>
          
        </div>
      </div>
    </form>
  </div>
    
  
  
  <!--End-content-->
    </article>
    <footer>
        <?php include 'footer.php' ?>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>