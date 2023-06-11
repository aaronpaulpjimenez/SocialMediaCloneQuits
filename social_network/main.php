<!DOCTYPE html>
<html>
<head>
    <title>Quits login and signup</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <style>
        body{
            overflow-x: hidden;
        }
        #centered1{
            position: absolute;
            font-size: 10vw;
            top: 30%;
            left: 30%;
            transform: translate(-50%, -50%);
        }
         #centered2{
            position: absolute;
            font-size: 10vw;
            top: 50%;
            left: 40%;
            transform: translate(-50%, -50%);
        }
         #centered3{
            position: absolute;
            font-size: 10vw;
            top: 70%;
            left: 30%;
            transform: translate(-50%, -50%);
        }
        #signup{
            width: 60%;
            border-radius: 30px;
        }
        #login{
            width: 60%;
            background-color: #fff;
            border: 1px solid #d46660;
            color: #d46660;
            border-radius: 30px;
            
        }
        #login:hover{
            width: 60%;
            background-color: #fff;
            border: 2px solid #d46660;
            color: #d46660;
            border-radius: 30px;
        }
        .well{
            background-color: #d46660; 
        }
    </style>
<body>
    <div class="row"> 
        <div class="col-sm-12">
            <div class="well">
                <center><h1 style="color: white;">Quits</h1></center>
            </div>
        </div>
     </div>
    <div clas="row">
        <div class="col-sm-6" style="left:0.5%">
            <img src= "images/template.png" class="img-rounded" title="Quits" width="auto" height="auto">
            
        </div>
        <div class="col-sm-6" style="left:8%:">
            <img src= "images/quitslogo.png" class="img-rounded" title="Quits" width="80px" height="80px">
            <h2><strong>Its time to call <br> Quits</strong></h2><br><br>
            <h4><strong>Join today</strong></h4>
            <form method="post" action="">
            <button id="signup" class="btn btn-danger btn-lg" name="signup">Sign up</button><br><br>
                <?php 
                if (isset($_POST['signup'])){
                    echo "<script>window.open('signup.php','_self')</script>";
                }
                ?>
                <button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
                <?php 
                if (isset($_POST['login'])){
                    echo "<script>window.open('signin.php','_self')</script>";
                }
                ?>
            </form>
        </div>
    </div>
  
    </body>


</html>