<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
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
                <center><h1 style="color: white;">Quits</h1></center>
            </div>
        </div>
     </div>
        <div class="row">
            <div class="col-sm-12">
            <div class="main-content">
                <div class="header">
                <h3 style="text-align: center;"><strong>Join Quits</strong></h3><hr>
                </div>
                <div class="l-part">
                <form action="" method="post">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <input type="text" class="forum-control" placeholder="First Name" name="first_name" require="required">
                    </div><br>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <input type="text" class="forum-control" placeholder="Last Name" name="last_name" require="required">
                    </div><br>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="forum-control" placeholder="Password" name="u_pass" require="required">
                        </div><br>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="email" class="forum-control" placeholder="Email" name="u_email" require="required">
                    </div><br>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
                        <select class="form-control input-md" name="u_gender" required="required">
                        <option disabled>Select your Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>
                       </div><br>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input type="date" class="forum-control input-md" placeholder="Date of Birth" name="u_birthday" require="required">
                    </div><br>
                    <a style="text-decoration: none;float: right;color: #d46660" data-toggle="tooltip" title="Signin" href="signin.php">Already have an account?</a><br><br>
                    <center><button id="signup" class="btn btn-danger btn-lg" name="sign_up">Signup</button></center>
                    <?php
                    include("insert_user.php");
                    ?>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>