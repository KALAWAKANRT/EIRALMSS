<?php require_once "../controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EIRA | QUIZ Template</title>
    <link rel="icon" type="images/x-icon" href="../homepage/img/css.png" />
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
            <img src="../homepage/img/css.png" alt="img">
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
                <p class="question"> What does CSS stand for?</p>
                <input type="text" name="q1" class="identify"><br><br><br><br>
                <button type="button" onclick="showQuestion('question2')" class="next">Next</button>         
            </div>
            </div>
            <div class="quizzes" id="question2">
            <div class = "quizcontainer">
                <p class="question"> Which CSS property is used to change the text color of an element?</p>
                <input type="radio" name="q2" value="a" class="answer"> font-color<br><br>
                <input type="radio" name="q2" value="b" class="answer"> text-color<br><br>
                <input type="radio" name="q2" value="c" class="answer"> color<br><br>
                <button type="button" onclick="showQuestion('question1')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question3')" class="next">Next</button>         
            </div>
            </div>
            <div class="quizzes" id="question3">
            <div class = "quizcontainer">
                <p class="question"> What is the correct syntax to select an element with the id "header"?</p>
                <input type="radio" name="q3" value="a" class="answer"> .header<br><br>
                <input type="radio" name="q3" value="b" class="answer"> #header<br><br>
                <input type="radio" name="q3" value="c" class="answer"> header<br><br>  
                <button type="button" onclick="showQuestion('question2')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question4')" class="next">Next</button>       
            </div>
            </div>
            <div class="quizzes" id="question4">
            <div class = "quizcontainer">
                <p class="question"> Which of the following is a correct CSS declaration?</p>
                <input type="radio" name="q4" value="a" class="answer"> color: blue;<br><br>
                <input type="radio" name="q4" value="b" class="answer"> color = blue<br><br>
                <input type="radio" name="q4" value="c" class="answer"> background-color == blue;<br><br>
                <button type="button" onclick="showQuestion('question3')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question5')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question5">
            <div class = "quizcontainer">
                <p class="question"> How do you apply a style to all HTML elements on a page?</p>
                <input type="radio" name="q5" value="a" class="answer"> .*<br><br>
                <input type="radio" name="q5" value="b" class="answer"> #<br><br>
                <input type="radio" name="q5" value="c" class="answer"> *<br><br>
                <button type="button" onclick="showQuestion('question4')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question6')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question6">
            <div class = "quizcontainer">
                <p class="question"> Where in an HTML document is the correct place to refer to an external stylesheet?</p>
                <input type="radio" name="q6" value="a" class="answer"> In the body section<br><br>
                <input type="radio" name="q6" value="b" class="answer"> In the head section<br><br>
                <input type="radio" name="q6" value="c" class="answer"> At the end of it all<br><br>
                <button type="button" onclick="showQuestion('question5')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question7')" class="next">Next</button>         
            </div>
            </div>
            <div class="quizzes" id="question7">
            <div class = "quizcontainer">
                <p class="question"> Which selector is used to select elements with a specific class?</p>
                <input type="radio" name="q7" value="a" class="answer"> .<br><br>
                <input type="radio" name="q7" value="b" class="answer"> #<br><br>
                <input type="radio" name="q7" value="c" class="answer"> *<br><br>
                <button type="button" onclick="showQuestion('question6')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question8')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question8">
            <div class = "quizcontainer">
                <p class="question"> What method is used to add CSS directly within an HTML element?</p>
                <input type="text" name="q8" class="identify"><br><br><br><br>
                <button type="button" onclick="showQuestion('question7')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question9')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question9">
            <div class = "quizcontainer">
                <p class="question"> What is the correct CSS syntax for making all the text in a paragraph element center-aligned?</p>
                <input type="radio" name="q9" value="a" class="answer"> p {text-align: center;}<br><br>
                <input type="radio" name="q9" value="b" class="answer"> text-align: center;<br><br>
                <input type="radio" name="q9" value="c" class="answer"> p text-align: center;<br><br>
                <button type="button" onclick="showQuestion('question8')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question10')" class="next">Next</button>      
            </div>
            </div>
            <div class="quizzes" id="question10">
            <div class = "quizcontainer">
                <p class="question"> What CSS property is used to change the background color of an element?</p>
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
        <input type="hidden" name="course" value="CSS"> <?php //put your course here at value?>
        <input type="hidden" name="quizresults" id="back">
        <input type="hidden" name="quiz" value="quiz1"> <?php //Change value here based on quiz number. For example
        //quiz1, or quiz2, or quiz3, and so on... ?>
</form>
    </div>
</section>
<script>
        const correctAnswers = { //you can change the correct answers here
        q1: ['Cascading Style Sheets', 'cascading style sheets', 'Cascading style sheets', 'Cascading Style sheets', 'cascading Style Sheets'],
        q2: 'c',
        q3: 'b',
        q4: 'a',
        q5: 'c',
        q6: 'b',
        q7: 'a',
        q8: ['Inline CSS', 'inline CSS', 'Inline Css', 'inline Css', 'inline css', 'Inline css'],
        q9: 'a',
        q10: 'background-color'
        //for identification, you can do q10: ['answer1', 'answer2']. This is mostly because there are many ways a student can answer like "This" or "this"
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
        } //If you want your quiz to have identification, use this way instead and erase the thing below.
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