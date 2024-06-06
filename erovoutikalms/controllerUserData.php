<?php 
session_start();
require "connection.php";
require "send_mail.php"; // Include the send_mail.php script
$email = "";
$name = "";
$errors = array(); // Initialize an array to store errors

if (isset($_POST['signup'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $dob = mysqli_real_escape_string($con, $_POST['date_of_birth']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['c_password']);
    $company_univ = mysqli_real_escape_string($con, $_POST['company_univ']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $gen = mysqli_real_escape_string($con, $_POST['gender']);

    // Validation
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    }
    if (strlen($password) < 8) {
        $errors['password'] = "Password length must be 8 characters long!";
    }
    if(preg_match('/^\d+$/', $password)) {
        $errors['password'] = "Password cannot be all numbers.";
    }
    if(preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) {
        $errors['password'] = "Password cannot contain symbols";
    }
    $email_check = "SELECT * FROM students WHERE student_email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    // Add other validation checks...

    // Database insertion
 
if(count($errors) === 0){
    $encpass = password_hash($password, PASSWORD_BCRYPT);
    $code = rand(999999, 111111);
    $activation = "0";
    $insert_data = "INSERT INTO students (first_name, last_name, student_email, contact, date_of_birth, gender, password, code, activation, university, address)
                    values('$fname', '$lname', '$email', '$contact', '$dob', '$gen', '$encpass', '$code', '$activation', '$company_univ', '$address')";
    $data_check = mysqli_query($con, $insert_data);
    if($data_check){
        $subject = "Email Verification Code";
        $message = "Your verification code is $code";

        // Use the send_mail function from send_mail.php
        $mailResult = send_mail($email, $subject, $message);

        if ($mailResult === true) {
            $info = "A 6-digit verification code was sent to $email";
            $_SESSION['info'] = $info;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('location: ../login-signup/user-otp.php');
            exit();
        } else {
            $errors['otp-error'] = "Failed while sending code! Error: $mailResult";
        }
    } else {
        $errors['db-error'] = "Failed while inserting data into the database!";
    }
}
}
if (isset($_POST['start-course'])) {
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $course = $_POST['course'];
        // Check if the user is enrolled
        $checkEnrollmentSql = "SELECT * FROM enrolled_students WHERE student_email = '$email' AND enrolled_course = '$course'";
        $run_CheckEnrollmentSql = mysqli_query($con, $checkEnrollmentSql);
        
        if ($run_CheckEnrollmentSql && mysqli_num_rows($run_CheckEnrollmentSql) > 0) {
            // User is enrolled
            switch ($course){
                case "HTML":
                    header('Location: html.php');
                break;

                case "CSS":
                    header('Location: css.php');
                break;

                case "JAVASCRIPT":
                    header('Location: javascript.php');
                break;

                case "PHP":
                    header('Location: php.php');
                break;

                case "GAME DEVELOPMENT & ANIMATION":
                    header('Location: gamedev.php');
                break;
                default:
                    echo "Course Page is not ready yet. Sorry."; //you can add more here.
                    
            }
            exit(); 
        } else {
            // User is not enrolled
            echo 'not_enrolled';
        }
    } else {
      
        echo 'Email not found in session.';
    }
}



if (isset($_POST['authenticate'])) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    if ($email != false && $password != false) {
        $courseName = $_POST['courseName']; // Get the course name from the form
        $referenceNumber = $_POST['reference_number']; // Get the reference number from the form

        if ($_FILES['img']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['img']['tmp_name'])) {
            $imgTmpName = $_FILES['img']['tmp_name'];
            $imgName = $_FILES['img']['name'];
            $imgSize = $_FILES['img']['size'];
            $imgType = $_FILES['img']['type'];
        

            $uploadDir = 'D:/xampp/htdocs/erovoulms/erovoutikalms/receipts/'; // Change this once it's official
            $imgPath = $uploadDir . $imgName;
            move_uploaded_file($imgTmpName, $imgPath);
        } else {

            $errors['img-error'] = "Error uploading image.";
        }
        // Continue with existing authentication logic

        $sql = "SELECT * FROM students WHERE student_email = '$email'";
        $run_Sql = mysqli_query($con, $sql);

        if ($run_Sql) {
            $fetch_info = mysqli_fetch_assoc($run_Sql);
            $activation = $fetch_info['activation'];

            if ($activation == "1") {
                $adminEmail = "robocoman.1@gmail.com"; // Replace with the actual admin email
                $subject = "Enrollment Request";
                $userMessage = "Your enrollment request for the $courseName course has been sent to the admin. Wait for approval.
                   
                ";
                $token = bin2hex(random_bytes(16));
                $approveLink = "http://localhost/erovoulms/erovoutikalms/approve.php?token=$token";
                $denyLink = "http://localhost/erovoulms/erovoutikalms/deny.php?token=$token";
        
                $adminMessage = "
                        User with email $email is enrolling for $courseName course.<br><br>
                        <a href='$approveLink' style='background-color: #4CAF50; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 5px;'>Approve</a>
                        <a href='$denyLink' style='background-color: #f44336; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 5px;'>Deny</a><br><br>
                   Receipt in the attachment:
                ";

                $userSender = "robocoman.1@gmail.com";
                $adminSender = "robocoman.1@gmail.com";

                // Send email to the user
                if (send_mail($email, $subject, $userMessage, $userSender)) {
                    $info = "Enrollment request was sent to Admin. Wait for approval.";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    echo "<script>
                        alert('Enrollment request sent to user and admin. Wait for approval.');
                    </script>";
                } else {
                    $errors['otp-error'] = "Failed while sending Enrollment request to the user!";
                }

                // Send email to the admin
                if (send_mail($adminEmail, $subject, $adminMessage, $adminSender, $imgPath)) {
                    // Email to admin sent successfully
                    $storeToken = "INSERT INTO enrollment_requests (email, course_name, token) VALUES ('$email', '$courseName', '$token')";
                    $con->query($storeToken);
                    if (file_exists($imgPath)) {
                        unlink($imgPath); 
                    } else {
                        echo "Error: File not found.";
                    }
                } else {
                    $errors['otp-error'] = "Failed while sending Enrollment request to the admin!";
                }

                // Update the new 'receipt' table in the existing database
                $receiptSql = "INSERT INTO `receipt` 
                    (`reference_number`, `user_email`) 
                    VALUES ('$referenceNumber', '$email')";
                $con->query($receiptSql);
            } else {
                $errors['otp-error'] = "User is not authorized.";
            }
        } else {
            $errors['otp-error'] = "Error while querying the database.";
        }
    } else {
        $errors['otp-error'] = "Email or password is missing.";
    }
}




    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM students WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $activation = '1';
            $update_otp = "UPDATE students SET code = $code, activation = '$activation' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: ../homepage/index.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }
 //if user click login button
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
     
    // Retrieve the hashed password from the database
    $hashed_password_query = "SELECT password FROM students WHERE student_email = '$email'";
    $res = mysqli_query($con, $hashed_password_query);
    
    if($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $hashed_password = $row['password'];
        
        // Compare the hashed password with the entered password using password_verify()
        if(password_verify($password, $hashed_password)){
            $_SESSION['email'] = $email;
            $activation_query = "SELECT activation FROM students WHERE student_email = '$email'";
            $activation_result = mysqli_query($con, $activation_query);

            
            if ($activation_result && mysqli_num_rows($activation_result) > 0) {
                $activation_data = mysqli_fetch_assoc($activation_result);
                $activation = $activation_data['activation'];
                $_SESSION['password'] = $password;
                header('location: index.php');
            } else {
                // Generate a new verification code
                $code = rand(999999, 111111);
                $update_code = "UPDATE students SET code = $code WHERE email = '$email'";
                $update_res = mysqli_query($con, $update_code);

                if ($update_res) {
                    $subject = "Email Verification Code";
                    $message = "Your new verification code is $code";

                    // Use the send_mail function from send_mail.php
                    $mailResult = send_mail($email, $subject, $message);

                    if ($mailResult === true) {
                        $info = "You still haven't 1 your account yet. A new 6-digit verification code was sent to $email";
                        $_SESSION['info'] = $info;
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        header('location: ../login-signup/user-otp.php');
                        exit();
                    } else {
                        $errors['otp-error'] = "Failed while sending code! Error: $mailResult";
                    }
                } else {
                    $errors['db-error'] = "Failed while updating code!";
                }
            }
        } else {
            $errors['email'] = "<span style='color: black; font-weight: 600; margin-left: -15px;'>Incorrect email or password!";
        }
    } else {
        $errors['email'] = "<span style='color: black; font-weight: 600; font-size: 14px; margin-left: -15px;'>The email you entered isn’t connected to an account!";
    }
}


    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM students WHERE student_email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE students SET code = $code WHERE student_email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: robocoman.1@gmail.com";
                if(send_mail($email, $subject, $message, $sender)){
                    $info = "We will send a verification code to $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: ../login-signup/reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM students WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['student_email'];
            $_SESSION['email'] = $email;
            $info = "Create a new password";
            $_SESSION['info'] = $info;
            header('location: ../login-signup/new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
	if(isset($_POST['change-password'])){
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    
    // Retrieve the old password from the database
    $email = $_SESSION['email'];
    $old_password_query = "SELECT `password` FROM students WHERE student_email = '$email'";
    $result = mysqli_query($con, $old_password_query);
    
    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $old_password = $row['password'];
        
        if($password && $cpassword === $old_password) {
            $errors['password'] = "New password cannot be the same as the old password.";
        }
        else if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }
        else if(preg_match('/[^a-zA-Z0-9]/', $password)) {
            $errors['password'] = "Password cannot contain symbols";
        }
        else if(strlen($password) < 8) {
            $errors['password'] = "Password length must be 8 characters long!";
        }
        else if(preg_match('/^\d+$/', $password)) {
            $errors['password'] = "Password cannot be all numbers.";
        }
        else {
            $code = 0;
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE students SET code = $code, password = '$encpass' WHERE student_email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query) {
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: ../login-signup/password-changed.php');
            } else {
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    } else {
        $errors['db-error'] = "Failed to retrieve the old password.";
    }
}
 
   //if login now button click
   if(isset($_POST['login-now'])){
    header('Location: ../homepage/profile.php');
}
    if(isset($_POST['dashboard'])){
        $email = $_SESSION['email'];
        $enrollquery = "SELECT enrolled_course, progress FROM enrolled_students WHERE student_email='$email'";
        $enroll = mysqli_query($con, $enrollquery);
        $courses = array();
        $progress = array();
        while($rows = mysqli_fetch_assoc($enroll)){
            $progress[] = $rows['progress'];
            $courses[] = $rows['enrolled_course'];
        }
        $_SESSION['course'] = $courses;
        $_SESSION['progress'] = $progress;
        header('Location: ../homepage/userprofile.php');
       }
   if(isset($_POST['profile'])){
    $email = $_SESSION['email'];
    $pro_query = "SELECT first_name, last_name, university, gender, password FROM students WHERE student_email = '$email'";
    $profile = mysqli_query($con, $pro_query);
    if($profile){
        while($row = mysqli_fetch_assoc($profile)){
            $fname = $row['first_name'];
            $lname = $row['last_name'];
            $school = $row['university'];
            $pass = $row['password'];
            $gen = $row['gender'];
            $_SESSION['gender'] = $gen;
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['school'] = $school;
            $_SESSION['password'] = $pass;
        }
    }
    else{
        echo "Error";
    }
    $enrollquery = "SELECT enrolled_course FROM enrolled_students WHERE student_email='$email'";
    $enroll = mysqli_query($con, $enrollquery);
    $courses = array();
    while($rows = mysqli_fetch_assoc($enroll)){
        $courses[] = $rows['enrolled_course'];
    }
    $_SESSION['course'] = $courses;
    header('Location: ../homepage/profile.php');
   }
if(isset($_POST['check-password'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpass = "SELECT password FROM students WHERE student_email='$email'";
    $passconfirm = mysqli_query($con, $confirmpass);
    $row = mysqli_fetch_assoc($passconfirm);
    $password = $row['password'];
    if(password_verify($pass, $password)){
    $check_email = "SELECT * FROM students WHERE student_email='$email'";
    $run_sql = mysqli_query($con, $check_email);
    if(mysqli_num_rows($run_sql) > 0){
        $code = rand(999999, 111111);
        $insert_code = "UPDATE students SET code = $code WHERE student_email = '$email'";
        $run_query =  mysqli_query($con, $insert_code);
        if($run_query){
            $subject = "Password Reset Code";
            $message = "Your password reset code is $code";
            $sender = "From: robocoman.1@gmail.com";
            if(send_mail($email, $subject, $message, $sender)){
                $info = "We will send a verification code to $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: ../login-signup/reset-code.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Something went wrong!";
        }
    }else{
        $errors['email'] = "This email address does not exist!";
    }
}
    else{
        echo "<script>alert('Incorrect password!');</script>";
    }
}
if(isset($_POST['contact'])){
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = nl2br($_POST['message']);
    $adminEmail = "robocoman.1@gmail.com";
    $adminSender = "robocoman.1@gmail.com";
    $subject = "Contact Us";
    $sendmessage = "
        From: $name <br><br>
        Email: $email <br><br>
        Project: $project <br><br><br>
        $message

    ";
    if(send_mail($adminEmail, $subject, $sendmessage, $adminSender)){
        echo "<script>
                        alert('Your concerns and questions are received.');
                    </script>";
    }
    else {
        $errors['otp-error'] = "Failed while sending query to the admin!";
    }

}
if(isset($_POST['quizstart'])){ // Ground work for the quiz pages. You can add more or remove here or edit it entirely.
    $email = $_SESSION['email'];
    $course = $_POST['course'];
    $quiz = $_POST['quiz'];
    $check_quiz = "SELECT * FROM quizzesdone WHERE email='$email' AND course = '$course' AND $quiz = 'Not Done'";
    $result = mysqli_query($con, $check_quiz);
    if(mysqli_num_rows($result)>0){
        switch($course){
            case "HTML":
                switch($quiz){ //Adjust this part according to the number of quizzes you want to add per course.
                    case "quiz1": //Although if you have something more optimal than this, please do that.
                        header('Location: ../quizpages/htmlquiz1.php');
                        break;
                    case "quiz2":
                        header('Location: ../quizpages/htmlquiz2.php');
                        break; 
                    case "quiz3":
                        header('Location: ../quizpages/htmlquiz3.php');
                        break;         
                }
                break;
            case "CSS":
                switch($quiz){
                    case "quiz1":
                        header('Location: ../quizpages/cssquiz1.php');
                        break;
                    case "quiz2":
                        header('Location: ../quizpages/cssquiz2.php');
                        break; 
                    case "quiz3":
                        header('Location: ../quizpages/cssquiz3.php');
                        break;         
                }
                break;
                case "Javascript":
                    switch($quiz){
                        case "quiz1":
                            header('Location: ../quizpages/jsquiz1.php');
                            break;
                        case "quiz2":
                            header('Location: ../quizpages/jsquiz2.php');
                            break; 
                        case "quiz3":
                            header('Location: ../quizpages/jsquiz3.php');
                            break;         
                    }
                    break;
            default:
                echo "You somehow managed to get this";
                break;
        }
    } else {
        echo '<script type="text/javascript">alert("You already did this quiz and passed.");</script>';
    }
}
if(isset($_POST['quizresults'])){
    $passed = $_POST['quizresults'];
    $course = $_POST['course'];
    $email = $_SESSION['email'];
    $quiz = $_POST['quiz']; //only up to quiz 5 in the sql table
    if($passed == "pass"){
        $progress = "UPDATE enrolled_students SET progress = progress + 10 WHERE student_email = '$email' AND enrolled_course = '$course'";
        mysqli_query($con, $progress);
        $done = "UPDATE quizzesdone SET $quiz = 'Done' WHERE email = '$email' AND course = '$course'";
        mysqli_query($con, $done);
        switch($course){
            case "HTML":
                header('Location: ../homepage/html.php');
                break;
            case "CSS":
                header('Location: ../homepage/css.php');
                break;
            case "Javascript":
                header('Location: ../homepage/javascript.php');
                break;
            case "PHP":
                header('Location ../homepage/php.php');
                break;
            default:
                echo "Error Occurred!";
                break;
        }
    } else{
        switch($course){
            case "HTML":
                header('Location: ../homepage/html.php');
                break;
            case "CSS":
                header('Location: ../homepage/css.php');
                break;
            default:
                echo "Wow lmao";
                break;
    }
}
}

?>
