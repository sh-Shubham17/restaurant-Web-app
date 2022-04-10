<?php
if(isset($_POST['table-submit'])) {
    require '..\includes\dbh.inc.php';
    $name = $_POST['Name'];
    $email = $_POST['mail'];
    $date = $_POST['startDate'];
    $time = $_POST['ResTime'];
    $NoOfSeats = $_POST['partySize'];
    if((!filter_var($email,FILTER_VALIDATE_EMAIL)))
    {
        header("Location: index.php?error=invalidmail");
        exit(); 
    }
    else {
        $sql = "INSERT INTO booktable(bookName, bookMail, bookDate, bookTime,bookSeat) VALUES(?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: index.php?error=sqlerror");
            exit(); 
        }
        else {
            mysqli_stmt_bind_param($stmt,"sssss",$name,$email,$date,$time,$NoOfSeats);
            mysqli_stmt_execute($stmt);
            header("Location: index.php?booking=success");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
else {
    header("Location: index.php
    ");
    exit();
}