<?php 
    
    $con = mysqli_connect("localhost","root","","xpresspc");

    if(mysqli_connect_errno()){
        die("Database Connection Faild ".mysqli_connect_error());
    }

?>