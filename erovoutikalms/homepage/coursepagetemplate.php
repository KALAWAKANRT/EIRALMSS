<?php require_once "../controllerUserData.php";
//This is the template for course pages.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EIRA | TEMPLATE</title>
    <link rel="icon" type="images/x-icon" href="img/default.png" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
        crossorigin="anonymous"
    />
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"
    ></script>

    <script src="https://kit.fontawesome.com/95c10202b4.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href=".scss/bootstrap.scss" />
    <link rel="stylesheet" href="coursepage.css">
</head>
<body>
    <nav>
        <!--NAVIGATION MENU-->
        <div class="container-fluid" style="background-color:#0205a1;">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="index.php" class="navbar-brand">
                        <img src="img/Rectangle 13.png" alt="img" class="h-50 w-75">
                    </a>
                    <div class="collapse navbar-collapse bg-transparent">
                        <div class="navbar-nav ms-auto mx-xl-auto">
                            <a href="index.php" class="nav-item active">Home</a>
                            <a href="index.php" class="nav-item">Training</a>
                            <a href="https://eira.erovoutika.ph/certificate.php" class="nav-item">Certificates</a>
                        </div>
                    </div>
                        <i class="nav-item float-right btn-square py-3 bg-primary rounded-circle fa-solid fa-user" style="width: 60px; height: 60px;" onclick="document.getElementById('dashboard').submit();"></i>
                        <form id="dashboard" method="POST" autocomplete="off" style="display: none;">
                        <input class="text nav-text" type="hidden" name="dashboard" value="dashboard">
                        </form> 
                </nav>     
            </div>
        </div>
    </nav>

<main>
    <aside>
        <div class="container-fluid">
            <div class="sidenav">
            <img src="img/default.png" alt="img">
                <nav class="nav d-block list-unstyled border-bottom w-75 p-2" id="tabContent">
                        <li class="nav-item">
                            <a href="#basics" onclick="showTab('basics')">First Section</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" onclick="showTab('second')">Second Section</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" onclick="showTab('third')">Third Section</a>                    
                        </li>
                    </ul>
                </nav>
               
            </div>
        </div>
    </aside>

    <section>
        <div class="tab-content">
            <!-- First Section Here -->
                <div class="lessons active" id="basics">
                </div>

            <!--Second Section Here-->
                <div class="lessons" id="second">
                </div>

            <!--Third Here-->
                <div class="lessons" id="third">
                </div>
        </div>
    </section>
    <script type="module" src=".js/main.js"></script>
    <script>
       function showTab(lessonId) {
        var lessons = document.querySelectorAll('.lessons');
        lessons.forEach(function(lessons) {
            lessons.classList.remove('active');
        });
        var selectedLesson = document.getElementById(lessonId);
        selectedLesson.classList.add('active');
    }
</script>
</body>
</html>
