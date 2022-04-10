<?php
require "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!--css-->
    <link rel="stylesheet" type="text/css" href="./team.css">

    <!--Rotating cards-->
    <link href="./rotating-css-card-master/css/bootstrap.css" rel="stylesheet" />
    <link href="./rotating-css-card-master/css/rotating-card.css" rel="stylesheet" />
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
</head>
<body>
    <!--navbar-->

    <div id="team">
        <h1>Our Team</h1>
    </div>

    <!-- Cards -->
    <div class="card_main">
        <!--Piyush-->
        <div class="card-container" style="margin-left: 5%;">
            <div class="card">
                <div class="front">
                    <div class="cover">
                        <img src="./img/profile_bg2.jpg"/>
                    </div>
                    <div class="user">
                        <img class="img-circle" src="./img/profile_pic1.jpg"/>
                    </div>
                    <div class="content">
                        <div class="main">
                            <h3 class="name">Piyush Yadav</h3>
                            <p class="profession">Web Designer</p>

                            <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                        </div>
                        <div class="footer">
                            <div class="rating">
                                <i class="fa"></i>@DDUC, Dwarka
                            </div>
                        </div>
                    </div>
                </div> <!-- end front panel -->
                <div class="back">
                    <div class="header">
                        <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                        <div class="main">
                            <h4 class="text-center">Job Description</h4>
                            <p class="text-center">Web design, Adobe Photoshop, HTML 5, CSS3, Bootstrap 4 and many others...</p>

                            <div class="stats-container">
                                <div class="stats">
                                    <h4>255</h4>
                                    <p>
                                        Followers
                                    </p>
                                </div>
                                <div class="stats">
                                    <h4>96</h4>
                                    <p>
                                        Following
                                    </p>
                                </div>
                                <div class="stats">
                                    <h4>20</h4>
                                    <p>
                                        Projects
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="footer">
                        <div class="social-links text-center">
                            <a href="facebook.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                            <a href="google.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                            <a href="twitter.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        </div>
                    </div>
                </div> <!-- end back panel -->
            </div> <!-- end card -->
        </div> <!-- end card-container -->

        <!--Shubham-->
        <div class="card-container" style="margin-left: 10%;">
            <div class="card">
                <div class="front">
                    <div class="cover">
                        <img src="./img/profile_bg1.jpg"/>
                    </div>
                    <div class="user">
                        <img class="img-circle" src="img\profile_pic2.png"/>
                    </div>
                    <div class="content">
                        <div class="main">
                            <h3 class="name">Shubham Paliwal</h3>
                            <p class="profession">Web Developer</p>

                            <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                        </div>
                        <div class="footer">
                            <div class="rating">
                                <i class="fa "></i> @DDUC, Dwarka
                            </div>
                        </div>
                    </div>
                </div> <!-- end front panel -->
                <div class="back">
                    <div class="header">
                        <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                    </div>
                    <div class="content">
                        <div class="main">
                            <h4 class="text-center">Job Description</h4>
                            <p class="text-center">Web developer, JavaScript, HTML5, MySQL, Adobe Access and many others...</p>

                            <div class="stats-container">
                                <div class="stats">
                                    <h4>235</h4>
                                    <p>
                                        Followers
                                    </p>
                                </div>
                                <div class="stats">
                                    <h4>114</h4>
                                    <p>
                                        Following
                                    </p>
                                </div>
                                <div class="stats">
                                    <h4>35</h4>
                                    <p>
                                        Projects
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="footer">
                        <div class="social-links text-center">
                            <a href="facebook.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                            <a href="google.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                            <a href="twitter.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                        </div>
                    </div>
                </div> <!-- end back panel -->
            </div> <!-- end card -->
        </div> <!-- end card-container -->
    </div>
</body>
</html>