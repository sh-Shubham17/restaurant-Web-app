<?php 
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="signuplogo.css" >
<link rel="stylesheet" type="text/css" href="header.css" >
</head>
<body>


<!--navbar-->
<header>
    <nav class="navbar_main">
        <div class="nav-contents">
            <ul class="nav-list">
                <li class="nav-item"><a class="logo" href="home.php#a_logo">Restauranté</a></li>
                <li class="nav-item"><a href="home.php#">Home</a></li>
                <li class="nav-item"><a href="home.php#a_gallery">Gallery</a></li>
                <li class="nav-item"><a href="home.php#a_menu">Menu</a></li>
                <li class="nav-item"><a href="home.php#a_about">About</a></li>
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

</body>
</html>