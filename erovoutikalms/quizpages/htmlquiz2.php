<?php require_once "../controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EIRA | HTML Quiz 2</title>
    <link rel="icon" type="images/x-icon" href="../homepage/img/html.png" />
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
    <link rel="stylesheet" href="quizstyle.css">
</head>
<body>
    <nav>
        <!--NAVIGATION MENU-->
        <div class="container-fluid" style="background-color:#0205a1;">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="index.php" class="navbar-brand">
                        <img src="../homepage/img/Rectangle 13.png" alt="img" class="h-50 w-75">
                    </a>
                    <div class="collapse navbar-collapse bg-transparent">
                        <div class="navbar-nav ms-auto mx-xl-auto">
                            <a href="index.html" class="nav-item active">Home</a>
                            <a href="../homepage/index.php" class="nav-item">Training</a>
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
            <img src="../homepage/img/html.png" alt="img">
                <nav class="nav d-block list-unstyled border-bottom w-75 p-2" id="tabContent">
                                <!--Links Part. Remove or add as many as you wish-->
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question1')">Question 1</a>
                        </li>
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question2')">Question 2</a>
                        </li>
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question3')">Question 3</a>                    
                        </li>
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question4')">Question 4</a>                    
                        </li>
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question5')">Question 5</a>                    
                        </li>
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question6')">Question 6</a>                    
                        </li>
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question7')">Question 7</a>                    
                        </li>
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question8')">Question 8</a>                    
                        </li>
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question9')">Question 9</a>                    
                        </li>
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question10')">Question 10</a>                    
                        </li>
                </nav>
               
            </div>
        </div>
    </aside>
    <section>
    <form method="POST" action="" id="quizForm">
        <div class="tab-content"> 
            <!--Questions Part. Remove or add as many as you wish-->
            <div class="quizzes active" id="question1">
            <div class = "quizcontainer">
                <p class="question"> Which HTML element is used to mark up the top section of a web page containing the main title or logo, navigation links, and other common elements?</p>
                <input type="radio" name="q1" value="a" class="answer">   section<br><br>
                <input type="radio" name="q1" value="b" class="answer">  header<br><br>
                <input type="radio" name="q1" value="c" class="answer">  nav<br><br>
                <input type="radio" name="q1" value="d" class="answer">  footer<br><br>
                <button type="button" onclick="showQuestion('question2')" class="next">Next</button>         
            </div>
            </div>
            <div class="quizzes" id="question2">
            <div class = "quizcontainer">
                <p class="question"> What HTML element represents a standalone piece of content, such as a blog post or news</p>
                <input type="radio" name="q2" value="a" class="answer"> article<br><br>
                <input type="radio" name="q2" value="b" class="answer"> main<br><br>
                <input type="radio" name="q2" value="c" class="answer"> section<br><br>
                <input type="radio" name="q2" value="d" class="answer"> div<br><br>
                <button type="button" onclick="showQuestion('question1')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question3')" class="next">Next</button>         
            </div>
            </div>
            <div class="quizzes" id="question3">
            <div class = "quizcontainer">
                <p class="question"> Which HTML tag is used to define the main content area of a web page?</p>
                <input type="radio" name="q3" value="a" class="answer"> main<br><br>
                <input type="radio" name="q3" value="b" class="answer"> article<br><br>
                <input type="radio" name="q3" value="c" class="answer"> section<br><br>
                <input type="radio" name="q3" value="d" class="answer"> div<br><br>  
                <button type="button" onclick="showQuestion('question2')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question4')" class="next">Next</button>       
            </div>
            </div>
            <div class="quizzes" id="question4">
            <div class = "quizcontainer">
                <p class="question"> Which HTML element is used to group thematically related content together?</p>
                <input type="radio" name="q4" value="a" class="answer"> article<br><br>
                <input type="radio" name="q4" value="b" class="answer"> section<br><br>
                <input type="radio" name="q4" value="c" class="answer"> main<br><br>
                <input type="radio" name="q4" value="d" class="answer"> div<br><br> 
                <button type="button" onclick="showQuestion('question3')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question5')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question5">
            <div class = "quizcontainer">
                <p class="question"> What HTML tag is used to mark up a collapsible section of content?</p>
                <input type="radio" name="q5" value="a" class="answer"> collapse<br><br>
                <input type="radio" name="q5" value="b" class="answer"> summary<br><br>
                <input type="radio" name="q5" value="c" class="answer"> details<br><br>
                <input type="radio" name="q5" value="d" class="answer"> expand<br><br> 
                <button type="button" onclick="showQuestion('question4')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question6')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question6">
            <div class = "quizcontainer">
                <p class="question"> Which HTML element is used to mark up the bottom section of a web page containing copyright information, contact details, or social media links?</p>
                <input type="radio" name="q6" value="a" class="answer"> footer<br><br>
                <input type="radio" name="q6" value="b" class="answer"> main<br><br>
                <input type="radio" name="q6" value="c" class="answer"> section<br><br>
                <input type="radio" name="q6" value="d" class="answer"> article<br><br>
                <button type="button" onclick="showQuestion('question5')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question7')" class="next">Next</button>         
            </div>
            </div>
            <div class="quizzes" id="question7">
            <div class = "quizcontainer">
                <p class="question"> What HTML tag is used to represent navigation links on a web page?</p>
                <input type="radio" name="q7" value="a" class="answer"> nav<br><br>
                <input type="radio" name="q7" value="b" class="answer"> header<br><br>
                <input type="radio" name="q7" value="c" class="answer"> footer<br><br>
                <input type="radio" name="q7" value="d" class="answer"> section<br><br> 
                <button type="button" onclick="showQuestion('question6')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question8')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question8">
            <div class = "quizcontainer">
                <p class="question">  Identify the HTML element used to mark up a collapsible section of content, with a title and content.</p>
                <input type="text" name="q8" class="identify"> <br><br><br><br>
                <button type="button" onclick="showQuestion('question7')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question9')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question9">
            <div class = "quizcontainer">
                <p class="question"> Which HTML element represents a section of a web page that contains navigation links?</p>
                <input type="text" name="q9" class="identify"> <br><br><br><br>   
                <button type="button" onclick="showQuestion('question8')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question10')" class="next">Next</button>      
            </div>
            </div>
            <div class="quizzes" id="question10">
            <div class = "quizcontainer">
                <p class="question"> Name the HTML element used to define the top section of a web page containing the main title or logo, navigation links, and other common elements.</p>
                <input type="text" name="q10" class="identify"><br><br><br><br> 
                <button type="button" onclick="showQuestion('question9')" class="previous">Previous</button> 
                <button type="button" onclick="showResults()" class="submitquiz">Submit</button>      
            </div>
            </div>
</div>
</form>
    <div id="results" style="display:none;" class="results">
        <h2 class="end"><span id="end"></span><h2>
        <h2 class="result"> Your Score: <span id="score"></span></h2>
        <button type="button" class="buttonback" onclick="goBack()">Go Back to Course Page</button>
        <form method ="POST" id = "goback" style="display: none;" autocomplete="off">
        <input type="hidden" name="course" value="HTML">
        <input type="hidden" name="quizresults" id="back">
        <input type="hidden" name="quiz" value="quiz2">
</form>
    </div>
</section>
<script>
        const correctAnswers = { //you can change the correct answers here
        q1: 'b',
        q2: 'a',
        q3: 'a',
        q4: 'b',
        q5: 'c',
        q6: 'a',
        q7: 'a',
        q8: ['details and summary', 'Details and Summary', 'details & summary', 'Details & Summary', 'details and Summary', 'Details and summary',
        'details & Summary', 'Details & summary'],
        q9: ['nav', '<nav>'],
        q10: ['header','<header>']
    };
    function showQuestion(questionId) {
        var questions = document.querySelectorAll('.quizzes');
        questions.forEach(function(question) {
            question.classList.remove('active');
        });
        var selectedQuestion = document.getElementById(questionId);
        selectedQuestion.classList.add('active');
    }
    function showResults() {
        const form = document.getElementById('quizForm');
        let score = 0;

        for (const [question, correctAnswer] of Object.entries(correctAnswers)) {
            const userAnswer = form.elements[question].value;
            if (Array.isArray(correctAnswer)) {
            if (correctAnswer.includes(userAnswer)) {
                score++;
            }
        } else {
            if (userAnswer === correctAnswer) {
                score++;
            }
        }
        }
        if (score < 5){
            document.getElementById('end').innerText = 'You failed to pass the quiz';
            document.getElementById('back').value = 'fail';
        }
        else{
            document.getElementById('end').innerText = 'You passed the quiz';
            document.getElementById('back').value = 'pass';
        }
        document.getElementById('score').innerText = score + '/' + Object.keys(correctAnswers).length;
        document.getElementById('results').style.display = 'block';
        document.querySelector('.quizzes').style.display = 'none';
    }
    function goBack(){
            document.getElementById('goback').submit();
    }

</script>
</body>
</html>