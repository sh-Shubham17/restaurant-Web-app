<?php
require 'header.php';
require 'loader.html';
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

    <title>Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Signup/assets/css/Form-Select---Full-Date---Month-Day-Year.css">
    <link rel="stylesheet" href="Signup/assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="Signup/assets/css/styles.css">

</head>

<body>

    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder" style="background-image: url(&quot;Signup/assets/img/book_left.jpg&quot;);"></div>
                <form method="post" action = "includes/sign_up.inc.php">
                    <h2 class="text-center"><strong>Sign up</strong></h2>
                
                    <?php

                    if(isset($_GET['error']))
                    {
                        echo '<div id="signup_error">';
                        if($_GET['error'] == "invalidmailuid")
                        {
                            echo '<p>Invalid username and email!</p>';
                        }
                        else if($_GET['error'] == "invaliduid")
                        {
                            echo '<p>Invalid username!</p>';
                        }
                        else if($_GET['error'] == "invalidmail")
                        {
                            echo '<p>Invalid email!</p>';
                        }
                        else if($_GET['error'] == "passwordcheck")
                        {
                            echo '<p>Your password do not match!</p>';
                        }
                        else if($_GET['error'] == "usertaken")
                        {
                            echo '<p>This username already exists!</p>';
                            
                        }
                        echo '</div>';
                    }
                    if(isset($_GET['signup']))
                    {
                        if($_GET['signup'] == "success")
                        {
                            echo '<p class="signupsuccess">SIGN UP SUCCESSFULL! </p><div style="margin: auto; width: fit-content;"><img style = " height: 100px;"src="img\happy-clipart-10.png"></div>';
                            echo '<br><br>';
                            echo '<a class="btn btn-primary btn-block" href="login.php">Login Here</a>';
                        }
                    }
                    
                    else {
                        echo '<div class="form-group"><input class="form-control" type="text" name="uid" placeholder="Username" required></div>
                        <div class="form-group"><input class="form-control" type="email" name="mail" placeholder="Email" required></div>
                        <div class="form-group"><input class="form-control" type="password" name="pwd" placeholder="Password"required></div>
                        <div class="form-group"><input class="form-control" type="password" name="pwd-repeat" placeholder="Password (repeat)" required></div>
                        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"><br/><br/>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="signup-submit">Sign Up</button></div><a class="already" id="already_id" href="login.php">You already have an account? Login here.</a>';
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.es.min.js"></script>
</body>

</html>

