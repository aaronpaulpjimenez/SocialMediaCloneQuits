<?php
include("includes/connection.php");

if(isset($_POST['sign_up'])){
    
    $first_name = htmlentities(mysqli_real_escape_string($con, $_POST['first_name']));
    
    $last_name = htmlentities(mysqli_real_escape_string($con, $_POST['last_name']));
    
    $pass = htmlentities(mysqli_real_escape_string($con, $_POST['u_pass']));
    
    $email = htmlentities(mysqli_real_escape_string($con, $_POST['u_email']));
    
    $gender = htmlentities(mysqli_real_escape_string($con, $_POST['u_gender']));
    
    $birthday = htmlentities(mysqli_real_escape_string($con, $_POST['u_birthday']));
    
    $status = "verified"; 
    
    $posts = "no";
    
    $newgid = sprintf('%05d' ,rand(0,999999));
    
    
    $username = strtolower($first_name . "_" . $last_name . "_" . $newgid);
    $check_username_query = "select user_name from users where user_email='$email'";
    $run_username = mysqli_query($con,$check_username_query); 
    
    if(strlen($pass) <5){
        
        echo"<script>alert('Password should be more than 5 characters!')</script>";
        exit();
    }
    
    $check_email = "SELECT * FROM users where user_email='$email'";
    $run_email = mysqli_query($con,$check_email);
    
    $check = mysqli_num_rows($run_email); 
    
    if($check == 1){
        echo "<script>alert('Email already exists, Please try using another email')</script>";
        echo "<script>window.open('signup.php', '_self')</script>"; 
        exit(); 
    }
    
    $rand = rand(1,3);
    
    if($rand == 1)
        $profile_pic = "profile_red.png";
    else if($rand == 2)
        $profile_pic = "profile_blue.png";
    else if($rand == 3)
        $profile_pic = "profile_green.png";
    
    $insert = "insert into users(f_name,l_name,user_name,describe_user,user_pass,user_email,user_gender,user_birthday,user_image,user_cover,user_reg_date,status,posts,recover_account) values('$first_name','$lastname','$username','Default status','$pass','$email','$gender','$birthday','$profile_pic','default-cover-4.jpg', NOW(),'$status','$posts','callquits')";
    $query = mysqli_query($con, $insert);
    
    if($query){
         echo "<script>alert('Welcome $first_name.')</script>";
        echo "<script>window.open('signin.php', '_self')</script>";
    }
    else{
         echo "<script>alert('Registration failed, please try again!')</script>";
        echo "<script>window.open('signup.php', '_self')</script>";
    }
}
?>