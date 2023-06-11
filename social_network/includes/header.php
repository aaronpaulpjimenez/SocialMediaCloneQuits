<?php

include("includes/connection.php");
include("functions/functions.php");
?>

<nav class="navbar navbar-default" style="background-color:#d46660;">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class= "navbar-toggle collapesed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <span class="sr-only">Toggle navigation</span>
        <a style='color:white;' href="home.php" class="navbar-brand">Quits</a>
    </div>
    <div class="collapse navbar-collapse" id="#bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        <?php
            $user = $_SESSION['user_email'];
            $get_user = "SELECT * FROM users where user_email='$user'"; 
            $run_user = mysqli_query($con, $get_user);
            $row = mysqli_fetch_array($run_user);
            
            $user_id = $row['user_id'];
            $user_name = $row['user_name']; 
            $first_name = $row['f_name'];
            $last_name = $row['l_name'];
            $describe_user = $row['describe_user'];
            $user_pass = $row['user_pass'];
            $user_email = $row['user_email'];
            $user_gender = $row['user_gender'];
            $user_birthday = $row['user_birthday'];
            $user_cover = $row['user_cover'];
            $user_image = $row['user_image'];
            $recover_account = $row['recover_account'];
            $register_date = $row['user_reg_date'];
            
            $user_posts = "SELECT * FROM posts where user_id='$user_id'";
            $run_posts = mysqli_query($con,$user_posts);
            $posts = mysqli_num_rows($run_posts); 
            ?>
            
            <li><a style='color:white;' href='profile.php?<?php echo "u_id=$user_id" ?>' ><?php echo"$first_name"; ?></a></li> 
            <li><a style='color:white;' href='home.php'>Home</a></li>
            <li><a style='color:white;' href='members.php'>Find People</a></li>
            <li><a style='color:white;' href='messages.php?u_id=''>Messages</a></li>
            <?php 
            echo"
            
            <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
            <span><i style='color:white;' class='glyphicon glyphicon-chevron-down'></i></span></a> 
            <ul class='dropdown-menu'>
            <li>
            <a href='my_post.php?u_id=$user_id'>My posts <span class='badge badge-secondary'>$posts</span></a>
            </li>
            <li>
            <a href='edit_profile.php?u_id=$user_id'>Edit Account</a>
            </li>
            <li>
            <li role='separator' class='divider'>
            </li>
            <li>
            <a href='logout.php'>Logout</a>
            </li>
            </ul>
            </li>
            
            ";
            ?>
        </ul>
        <ul class="nav navbar-nav navbar-right"> 
        <li class="dropdown">
            <form class="navbar-form navbar-left" method="get" action="results.php">
            <div class="form-group">
                <input type="text" name="user_query" placeholder="Search"> 
                </div>
                <button type="submit" class="btn btn-danger" name="search">Search</button>
            </form>
            </li>
        </ul>
    </div>
    </div>
</nav>