<?php 
session_start();
require 'loader.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!--css-->
    <link rel="stylesheet" type="text/css" href="home_style.css">
    <link rel="stylesheet" type="text/css" href="signuplogo.css" >

    <!--Bootstrap-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restauranté</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>

<body>

    <!--navbar-->
    <header>
        <nav class="navbar_main">
            <div class="nav-contents">
                <ul class="nav-list">
                    <li class="nav-item"><a class="logo" href="#a_logo">Restauranté</a></li>
                    <li class="nav-item"><a href="#">Home</a></li>
                    <li class="nav-item"><a href="#a_gallery">Gallery</a></li>
                    <li class="nav-item"><a href="#a_menu">Menu</a></li>
                    <li class="nav-item"><a href="#a_about">About</a></li>
                    <?php 
                        if (isset($_SESSION['userId'])){
                            echo '<li class="nav-item"><a href="includes\logout.inc.php">Logout</a></li>';
                            echo ' <li class="nav-item"><a href="dashboard.php"><i class="user-icon prime-sprite"></i>'.$_SESSION["userUid"].'</a></li>';
                        }
                        else {
                            echo '<li class="nav-item"><a href="login.php">Login</a></li>';?>
                            <li class="nav-item"><a href="signup.php"> <i class="user-icon prime-sprite"></i>SignUp</a></li>
                        <?php }
                    ?>
                </ul>
            </div>
        </nav>
    </header>
    
    <!--Landing video-->
    <div>
        <!--home screen logo-->
        <div id="a_logo" class="overlay_text rellax" ><span id="quote">The Flavors Of Nature</span></div>
        <div class="overlay_logo fit " ><span id="logo_overlay" style="opacity: 0;"><img src="img/Logo_full_wt.png" width="350px"></span></div>

        <!--bg video elements-->
        <div class="home_main fit">
            <video loop autoplay muted id="landing_video fit"><source src="img/Landing_video.mp4" type="video/mp4"></video>
            <div class="blackscreen fit"></div>
            <img id="fade_img" class="fit" src="./img/fade_bw.png" alt="">
            <div class="arrow bounce"></div>
        </div>
        
    </div>
    
    <div style="height: 1500px;"></div>

    <!--Write up-->
    <div style="height: 700px;">
        <div class="quote_content" >
            <div id="quote_table" class="rellax">
                <div id="quote_2">“One of the very nicest things about life is the way we must regularly stop whatever it is we are doing and devote our attention to eating.”
                </div>
            </div>
        </div>
    </div>

    <!--Blue Bar-->
    <div class="register_main blue_bar">
        <div style="z-index: 8;background-image: url(./img/bg_blue.jpg);" class="blue_bar">
        </div>
    </div>

    <!--image_1-->
    <div style="display: grid; ">
        <div class="home_img himg1"></div>
    </div>

    <!--Gallery-->
    <div class="register_main">
        <div class="register_bg">
            <div class="register_content">
                Take A Look Inside...
            </div>
        </div>
    </div>

    <!--carousel-->
    <div id="a_gallery" class="carousle_main fit">
        <div id="demo" class="carousel slide" data-ride="carousel" data-pause="false" data-interval="4000">
                      
            <!-- The slideshow -->
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="./img/carousel1.jpg" alt="Los Angeles">
              </div>

              <div class="carousel-item">
                <img src="./img/carousel2.jpg" alt="Chicago">
              </div>

              <div class="carousel-item">
                <img src="./img/carousel3.jpg" alt="New York">
              </div>

              <div class="carousel-item">
                <img src="./img/carousel4.jpg" alt="New York">
              </div>

              <div class="carousel-item">
                <img src="./img/carousel5.jpg" alt="New York">
              </div>

              <div class="carousel-item">
                <img src="./img/carousel6.jpg" alt="New York">
              </div>
            </div>
          
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          
          </div>
    </div>

    <!--Blue Bar-->
    <div class="register_main blue_bar">
        <div style="z-index: 8;background-image: url(./img/bg_blue.jpg);" class="blue_bar">
        </div>
    </div>

    <!--image_2-->
    <div style="display: grid; ">
        <div class="home_img himg3"></div>
    </div>

    <!--Menu_head-->
    <div class="register_main">
        <div class="register_bg">
            <div class="register_content">
                Delicious Cousine...
            </div>
        </div>
    </div>

    <!--ADD A BRIEF ABOUT EACH ITEM IN THE CARDS   TOTAL 9-->
    <!--Menu-->
    <div id="a_menu" style="height: 1700px;">
        <div class="menu_main">
            
            <div class="menu_img rellax" data-rellax-speed="-15">
                <div class="menu_list rellax" data-rellax-speed="9">
                    <div>
                        <h1 id="menu_h1">MENU</h1>

                        <!--row 1-->
                        <div class="menu_box">
                        
                            <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                src="./img/menu_starter.jpg"
                                alt="Card image cap" height="238.5" width="250.8">
                                <div class="card-body">
                                <h4 class="card-title">Starters</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#modal_starters">View Menu</a>
                                </div>
                            </div>
                            </div>
                    
                            <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                src="./img/menu_lunch.jpg"
                                alt="Card image cap">
                                <div class="card-body">
                                <h4 class="card-title">Lunch</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#modal_lunch">View Menu</a>
                                </div>
                            </div>
                            </div>
                    
                            <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                src="./img/menu_dinner.jpg"
                                alt="Card image cap">
                                <div class="card-body">
                                <h4 class="card-title">Dinner</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#modal_dinner">View Menu</a>
                                </div>
                            </div>
                            </div>
                    
                        </div>
                        
                        <!--row 2-->
                        <div class="menu_box">
                    
                            <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                src="./img/menu_maincourse.jpg" alt="Card image cap">
                                <div class="card-body">
                                <h4 class="card-title">Main Course</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#modal_maincourse">View Menu</a>
                                </div>
                            </div>
                            </div>
                    
                            <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                src="./img/menu_italian.jpg" alt="Card image cap">
                                <div class="card-body">
                                <h4 class="card-title">Italian</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#modal_italian">View Menu</a>
                                </div>
                            </div>
                            </div>
                    
                            <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                src="./img/menu_desert.jpg" alt="Card image cap">
                                <div class="card-body">
                                <h4 class="card-title">Deserts</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#modal_deserts">View Menu</a>
                                </div>
                            </div>
                            </div>
                    
                        </div>
                        
                        <!--row 3-->
                        <div class="menu_box">
                    
                            <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                src="./img/menu_special.jpg" alt="Card image cap">
                                <div class="card-body">
                                <h4 class="card-title">Special</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#modal_special">View Menu</a>
                                </div>
                            </div>
                            </div>
                    
                            <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                src="./img/menu_wedding.jpg" alt="Card image cap">
                                <div class="card-body">
                                <h4 class="card-title">Wedding Special</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#modal_wedding">View Menu</a>
                                </div>
                            </div>
                            </div>
                    
                            <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                src="./img/menu_wine.jpg" alt="Card image cap">
                                <div class="card-body">
                                <h4 class="card-title">Drinks</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#modal_wine">View Menu</a>
                                </div>
                            </div>
                            </div>
                    
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Menu Popups-->
    <div>
        <!--Starters -->
        <div class="modal fade" id="modal_starters">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <img src="./Menu/starters.png">
                </div>
            </div>
        </div>

        <!--Lunch -->
        <div class="modal fade" id="modal_lunch">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <img src="./Menu/lunch.png">
                </div>
            </div>
        </div>

        <!--Dinner -->
        <div class="modal fade" id="modal_dinner">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <img src="./Menu/dinner.png">
                </div>
            </div>
        </div>

        <!--main course -->
        <div class="modal fade" id="modal_maincourse">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <img src="./Menu/main course.png">
                </div>
            </div>
        </div>

        <!--italian -->
        <div class="modal fade" id="modal_italian">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <img src="./Menu/italian.png">
                </div>
            </div>
        </div>

        <!--deserts -->
        <div class="modal fade" id="modal_deserts">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <img src="./Menu/deserts.png">
                </div>
            </div>
        </div>

        <!--special -->
        <div class="modal fade" id="modal_special">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <img src="./Menu/Special.png">
                </div>
            </div>
        </div>

        <!--wedding -->
        <div class="modal fade" id="modal_wedding">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <img src="./Menu/wedding.png">
                </div>
            </div>
        </div>

        <!--wine -->
        <div class="modal fade" id="modal_wine">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <img src="./Menu/wine.png">
                </div>
            </div>
        </div>

    </div>

    <!--Register now-->
    <div class="register_main">
        <div class="register_bg">
            <div class="register_content">
                Why wait??? Book yourself a table! 
                <a id="register_btn" class="btn btn-primary btn_book" href="./Book/index.php">Book Now</a>
            </div>
        </div>
    </div>

    <!--image_3-->
    <div style="display: grid; ">
        <div class="home_img himg2"></div>
    </div>

    <!--About_head-->
    <div class="register_main">
        <div class="register_bg">
            <div class="register_content">
                Know Us Better!!! 
            </div>
        </div>
    </div>

    <!--About-->
    <div id="a_about" class="about_main fit">
        <div class="about_bg">

            <!--Map-->
            <div class="about_map">
                <iframe class="map_view" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14011.22395658185!2d77.04076939724128!3d28.60559653337555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d053340000001%3A0x43728703a210ae01!2sDeen%20Dayal%20Upadhyaya%20College!5e0!3m2!1sen!2sin!4v1582886340194!5m2!1sen!2sin" 
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

            <!--About text-->
            <div class="about_text">
                <h1>About</h1>
                <p>
                    Restauranté has been created by a team that is extremely passionate about food, wine and all things fine.<br>
                    Restauranté offers the most enjoyable, authentic and friction-free table booking experience. You can now book over 100 restaurants in Delhi NCR, Mumbai, Bengaluru Chennai and Kolkata on our swanky website.
                </p>
            </div>
            <div class="about_team">
                <p>Meet our team of passionate creators</p>
                <a id="team_btn" class="btn btn-primary btn_book" href="team.php">Our Team</a>
            </div>
        </div>
    </div>

    <!--footer
    <footer>
        <div class="footer_main">
            <div class="footer_img">
                <div class="footer_img1 fimg"></div>
                <div class="footer_img2 fimg"></div>
                <div id="thankyou" class="fimg"></div>
            </div>
            <div class="footer_content">
                SEC Assignment
            </div>
        </div>
    </footer>-->

    <div id="footer_home">
        <div id="bg_left" style="width: 17.5%;height: 300px;background-image: url(&quot;Footer/assets/img/footer-bkg-img1.png&quot;);background-size: contain;background-repeat: no-repeat;background-position: left;margin-top: 20px;"></div>
        <div id="bg_right" style="width: 15%;height: 300px;background-image: url(&quot;Footer/assets/img/footer-bkg-img2.png&quot;);background-size: contain;background-repeat: no-repeat;background-position: right;margin-top: 20px;"></div>
        <div class="footer-dark">
            <footer style="width: 75%;margin-left: 12.5%;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Navigate</h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#a_gallery">Gallery</a></li>
                                <li><a href="#a_menu">Menu</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="./team.php">Team</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="./login.php">Login</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text" style="background-image: url(&quot;Footer/assets/img/thankyou.png&quot;);height: 80px;background-size: contain;background-position: center;background-repeat: no-repeat;margin-top: 10px;">
                            <div></div>
                        </div>
                        <div class="col item social"><div class="prime-sprite2 user-icon2"></div>
                    </div>
                    <p class="copyright"><br>Restauranté&nbsp;© 2020</p>
                </div>
            </footer>
        </div>
    </div>

    <!--java script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="./script.js" async></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.0.0/rellax.min.js"></script>
        <script>
            var rellax = new Rellax('.rellax');
        </script>

    <!--Bootstrp-->
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        
</body>
</html>
