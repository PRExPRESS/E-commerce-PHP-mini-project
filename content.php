<?php 
include 'connection.php';
$row ='';
$list =" ";

//Get product from DB
$query = "SELECT * FROM product";
$get_list = mysqli_query($con,$query);
if ($get_list) {
  
  //echo '<script> alert(" Product add Successfully!")</script>';
}

  
  while ($product = mysqli_fetch_assoc($get_list)) {
    $price =(float)$product['price'];
    $id =$product['id'];
    //$list = $product['modal'];
    $list .=   "<div class=\"cd    col-6 col-sm-6 col-md-6 col-lg-3 bg-white border pb-2 \">";
    $list .=       "<img src=\"admin/images/{$product['img']}\" class=\"mx-auto d-block img-fluid\" alt=\"\">";
    $list .=        "<p class=\"text-center\">{$product['modal']}</p>";
    $list .=        "<p class=\"text-center\">\${$price}</p>";
    $list .=        "<div class=\"text-center\">";
    $list .=            "<a href=\"product.php?id=$id\" class=\"text-center\"><button type=\"button\" class=\"btn btn-warning ml-auto mx-auto\">Add to Cart</button></a>";
    $list .=        "</div>";
    $list .=    "</div>";
  }
  


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
    <!--Carousel-->
  <div class="row mt-2 ml-auto mr-auto ">
    <div class="col-12">
      <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/car-1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/car-2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/car-3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-3">
      <img  src="assets/img/intel.jpg" alt="">
    </div>-
  </div>
  <!--content-->
  
  <nav class="m-3 " aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item h3"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active h3 text-warning" aria-current="page">Laptops</li>
    </ol>
  </nav>
  <div class="container border-bottom">
    <!--1st row-->
    <div class="row  ">
      <?php echo $list;?>
      
    </div> 
    <!--1st row-End-->
    <!--2nd row--
    <div class="row ">
      <div class="cd    col-6 col-sm-6 col-md-6 col-lg-3 bg-white border pb-2 ">
        <img src="img/items/nitro 5.jpg" class="mx-auto d-block img-fluid" alt="">
        <p class="    text-center">Acer Nitro 5 Core I5 10th Gen,144hz, Gaming Laptop</p>
        <p class="text-center">RS.189,000.00</p>
        <div class="text-center">
          <a href="" class="text-center  "><button type="button" class="btn btn-warning ml-auto mx-auto">Add to Cart</button></a>
        </div> 
      </div>
      <div class="cd    col-6 col-sm-6 col-md-6 col-lg-3  bg-white border   ">
        <img src="img/items/nitro 5.jpg" class="mx-auto d-block img-fluid" alt="">
        <p class="    text-center">Acer Nitro 5 Core I5 10th Gen,144hz, Gaming Laptop</p>
        <p class="text-center">RS.189,000.00</p>
        <div class="text-center">
          <a href="" class="text-center  "><button type="button" class="btn btn-warning ml-auto mx-auto">Add to Cart</button></a>
        </div> 
      </div>
      <div class="cd    col-6 col-sm-6 col-md-6 col-lg-3  bg-white border   ">
        <img src="img/items/nitro 5.jpg" class="mx-auto d-block img-fluid" alt="">
        <p class="    text-center">Acer Nitro 5 Core I5 10th Gen,144hz, Gaming Laptop</p>
        <p class="text-center">RS.189,000.00</p>
        <div class="text-center">
          <a href="" class="text-center  "><button type="button" class="btn btn-warning ml-auto mx-auto">Add to Cart</button></a>
        </div> 
      </div>
      <div class="cd    col-6 col-sm-6 col-md-6 col-lg-3  bg-white border   ">
        <img src="img/items/nitro 5.jpg" class="mx-auto d-block img-fluid" alt="">
        <p class="    text-center">Acer Nitro 5 Core I5 10th Gen,144hz, Gaming Laptop</p>
        <p class="text-center">RS.189,000.00</p>
        <div class="text-center">
          <a href="" class="text-center  "><button type="button" class="btn btn-warning ml-auto mx-auto">Add to Cart</button></a>
        </div> 
      </div>
    </div> 
    <--2nd row-End-->
  </div> 
  <!--End-content-->
</body>
</html>