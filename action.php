<?php 
session_start();
    include 'connection.php';

    //----------------------------- SIGN UP------------------------
    $error_log =array();
    //if create  button clicked
    if(isset($_POST['signup'])){
        // chek input fields and sanitize
        if(!isset($_POST['r_username'])||strlen(trim($_POST['r_username']))<1){
            $error_log[] = 'username missing';
        }else {
            $uname = mysqli_real_escape_string($con, $_POST['r_username']);
        }
        if(!isset($_POST['r_email'])||strlen(trim($_POST['r_email']))<1){
            $error_log[] = 'r_email missing';
        }else {
            $email = mysqli_real_escape_string($con, $_POST['r_email']);
        }
        if(!isset($_POST['r_paswd'])||strlen(trim($_POST['r_paswd']))<1){
            $error_log[] = 'r_paswd missing';
        }else {
            $paswd = mysqli_real_escape_string($con, $_POST['r_paswd']);
        }
        $hashed_pswd =sha1($paswd);
        if(empty($error_log)){
            //check user name or email is already use.
            $query = "SELECT * FROM customers 
            WHERE username ='{$uname}'
            AND email = '{$email}' 
            LIMIT 1 ";
            $result_set = mysqli_query($con,$query);

            if(mysqli_num_rows($result_set)==1){
                header('Location:register.php?id=1');
            }else {
                //INSERT INTO QUERY 
                $query = "INSERT INTO customers
                (username,email,password) 
                VALUE ('{$uname}','{$email}','{$hashed_pswd}')";
                $result_set = mysqli_query($con,$query);
                if(isset($result_set)){
                    echo '<script> alert("register successfull!")</script>';
                    header('Location:index.php?id=1');

                }else {
                echo '<script> alert("database query error")</script>';
                }
            }
            
            
            
        }else {
            echo '<script> alert("Field must be filed!")</script>';
        }
        
    }
    //---------------------------SIGNIN--------------------------------------------------------------------------
    if(isset($_POST['signin'])){
        // chek input fields and sanitize
        if(!isset($_POST['fname'])||strlen(trim($_POST['fname']))<1){
            $error_log[] = 'username missing';
        }else {
            $uname_l = mysqli_real_escape_string($con, $_POST['fname']); 
        }
        if(!isset($_POST['paswd'])||strlen(trim($_POST['paswd']))<1){
            $error_log[] = 'paswd missing';
        }else {
            $passwd_l =mysqli_real_escape_string($con, $_POST['paswd']);
            $hashed_pswd = sha1($passwd_l);
        }
        //if not errors
        if(empty($error_log)){
            echo "username: ".$uname_l.'<br> password: '.$hashed_pswd;
            //select QUERY 
            $query = "SELECT * FROM customers 
                        WHERE username ='{$uname_l}'
                        AND password = '{$hashed_pswd}' 
                        LIMIT 1 ";
            $result_set = mysqli_query($con,$query);
                //Query successful
           
            if($result_set){
                if(mysqli_num_rows($result_set)==1){
                    $user = mysqli_fetch_assoc($result_set);
                    $_SESSION['user_name'] = $user['username'];
                    header('Location:index.php');
                }else {
                    //invalied user
                    $error_log[]='invalid username/password';
                    header('Location:login.php?id=1');
                }
            }else {
                $error_log[] = 'Database Query Faild';
            }
        }
    }














?>