<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!--Bootstrap-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Book Table</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" type="text/css" href="../signuplogo.css" >
</head>
<body>
    <!--navbar-->
    <header>
        <nav class="navbar_main">
            <div class="nav-contents">
                <ul class="nav-list">
                    <li class="nav-item"><a class="logo" href="../home.php#a_logo">Restauranté</a></li>
                    <li class="nav-item"><a href="../home.php">Home</a></li>
                    <li class="nav-item"><a href="../home.php#a_gallery">Gallery</a></li>
                    <li class="nav-item"><a href="../home.php#a_menu">Menu</a></li>
                    <li class="nav-item"><a href="../home.php#a_about">About</a></li>
                    <?php 
                   if (isset($_SESSION['userId'])){
                    echo '<li class="nav-item"><a href="..\includes\logout.inc.php">Logout</a></li>';
                    echo '<li class="nav-item"><a href="..\signup.php">'.$_SESSION["userUid"].'</a></li>';
                }
                else {
                    echo '<li class="nav-item"><a href="..\login.php">Login</a></li>';?>
                    <li class="nav-item"><a href="..\signup.php"> <i class="user-icon prime-sprite"></i>
                    sign in / signup
                    </a></li>
                <?php }
                ?>
        
                </ul>
            </div>
        </nav>
    </header>
    <div class="page-content">
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-4 start -->
                <div class="col-md-4 col-sm-3 hidden-xs pt-100" >
                    <img src="../img/book_1.jpg" alt="Royal Plate - Restaurant &amp; Catering HTML Template">
                </div><!-- .col-md-4 end -->

                <!-- .col-md-4 start -->
                <div class="col-md-4 col-sm-6 centered pt-150 open-table-widget-style-1" >
                    <div class="custom-heading style-1">
                        <h3><span>Reservation</span></h3>
                        <h5>Book your table</h5>

                        <!-- .divider.style-1 start -->
                        <div class="divider style-1 center">
                            <span class="hr-simple left"></span>
                            <i class="fa fa-circle hr-icon"></i>
                            <span class="hr-simple right"></span>
                        </div>
                    </div><!-- .custom-heading.style-1 end -->

                    <!-- Open table widget start -->
                    <div class="otw-bare-bones-style widget open-table-widget triggerAnimation animated fadeIn" data-animate="fadeIn" style="opacity: 1;">
                        <div class="otw-bare-bones">
                            <div class="otw-widget-form-wrap">
                                <?php
                                if(isset($_SESSION['userId'])) 
                                {   
                                    if(isset($_GET['booking']))
                                    {
                                        if($_GET['booking'] == "success")
                                        {
                                            echo '<h3 style=" color:snow;">THANKS! YOUR REQUEST IS SAVED.<br><img style=" height: 100px;"src="..\img\happy-clipart-10-original.png"<br>
                                            YOU\'LL RECIEVE A MAIL SHORTLY..<br><br></h3>';
                                            echo '<h3 style="color:yellow;">WANT TO MAKE MORE BOOKINGS? </h3>';
                                            echo '<h4 style="  color: blue;padding: 11px;background-color: snow;"><a href="index.php">BOOK TABLE</a></h3>';
                                        }
                                    }
                                    else{
                                        echo' <form action="booktable.php" method="post" class="otw-widget-form" target="_blank">
                                            <div class="otw-wrapper">
                                                <div class="otw-name-wrap otw-input-wrap">
                                                    <input name="Name" class="otw-reservation-name" type="text" placeholder="Your name">
                                                </div>
                                                <div class="otw-email-wrap otw-input-wrap">
                                                    <input name="mail" class="otw-reservation-email" type="text" placeholder="Your email">
                                                </div>
                                                <div class="otw-date-wrap otw-input-wrap">
                                                    <input name="startDate" class="otw-reservation-date" type="text" value="17/04/2020" autocomplete="off" data-date-format="mm/dd/yyyy">
                                                </div>
                                                <div class="otw-time-wrap otw-input-wrap">

                                                    <select name="ResTime" class="otw-reservation-time selectpicker">
                                                        <option value="6:00pm">6:00 pm</option>
                                                        <option value="6:30pm">6:30 pm</option>
                                                        <option value="7:00pm">7:00 pm</option>
                                                        <option value="7:30pm">7:30 pm</option>
                                                        <option value="8:00pm">8:00 pm</option>
                                                        <option value="8:30pm">8:30 pm</option>
                                                        <option value="9:00pm">9:00 pm</option>
                                                        <option value="9:30pm">9:30 pm</option>
                                                        <option value="10:00pm">10:00 pm</option>
                                                        <option value="10:30pm" selected="selected">10:30 pm</option>     
                                                    </select>

                                                </div>
                                                <div class="otw-party-size-wrap otw-input-wrap">

                                                    <select name="partySize" class="otw-party-size-select selectpicker">
                                                        <option value="1">1 person</option>
                                                        <option value="2">2 people</option>
                                                        <option value="3">3 people</option>
                                                        <option value="4" selected="selected">4 people</option>
                                                        <option value="5">5 people</option>
                                                        <option value="6">6 people</option>
                                                        <option value="7">7 people</option>
                                                        <option value="8">8 people</option>
                                                        <option value="9">9 people</option>
                                                        <option value="10">10 people</option>
                                                        <option value="11">11 people</option>
                                                        <option value="12">12 people</option>
                                                        <option value="13">13 people</option>
                                                        <option value="14">14 people</option>
                                                        <option value="15">15 people</option>
                                                    </select>

                                                </div>

                                                <div class="otw-button-wrap">
                                                    <input name="table-submit" type="submit" class="otw-submit" value="Book">
                                                </div>
                                            </div>
                                        </form>';
                                    }
                                }
                                else{
                                    echo '<h3  style="font-family: Anton, sans-serif; color:white"><br>YOU MIGHT BE NOT LOGGED IN!<BR><br>PLEASE LOGIN FIRST</h3>';

                                }?>
                            </div><!-- .otw-widget-form-wrap end -->
                        </div>
                    </div><!-- Open table widget end -->
                </div><!-- .col-md-4 end -->

                <!-- .col-md-4 start -->
                <div class="col-md-4 col-sm-3 hidden-xs pt-100" >
                    <img src="../img/book_2.jpg" alt="Royal Plate - Restaurant &amp; Catering HTML Template">
                </div><!-- .col-md-4 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div>

     <!--java script-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</body>
</html>