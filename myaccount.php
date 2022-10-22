<?php
session_start(); 
    
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
    <title></title>
    
</head>
<body >

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
    <article class="container co">
        <!--Manage account-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item h3 text-warning"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active h3 text-warning" aria-current="page">Manage Account</li>
            </ol>
        </nav>
            
            <div class="card1 bg-light  row">
                <div class="col-5 float-left ">
                    <span class="h3">Personal Profile</span>|
                   <a href="editprofile.php"><button type="button" class="btn btn-primary">Edit</button></a> 
                    <p class="pt-3">
                        <?php echo $_SESSION['user_name']." ".$lName."<br/>".$email;?>
                    </p>
                </div>
                <div class="col-5">
                    <span class="h3">Address Book</span>| <a href="editprofile.php"><button type="button" class="btn btn-primary">Edit</button></a>
                    <p class="pt-3">
                        <?php echo $Fname." ".$lName."<br/>";?>
                        Horathapola, Welipannagahamulla,<br>
                        Kuliyapitiya <br>
                        Kurunagala <br>
                        North west <br>
                        Sri Lanka <br>
                        60200
                    </p>
                </div>
            </div>
        
        <!--Edit Profile--> 

        
          
    </article>
   
    <footer>
        <?php include 'footer.php';?>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>