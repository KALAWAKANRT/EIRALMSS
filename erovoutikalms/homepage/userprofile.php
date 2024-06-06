<?php require_once "../controllerUserData.php"; 
$courses = $_SESSION['course'];
$progress = $_SESSION['progress'];
function courseExists($courseName, $coursesArray) {
    return in_array($courseName, $coursesArray);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    

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
                        <a href="../homepage/userprofile.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
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
         <section class="main">
      <div class="main-top">
        <h1>Skills</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="main-skills">
        <div class="card">
          <i class="fas fa-laptop-code"></i>
          <h3>Web developement</h3>
          <p>Join Over 1 million Students.</p>
          <button>Get Started</button>
        </div>
        <div class="card">
          <i class="fab fa-java"></i>
          <h3>Java</h3>
          <p>Join Over 3 million Students.</p>
          <button>Get Started</button>
        </div>
        <div class="card">
          <i class="fab fa-android"></i>
          <h3>Android dev</h3>
          <p>Join Over 1 million Students.</p>
          <button>Get Started</button>
        </div>
      </div>
      <section class="main-course">
        <h1>My courses</h1>
        <div class="course-box">
          <ul>
            <li class="active">In progress</li>
            <li>explore</li>
            <li>incoming</li>
            <li>finished</li>
          </ul>
          <div class="course">
          <?php if ($courses != NULL): ?>
                                <?php foreach ($courses as $index => $course): ?>
                                    <?php if (courseExists($course, $courses)): ?>
                                        <?php
                                            $imageSrc = '';
                                            $progressValue = isset($progress[$index]) ? $progress[$index] : 0;
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
                                            <div class="box<?php echo $index >= 3 ? ' hidden' : ''; ?>">
                                              <h3><?php echo $course;?></h3>
                                              <p class="progress">PROGRESS: <?php echo $progressValue;?>%</p>
                                              <img class="course-image" src="<?php echo $imageSrc; ?>" >
                                              <a href = "<?php echo $link?>" target="_blank" class="continue">Continue</a>
                                            </div>
                                    <?php endif;?>
                                    <?php endforeach;?>
                                <?php else:?>
                                    <div class ="defaultbox">
                                        <img src="../homepage/img/default.png" class="default" >
                                        <p>Student has not enrolled in any courses yet.</p>
                                    </div>
                                    <?php endif; ?>
          </div>
          <button id="expand-courses">Show More</button>
          <button id="collapse-courses" style="display:none;">Show Less</button>
        </div>
      </section>
    </section>
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
document.getElementById('expand-courses').addEventListener('click', function() {
        const hiddenCourses = document.querySelectorAll('.box.hidden');

        hiddenCourses.forEach(course => {
          course.style.maxHeight = 'none'; 
          course.classList.remove('hidden');
        });

        document.getElementById('expand-courses').style.display = 'none';
        document.getElementById('collapse-courses').style.display = 'block';
    });

    document.getElementById('collapse-courses').addEventListener('click', function() {
        const courses = document.querySelectorAll('.box');

        courses.forEach((course, index) => {
            if (index >= 3) {
              course.style.maxHeight = '0'; 
            course.classList.add('hidden'); 
            }
        });

        document.getElementById('collapse-courses').style.display = 'none';
        document.getElementById('expand-courses').style.display = 'block';
    });
    </script>

    <style>
       /* Google Font Import - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

:root{
    /* ===== Colors ===== */
    --body-color: #E4E9F7;
    --sidebar-color: #FFF;
    --primary-color: #695CFE;
    --primary-color-light: #F6F5FF;
    --toggle-color: #DDD;
    --text-color: #707070;

    /* ====== Transition ====== */
    --tran-03: all 0.2s ease;
    --tran-03: all 0.3s ease;
    --tran-04: all 0.3s ease;
    --tran-05: all 0.3s ease;
}

body{
    min-height: 100vh;
    background-color: var(--body-color);
    transition: var(--tran-05);
}

::selection{
    background-color: var(--primary-color);
    color: #fff;
}

body.dark{
    --body-color: #18191a;
    --sidebar-color: #242526;
    --primary-color: #3a3b3c;
    --primary-color-light: #3a3b3c;
    --toggle-color: #fff;
    --text-color: #ccc;
}

/* ===== Sidebar ===== */
 .sidebar{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background: var(--sidebar-color);
    transition: var(--tran-05);
    z-index: 100;  
}
.sidebar.close{
    width: 88px;
}

/* ===== Reusable code - Here ===== */
.sidebar li{
    height: 50px;
    list-style: none;
    display: flex;
    align-items: center;
    margin-top: 10px;
}

.sidebar header .image,
.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
}

.sidebar .icon{
    min-width: 60px;
    border-radius: 6px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.sidebar .text,
.sidebar .icon{
    color: var(--text-color);
    transition: var(--tran-03);
}

.sidebar .text{
    font-size: 17px;
    font-weight: 500;
    white-space: nowrap;
    opacity: 1;
}
.sidebar.close .text{
    opacity: 0;
}
/* =========================== */

.sidebar header{
    position: relative;
}

.sidebar header .image-text{
    display: flex;
    align-items: center;
}
.sidebar header .logo-text{
    display: flex;
    flex-direction: column;
}
header .image-text .name {
    margin-top: 2px;
    font-size: 18px;
    font-weight: 600;
}

header .image-text .profession{
    font-size: 16px;
    margin-top: -2px;
    display: block;
}

.sidebar header .image{
    display: flex;
    align-items: center;
    justify-content: center;
}

.sidebar header .image img{
    width: 40px;
    border-radius: 6px;
}

.sidebar header .toggle{
    position: absolute;
    top: 50%;
    right: -25px;
    transform: translateY(-50%) rotate(180deg);
    height: 25px;
    width: 25px;
    background-color: var(--primary-color);
    color: var(--sidebar-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    cursor: pointer;
    transition: var(--tran-05);
}

body.dark .sidebar header .toggle{
    color: var(--text-color);
}

.sidebar.close .toggle{
    transform: translateY(-50%) rotate(0deg);
}

.sidebar .menu{
    margin-top: 40px;
}

.sidebar li.search-box{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    cursor: pointer;
    transition: var(--tran-05);
}

.sidebar li.search-box input{
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    background-color: var(--primary-color-light);
    color: var(--text-color);
    border-radius: 6px;
    font-size: 17px;
    font-weight: 500;
    transition: var(--tran-05);
}
.sidebar li a{
    list-style: none;
    height: 100%;
    background-color: transparent;
    display: flex;
    align-items: center;
    height: 100%;
    width: 100%;
    border-radius: 6px;
    text-decoration: none;
    transition: var(--tran-03);
}

.sidebar li a:hover{
    background-color: var(--primary-color);
}
.sidebar li a:hover .icon,
.sidebar li a:hover .text{
    color: var(--sidebar-color);
}
body.dark .sidebar li a:hover .icon,
body.dark .sidebar li a:hover .text{
    color: var(--text-color);
}

.sidebar .menu-bar{
    height: calc(100% - 55px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow-y: scroll;
}
.menu-bar::-webkit-scrollbar{
    display: none;
}
.sidebar .menu-bar .mode{
    border-radius: 6px;
    background-color: var(--primary-color-light);
    position: relative;
    transition: var(--tran-05);
}

.menu-bar .mode .sun-moon{
    height: 50px;
    width: 60px;
}

.mode .sun-moon i{
    position: absolute;
}
.mode .sun-moon i.sun{
    opacity: 0;
}
body.dark .mode .sun-moon i.sun{
    opacity: 1;
}
body.dark .mode .sun-moon i.moon{
    opacity: 0;
}

.menu-bar .bottom-content .toggle-switch{
    position: absolute;
    right: 0;
    height: 100%;
    min-width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    cursor: pointer;
}
.toggle-switch .switch{
    position: relative;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: var(--toggle-color);
    transition: var(--tran-05);
}

.switch::before{
    content: '';
    position: absolute;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    background-color: var(--sidebar-color);
    transition: var(--tran-04);
}

body.dark .switch::before{
    left: 20px;
}

.home{
    position: absolute;
    top: 0;
    top: 0;
    left: 250px;
    height: 100vh;
    width: calc(100% - 250px);
    background-color: var(--body-color);
    transition: var(--tran-05);
}
.home .text{
    font-size: 30px;
    font-weight: 500;
    color: var(--text-color);
    padding: 12px 60px;
}

.sidebar.close ~ .home{
    left: 78px;
    height: 100vh;
    width: calc(100% - 78px);
}
body.dark .home .text{
    color: var(--text-color);
} 
.nav-link {
  height: 50px;
  list-style: none;
  display: flex;
  align-items: center;
  margin-top: 10px;
}
.nav-link .icon {
  min-width: 60px;
  border-radius: 6px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
}
.nav-link .text {
  font-size: 17px;
  font-weight: 500;
  white-space: nowrap;
  color: var(--text-color);
  transition: var(--tran-03);
}
.nav-link:hover {
  background-color: var(--primary-color); 
  cursor: pointer;
  color: var(--sidebar-color); 
}
.nav-link:hover .text,
.nav-link:hover .icon {
  color: var(--sidebar-color); 
}
.nav-link form {
  display: inline-block; 
  padding: 0;
  border: none;
  background-color: transparent;
}
.nav-link form input[type="submit"] {
  padding: 0 5px; 
  border: none;
  background-color: transparent;
  color: var(--text-color);
  text-decoration: none; 
  cursor: pointer; 
}



/* Main Section */
.main{
  position: relative;
  padding: 20px;
  width: 100%;
}
.main-top{
  display: flex;
  width: 100%;
}
.main-top i{
  position: absolute;
  right: 0;
  margin: 10px 30px;
  color: rgb(110, 109, 109);
  cursor: pointer;
}
.main-skills{
  display: flex;
  margin-top: 20px;
}
.main-skills .card{
  width: 25%;
  margin: 10px;
  background: #fff;
  text-align: center;
  border-radius: 20px;
  padding: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
.main-skills .card h3{
  margin: 10px;
  text-transform: capitalize;
}
.main-skills .card p{
  font-size: 12px;
}
.main-skills .card button{
  background: orangered;
  color: #fff;
  padding: 7px 15px;
  border-radius: 10px;
  margin-top: 15px;
  cursor: pointer;
}
.main-skills .card button:hover{
  background: rgba(223, 70, 15, 0.856);
}
.main-skills .card i{
  font-size: 22px;
  padding: 10px;
}
/* Courses */
.main-course{
  margin-top:20px;
  text-transform: capitalize;
}
.course-box{
  width: 100%;
  height: auto;
  padding: 10px 10px 30px 10px;
  margin-top: 10px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
  position: relative;
}
.course-box ul{
  list-style: none;
  display: flex;
}
.course-box ul li{
  margin: 10px;
  color: gray;
  cursor: pointer;
}
.course-box ul .active{
  color: #000;
  border-bottom: 1px solid #000;
}
.course-box .course{
  display: flex;
  flex-wrap: wrap;
}
.box{
  position: relative;
  left: 75px;
  width: 30%;
  padding: 5px;
  margin: 10px;
  margin-bottom: 30px;
  border-radius: 10px;
  background: rgb(235, 233, 233);
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.hidden {
    max-height: 0;
    opacity: 0;
    overflow: hidden;
}
.box p{
  font-size: 12px;
  margin-top: 5px;
}
.box button{
  background: #000;
  color: #fff;
  padding: 7px 10px;
  border-radius: 10px;
  margin-top: 3rem;
  cursor: pointer;
}
.box button:hover{
  background: rgba(0, 0, 0, 0.842);
}
.box i{
  font-size: 7rem;
  float: right;
  margin: -20px 20px 20px 0;
}
.default{
  width: 130px;
  height: auto;
  position: relative;
}
.defaultbox{
  width: 300px;
  height: 200px;;
  padding: 10px;
  margin: 10px;
  border-radius: 10px;
  background: rgb(235, 233, 233);
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
  text-align: center;
  position: relative;
  left: 500px;
}
.course-image {
        position: relative;
        width: 140px;
        height: auto;
        margin-right: 10px; 
        float: left;
        display: block;
        left: 6px;
    }
.continue{
  text-decoration: none;
  background: black;
  border-radius: 5px;
  color: white;
  padding: 5px;
  position: relative;

  top: 50px;
  left: 50px;
}
.progress{
  font-weight: bold;
  position: relative;
  left: 200px;
}
#expand-courses,
#collapse-courses {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

#expand-courses:hover,
#collapse-courses:hover {
    background-color: #0056b3;
}

    </style>

</body>
</html>