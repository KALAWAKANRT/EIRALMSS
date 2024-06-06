<?php require_once "../controllerUserData.php";
$email=$_SESSION['email'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$school=$_SESSION['school'];
$gen = $_SESSION['gender'];
$pass = $_SESSION['password'];
$courses = $_SESSION['course'];
function courseExists($courseName, $coursesArray) {
    return in_array($courseName, $coursesArray);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="profile.css">

</head>
<body>
    <nav class="sidebar close">
        <header>
               <div class="text logo-text">
                    <span class="name">EIRA</span>
                    <span class="profession">Learn at your own pace</span>
                </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <i class='bx bx-home-alt icon' onclick="document.getElementById('dashboard').submit();"></i>
                        <span class="text nav-text" onclick="document.getElementById('dashboard').submit();">Dashboard</span>
                        <form id="dashboard" method="POST" autocomplete="off" style="display: none;">
                        <input class="text nav-text" type="hidden" name="dashboard" value="dashboard">
                        </form>
                    </li>

                    <li class="nav-link">
                        <i class='bx bx-user icon' onclick="document.getElementById('profileForm').submit();"></i>
                        <span class="text nav-text" onclick="document.getElementById('profileForm').submit();">Profiles</span>
                        <form id="profileForm" method="POST" autocomplete="off" style="display: none;">
                        <input class="text nav-text" type="hidden" name="profile" value="Profiles">
                        </form>
                        
                    </li>

                    <li class="nav-link">
                        <a href="../homepage/index.php">
                            <i class='bx bx-task icon' ></i>
                            <span class="text nav-text">Training</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-cog icon' ></i>
                            <span class="text nav-text">Settings</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../login-signup/logout-user.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="starter" style="background-image: url('../homepage/img/backgroundblue.jpg');">
                <img src="../homepage/img/Rectangle 13.png" class="logoimage">
                <h2 class="welcome" >Welcome back, <?php echo $fname, " ", $lname; ?>!</h2>
            <!--Options Part. Moves as you scroll. Click on em for easy transition-->
                <div class="options">
                    <a href="#info">
                        <span> User Info </span><br>
                    </a>
                    <a href="#enrolled">
                        <span> Enrolled Courses</span><br>
                    </a>
                    <a href="#achieve">
                        <span> Achievements</span>
                    </a>
                </div>
            <section class="main">
        </div>
                <div class="profmain"> 
                    <!-- User Information Part-->
                    <section id="info">
                        <h2 class="profinfo"> User Information </h2><br><br>
                        <span class="infopart"> Name: <?php echo $fname, " ", $lname; ?></span><br><br>
                        <span class="infopart"> School: <?php echo $school; ?></span><br><br>
                        <span class="infopart"> Email: <?php echo $email; ?></span><br><br>
                        <span class="infopart"> Gender: <?php echo $gen; ?></span><br><br><br>
                        <span class="changepass" id="ChangePassword">Change Password</span><br><br>
                    </section>
                    <!-- Enrolled Courses Part-->
                    <section id="enrolled" class="enrolled">
                        <h2 class="courses">Enrolled Courses</h2><br> 
                        <?php if ($courses != NULL): ?>
                                <?php foreach ($courses as $course): ?>
                                    <?php if (courseExists($course, $courses)): ?>
                                        <?php
                                            $imageSrc = '';
                                            switch ($course) {
                                                case "HTML":
                                                    $imageSrc = '../homepage/img/html.png';
                                                    $link = "html.php";
                                                    break;
                                                case "CSS":
                                                    $imageSrc = '../homepage/img/css.png';
                                                    $link = 'css.php';
                                                    break;
                                                case "JAVASCRIPT":
                                                    $imageSrc = '../homepage/img/javascript.png';
                                                    $link = 'javascript.php';
                                                    break;
                                                case "PHP":
                                                    $imageSrc = '../homepage/img/php.png';
                                                    $link = 'php.php';
                                                    break;
                                                case "GAME DEVELOPMENT & ANIMATION":
                                                    $imageSrc = '../homepage/img/game.png';
                                                    $link = 'gamedev.php';
                                                    $course = 'GAMEDEV';
                                                    break;
                                                default:
                                                    $imageSrc = '../homepage/img/default.png';
                                            }
                                            ?>
                                            <div class ="imagecontainers">
                                            <a href = "<?php echo $link?>" target="_blank">
                                             <img class="course-image" src="<?php echo $imageSrc; ?>" >
                                             <p class="coursename"> <?php echo $course; ?> </p>
                                            </a>
                                        </div>
                                             <?php endif;?>
                                    <?php endforeach;?>
                                <?php else:?>
                                    <div class ="imagecontainers2">
                                        <img src="../homepage/img/default.png" >
                                        <p>Student has not enrolled in any courses yet.</p>
                                    </div>
                                    <?php endif; ?>
                    </section>
                <section id = "achieve" class="achieved">
                    <h2 class="achieve"> Achievements </h2>
                    <div class ="imagecontainers3">
                        <img src="../homepage/img/default.png" >
                        <p>Not a single thing...</p>
                    </div>
                </section>
                </div>
            </section>
            <!-- Modal for Changing Password-->
            <div class="change-password-modal" id="changePasswordModal">
                <button class="close-btn" id="closeChangePasswordModal">&times;</button>
                <h2 style="text-align: center;">Change Password</h2>
                <form action="" method="POST" autocomplete="">
                <p class="text-center">Enter your old password to change your password.</p>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Enter Your Old Password">
                    <input type="hidden" name="email" value="<?php echo $email?>">
                </div>
                <div class="form-group">
                    <button class="changebtn" type="submit" name="check-password">Change Password</button>
                </div>
            </div>
        </form>
    </section>

    <script>
      const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{ // For the side bar
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{ //Dark mode and light mode. Crap right now. Low Priority
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
document.addEventListener('DOMContentLoaded', (event) => { //For the options to move while scrolling
    const optionsBox = document.querySelector('.options');
    const initialTop = parseInt(window.getComputedStyle(optionsBox).top);

window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;
    optionsBox.style.top = `${initialTop + scrollY}px`;
    });
});
document.getElementById('ChangePassword').addEventListener('click', function() {
    document.getElementById('changePasswordModal').style.display = 'block';
    });
        // Closes modal when X button is clicked
document.getElementById('closeChangePasswordModal').addEventListener('click', function() {
    document.getElementById('changePasswordModal').style.display = 'none';
        });
    </script>
</body>
</html>