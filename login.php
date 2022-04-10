<?php
require 'header.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Login/assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="Login/assets/css/styles.css">
</head>

<body>
    <!--navbar-->
    
    <div class="login-dark" style="height: 100vh;">
        <div class="background" ></div>
        <div class="background_2" style="background-color: #000000;width: 100%;height: 100%;opacity: 0.51;"></div>
        <form action="includes\login.inc.php" method="post" style="height: 450px;">
            <h2 class="sr-only">Login Form</h2>
            <?php
            if(isset($_GET['error']))
            {
                echo '<div id="login_error">';
                if($_GET['error'] == "sqlerror")
                {
                    echo '<p>such username or email does not exist!</p>';
                }
                if($_GET['error'] == "wrongpassword")
                {
                    echo '<p>Incorrect Username or Password!</p>';
                }
                echo '</div>';
            }
            if(isset($_GET['login']))
            {
                if($_GET['login'] == "success")
                {
                    echo '<p class="loginsuccess">NOW YOU ARE LOGGED IN !</p><div style="margin: auto; width: fit-content;"><img style = " height: 100px;"src="img\happy-clipart-10.png"></div>
                    <div class="form-group"><a href="dashboard.php" class="btn btn-primary btn-block">View Dashboard</a></div>';
                }
            }
            else {

            echo  '<div class="form-group"><input class="form-control" type="text" name="mailuid" placeholder="Username" style="margin-top: 15px;" required ></div>
            <div class="form-group"><input class="form-control" type="password" name="pwd" placeholder="Password" required ></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="login-submit">Log In</button></div>
            <div style="padding-top: 25px;">
                <p>-----------------OR-----------------</p>
            </div>
            <div></div><a href="signup.php"><button class="btn btn-primary" type="button" style="width: 50%;margin-left: 25%;">Sign up</button></a>';
        
            }
            ?></form>
        <div class="carousel slide" data-ride="carousel" id="carousel-1" style="height: 450px;width: 600px;" data-pause="false" data-interval="4000">
            <div class="carousel-inner" role="listbox" style="height: 100%;width: 100%;">
                <div class="carousel-item"><img class="w-100 d-block" src="Login/assets/img/amirali-mirhashemian-ZSukCSw5VV4-unsplash.jpg" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="Login/assets/img/food-photographer-david-fedulov-vYyfb-Wl1kE-unsplash.jpg" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="Login/assets/img/food-photographer-david-fedulov-W1Yi4z375L0-unsplash.jpg" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="Login/assets/img/ice%20cream%20with%20sliced%20fruits%20in%20jar.jpg" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="Login/assets/img/moist%20chocolate%20cake%20on%20round%20white%20plate.jpg" alt="Slide Image"></div>
                <div class="carousel-item active"><img class="w-100 d-block" src="Login/assets/img/truong-dat-cVZu7frdo5Y-unsplash.jpg" alt="Slide Image"></div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                    data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
                <li data-target="#carousel-1" data-slide-to="3"></li>
                <li data-target="#carousel-1" data-slide-to="4"></li>
                <li data-target="#carousel-1" data-slide-to="5" class="active"></li>
            </ol>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>