<?php require_once "controllerUserData.php"; ?>
<?php

if(isset($_GET['token'])){
    $token = $_GET['token'];
    $emailquery = "SELECT email FROM enrollment_requests WHERE token='$token' LIMIT 1";
    $results = mysqli_query($con, $emailquery);
    $row = $results->fetch_assoc();
    $email = $row['email'];
    $subject = "Enrollment Request";
    $message = "Sorry, your enrollment to this course has been denied. For refunds, please contact our customer support.";
    $sender = "robocoman.1@gmail.com";
    if(send_mail($email, $subject, $message, $sender)){
            $deleteToken = "DELETE FROM enrollment_requests WHERE token='$token'";
    $con->query($deleteToken);
    } else {
        $errors['otp-error'] = "Failed";
    }
}

?>