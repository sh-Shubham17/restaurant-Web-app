<?php
require 'header.php';
include 'includes/dashboard.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!--css-->
    <link rel="stylesheet" type="text/css" href="./dashboard/style.css">
    <link rel="stylesheet" type="text/css" href="header.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="welcome fit">
        <h1>welcome <?php echo $_SESSION["userUid"]; ?></h1></div>
    <div class="details fit">
        <div class="details_grid">
        <h3>Details</h3>
            <div class="details_text text">
                <div class="details_list">Username: &nbsp<?php echo $details['uidusers']; ?></div>
                <div class="details_list">Email: &nbsp&nbsp<?php echo $details['emailusers']; ?></div>
                <div class="details_list">Bookings: </div>
            </div>
            <div class="details_img">
                <div class="user_img">
                    <a data-toggle="modal" data-target="#modal_edit_img">
                        <?php
                            include './dashboard/display_img.php';
                        ?>
                        <div class="edit_text">
                            
                            <div class="edit_icon"></div>
                            <div class="edit_font">
                                EDIT
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="change_pass fit">
        <h3>Change Password</h3>
        <div class="pass_form text">
            <form>
                Current Password: <input>
                <a href="#">GO</a>
            </form>
        </div>
        <div class="text na">
            feature not available!
        </div>
    </div>
    <div class="bookings fit">
        <h3>My Bookings</h3>
        <div class="skey">
            <img src="./img/tick.png" height="20px" width="20px"><b>&nbsp Completed</b><br>
            <img src="./img/cross.png" height="20px" width="20px"><b>&nbsp Pending</b>
        </div>
        <div class="booking_table text">
            <table>
                <tr>
                    <th>Sno.</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>People</th>
                    <th>Status</th>
                </tr>
                <?php
                    include './dashboard/bookings.php';
                ?>
            </table>
        </div>
        <div class="book_now">
            <a style="border-radius: 10px !important;font-size: 1.1rem;"  class="btn btn-primary btn_book" href="./Book/index.php">BOOK</a>
        </div>
    </div>
    <div class="footer">
        <div class="team">
            <a href="./team.php">
            Meet Creators
            </a>
        </div>
        <p>@DDUC, Dwarka
    </div>

    <!--change image-->
    <div class="modal fade" id="modal_edit_img">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <?php
                        include './dashboard/change_img.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!--java script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="./script.js" async></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.0.0/rellax.min.js"></script>

    <!--Bootstrp-->
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>