<?php
if( isset($_POST['login-submit'])) {
    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if(empty($mailuid) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE uidusers=? OR emailusers=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt , "ss", $mailuid , $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                /*the password_verify fuction checks password entered by the user
                 and hashed it and macthes with the password at the database corressponding the username or email*/ 
                $pwdCheck = password_verify($password, $row['pwdusers']); 
                if($pwdCheck == false) {
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
                else if( $pwdCheck ==  true) {
                    session_start();
                    $_SESSION["userId"] = $row['idusers'];
                    $_SESSION["userUid"] = $row['uidusers'];

                    header("Location: ../login.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../login.php?error=worngpassword");
                    exit();
                }

            }
            else 
            {
                header("Location: ../login.php?error=sqlerror");
                exit();
            }
        }
    }
}
else {
    header("Location: ../login.php");
        exit();
}