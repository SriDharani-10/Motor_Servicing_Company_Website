<?php

    include "db_conn.php";

    session_start();



    if(isset($_POST['submit'])){



    $_SESSION['uname']=$_POST['username'];
    $_SESSION['ps']=$_POST['password'];

    $data="select * from signin";
    $execute=mysqli_query($connect,$data);

    if(mysqli_num_rows($execute)>0){
        $x=mysqli_fetch_assoc($execute);

        $username=$x['username'];
        $password=$x['password'];
    }


        if(($_SESSION['uname']==$username) && ($_SESSION['ps']==$password)){
            $_SESSION['admin_logged_in']=true;
            header("Location:home.php");
            exit();
        }
        else{
            $error="Invalid username or password";
        }
    }

?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SignIn Page</title>

    <!-- <link rel="stylesheet" type="text/css" href="files-admin/css/style.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="files-admin/css/main.css"> -->
    <link rel="stylesheet" type="text/css" href="files-admin/css/new.css">

    <!-- <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="main.css" /> -->
    <!-- <script src="login_js.js" defer></script>
    <script src="login_js_2.js" defer></script> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</head>

<body>
    <div id="whole-login-page" class="d-flex flex-row justify-content-center">
        <div id="login-container" class="shadow-lg">
            <form method="POST">
                <div class="d-flex flex-row justify-content-center mb-3">
                    <img src="\adminpage\logonew.png" class="signin-logo" />
                    <h2 class="title-style">Speed Motors</h2>
                </div>
                <h1 id="login-txt">Sign In</h1>

                <!-- <div id="text-container">
                    <p class="text-style text-left ">Enter Username</p>
                    <input type="text" placeholder="Username" id="username" />
                </div> -->

                <div id="text-container">
                    <p class="text-style text-left ">Enter Username</p>
                    <input type="text" placeholder="Username" name="username" id="username" />
                </div>

                <div id="text-container">
                    <p class="text-style text-left">Enter Password</p>
                    <input type="password" placeholder="Password" name="password" id="password" />
                </div>

                <div class="d-flex flex-row justify-content-between">
                    <!-- <input type="checkbox" name="cb"/>
                    <p for="cb">Remember me</p> -->
<!-- 

                    <label for="rememberMe">
                      <input type="checkbox" id="rememberMe">
                      Remember Me
                    </label> -->


                    <a style="text-decoration:none;color: black;" href="forgotpsw.php"><p>Forgot Password?</p></a>
                </div>

                <!-- <div class="login-btn">
                    <button id="loginbutton" class="login-style">Sign In</button>
                </div> -->
                <div class="login-btn">
                    <input type="submit" id="loginbutton" class="btn btn-secondary" value="SignIn" name="submit" />
                </div>


            </form>
        </div>
    </div>

</body>

</html>