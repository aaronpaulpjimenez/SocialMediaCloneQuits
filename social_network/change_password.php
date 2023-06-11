<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>

<html>
<head>
	
	<title>Forgot your password?</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
    <style>
        body{
            overflow-x: hidden;
            
        }
        .main-content{
            width: 50%;
            height: 40%;
            margin: 10px auto;
            background-color: #fff;
            border: 2px solid #e6e6e6;
            padding: 40px 50px;
        }
        .header{
            border: 0px solid #000;
            margin-bottom: 5px;
        }
        .well{
            background-color: #d46660;
        }
        #signup{
            width: 60%;
            border-radius: 30px;
        }
    </style>
<body>
<div class="row">
	<div class="col-sm-12">
    <div class="well">
        <center>
        <h1 style="color:white;"><strong>Quits</strong></h1>
        </center>
        </div>
    </div>
</div>
    <div class="row">
    <div class="col-sm-12">
        <div class="main-content">
        <div class="header">
            <h3 style="text-align: center;"><strong>Change Password</strong></h3><hr>
            </div>
            <div class="l_pass">
            <form action="" method="post">
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="pass" placeholder="Enter your New password" required>
                </div><br>
                 <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" placeholder="Re-enter new password" name="pass1" required>
                </div><br>
               
                <center><button id="signup" class="btn btn-danger brn-lg" name="change">Change Passwowd</button></center>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
<?php 
if(isset($_POST['change'])){
    $pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
    $pass1 = htmlentities(mysqli_real_escape_string($con, $_POST['pass1']));
    
    if($pass == $pass1){
        if(strlen($pass) >= 5 && strlen($pass)<= 60){
            $update = "update users set user_pass='$pass' where user_id='$user_id'";
            
            $run = mysqli_query($con, $update);
            echo"<script>alert(Your Password has been changed)</script>";
            echo"<script>window.open('signin.php', '_self')</script>";
        }
        else{
            echo"<script>alert(Your Password should be more than 5 characters)</script>";
        }
    }
        else{
            echo"<script>alert(Your Password did not match)</script>";
            echo"<script>window.open('change_password.php', '_self')</script>";
        }
    }




?>
