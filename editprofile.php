<?php 
session_start();
if (!isset($_SESSION['user_name'])) {
    header('Location:login.php');
}
include 'head.php';
include 'connection.php';



//----------------------------------ADD customers personal details------------------------


$error_log =array();
//if create  button clicked
if(isset($_POST['add'])){
    // chek input fields and sanitize
    if(!isset($_POST['fullName'])||strlen(trim($_POST['fullName']))<1){
        $error_log[] = 'fullName missing';
    }else {
        $fullName = mysqli_real_escape_string($con, $_POST['fullName']);
    }
    if(!isset($_POST['email'])||strlen(trim($_POST['email']))<1){
        $error_log[] = 'email missing';
    }else {
       $email = mysqli_real_escape_string($con, $_POST['email']);
    }
    if(!isset($_POST['mobile'])||strlen(trim($_POST['mobile']))<1){
        $error_log[] = 'mobile missing';
    }else {
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    }
    if(!isset($_POST['bday'])||strlen(trim($_POST['bday']))<1){
        $error_log[] = 'bday missing';
    }else {
        $bday = mysqli_real_escape_string($con, $_POST['bday']);
    }
    if(!isset($_POST['gender'])||strlen(trim($_POST['gender']))<1){
        $error_log[] = 'mobile missing';
    }else {
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
    }
    if(!isset($_POST['Address'])||strlen(trim($_POST['Address']))<1){
        $error_log[] = 'Address missing';
    }else {
        $Address = mysqli_real_escape_string($con, $_POST['Address']);
    }
    if(!isset($_POST['zip'])||strlen(trim($_POST['zip']))<1){
        $error_log[] = 'zip missing';
    }else {
        $zip = mysqli_real_escape_string($con, $_POST['zip']);
    }
    $username = $_SESSION['user_name'];
    $Address .=",".$zip;
    //echo $Address;
    if(empty($error_log)){
        

        
            //INSERT INTO QUERY 
            $query = "INSERT INTO cust_details
            (full_name,email,contact,birthday,gender,address) 
            VALUE ('{$fullName}','{$email}','{$mobile}','{$bday}','{$gender}','{$Address}')";
            $result_set = mysqli_query($con,$query);
            if(isset($result_set)){
                echo '<script> alert("register successfull!")</script>';
                //header('Location:index.php?id=1');

            }else {
            echo '<script> alert("database query error")</script>';
            }
            
        
        
        
        
    }else {
        echo '<script> alert("Field must be filed!")</script>';
    }
    
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
<body >

    <header>
        <?php include 'header.php'; ?>   
    </header>
    <section class="float-left p-2">
        <?php include 'side.php'; ?>
    </section>
    <article class="container  ">
        <div class="h3 text-warning">Edit Profile</div>
        <div class="card bg-light p-4">
        <form action="editprofile.php" method="post" class="" >
            <div class="h3 ">Personal details</div>
                <div class="row ">
                    <div class="col-4">
                        <label for="" >Full name</label><br>
                        <input class="form-control " type="text" name="fullName" id="">
                    </div>
                    <div class="col-4">
                        <label for="" >Email Address</label><br>
                        <input class="form-control" type="text" name="email" id="">
                    </div>
                    <div class="col-3">
                        <label for="" >Mobile</label><br>
                        <input class="form-control" type="tel" name="mobile" id="">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-4">
                        <label for="" >Birthday</label><br>
                        <input class="form-control" type="date" name="bday" id="">
                    </div>
                    <div class="col-3">
                        <label for="" >Gender</label><br>
                        <label for="">Male</label>
                        <input type="radio" name="gender" value="male" id="">
                        <label for="">Female</label>
                        <input type="radio" name="gender" value="female" id="">
                    </div>
                </div>
                
                <!-- Address change--------------------------------------------------------- -->
                <div class="h3 mt-4">Edit address</div>
                <div class="row ">
                    <div class="col-4">
                        <label for="" >Province</label><br>
                        <input class="form-control " type="text" name="province" id="">
                    </div>
                    <div class="col-4">
                        <label for="" >District</label><br>
                        <input class="form-control" type="text" name="district" id="">
                    </div>
                    <div class="col-3">
                        <label for="" >City</label><br>
                        <input class="form-control" type="text" name="city" id="">
                    </div>
                </div>
                <div class="row ">
                    <div class="col-4">
                        <label for="" >Address</label><br>
                        <input class="form-control " type="text" name="Address" id="">
                    </div>
                    <div class="col-4">
                        <label for="" >ZIP</label><br>
                        <input class="form-control " type="text" name="zip" id="">
                    </div>
                    <div class="col-4">
                    <input class=" mt-5 btn btn-primary" type="submit" name="add" value="Save changes">
                    </div>
                </div>

        </form>
        </div>
           
        
    </article>
    <footer>
    <?php include 'footer.php' ?>
    </footer>
</body>
</html>