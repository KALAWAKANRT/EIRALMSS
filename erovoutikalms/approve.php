<?php require_once "controllerUserData.php"; ?>
<?php //This whole thing is for when the person behind the admin email clicks approve
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    $tokenSql = "SELECT * FROM enrollment_requests WHERE token='$token' LIMIT 1";
    $result = $con->query($tokenSql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];
        $courseName = $row['course_name'];

        $enrollquery = "SELECT first_name, last_name, contact, university, address, date_of_birth, gender FROM students WHERE student_email='$email'";
        $enrollresult = $con->query($enrollquery);
        if($enrollresult){
            while($rows= mysqli_fetch_assoc($enrollresult)){
                $fname = $rows['first_name'];
                $lname = $rows['last_name'];
                $contact = $rows['contact'];
                $uni = $rows['university'];
                $address = $rows['address'];
                $dob = $rows['date_of_birth'];
                $gender = $rows['gender'];
            }
        }
        $enquery = "INSERT INTO enrolled_students (enrolled_course, first_name, last_name, contact, university, address, date_of_birth, gender, student_email) 
                    values('$courseName','$fname','$lname','$contact','$uni','$address','$dob','$gender','$email')
        ";
        mysqli_query($con, $enquery);
        $quizquery = "INSERT INTO quizzesdone (email, course) values ('$email', '$courseName')";
        mysqli_query($con, $quizquery);
        $deleteToken = "DELETE FROM enrollment_requests WHERE token='$token'";
        $con->query($deleteToken);
        echo "Student is enrolled";
    } else {
        echo "Invalid or expired token.";
    }
} else {
    echo "No token provided.";
}
?>