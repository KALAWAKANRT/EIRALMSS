<?php require_once "../controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EIRA | HTML Quiz 1</title>
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
                <p class="question"> Question 1. What does HTML stand for?</p>
                <input type="radio" name="q1" value="a" class="answer"> High Tech Marking Language<br><br>
                <input type="radio" name="q1" value="b" class="answer"> HyperText Markup Language<br><br>
                <input type="radio" name="q1" value="c" class="answer"> High Tech Makeup Language<br><br>
                <input type="radio" name="q1" value="d" class="answer"> HyperText Merit Linguistics<br><br>
                <button type="button" onclick="showQuestion('question2')" class="next">Next</button>         
            </div>
            </div>
            <div class="quizzes" id="question2">
            <div class = "quizcontainer">
                <p class="question">  What does an HTML element consist of?</p>
                <input type="radio" name="q2" value="a" class="answer">  Start tag only<br><br>
                <input type="radio" name="q2" value="b" class="answer"> Content only<br><br>
                <input type="radio" name="q2" value="c" class="answer"> Start Tag and Content<br><br>
                <input type="radio" name="q2" value="d" class="answer"> Closing Tag onlybr><br>
                <button type="button" onclick="showQuestion('question1')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question3')" class="next">Next</button>         
            </div>
            </div>
            <div class="quizzes" id="question3">
            <div class = "quizcontainer">
                <p class="question"> Which of the following is not an HTML element?</p>
                <input type="radio" name="q3" value="a" class="answer"> pdf<br><br>
                <input type="radio" name="q3" value="b" class="answer"> p<br><br>
                <input type="radio" name="q3" value="c" class="answer"> title<br><br>
                <input type="radio" name="q3" value="d" class="answer"> img<br><br>  
                <button type="button" onclick="showQuestion('question2')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question4')" class="next">Next</button>       
            </div>
            </div>
            <div class="quizzes" id="question4">
            <div class = "quizcontainer">
                <p class="question"> Which element is used to wrap all the content on an HTML page?</p>
                <input type="radio" name="q4" value="a" class="answer"> doctype<br><br>
                <input type="radio" name="q4" value="b" class="answer"> html<br><br>
                <input type="radio" name="q4" value="c" class="answer"> meta charset<br><br>
                <input type="radio" name="q4" value="d" class="answer"> div<br><br> 
                <button type="button" onclick="showQuestion('question3')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question5')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question5">
            <div class = "quizcontainer">
                <p class="question"> What is the purpose of the closing tag in an HTML element?</p>
                <input type="radio" name="q5" value="a" class="answer"> To mark where the element begins<br><br>
                <input type="radio" name="q5" value="b" class="answer"> To italicize words<br><br>
                <input type="radio" name="q5" value="c" class="answer"> To mark where the element ends<br><br>
                <input type="radio" name="q5" value="d" class="answer"> To include extra information<br><br> 
                <button type="button" onclick="showQuestion('question4')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question6')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question6">
            <div class = "quizcontainer">
                <p class="question"> What does the title element in HTML represent?</p>
                <input type="radio" name="q6" value="a" class="answer"> It sets the title of the page<br><br>
                <input type="radio" name="q6" value="b" class="answer">  It represents metadata<br><br>
                <input type="radio" name="q6" value="c" class="answer"> It contains all the content that displays on the page<br><br>
                <input type="radio" name="q6" value="d" class="answer"> It specifies the character encoding for the document<br><br>
                <button type="button" onclick="showQuestion('question5')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question7')" class="next">Next</button>         
            </div>
            </div>
            <div class="quizzes" id="question7">
            <div class = "quizcontainer">
                <p class="question"> What is the purpose of the meta charset attribute in HTML?</p>
                <input type="radio" name="q7" value="a" class="answer"> To set the title of the page<br><br>
                <input type="radio" name="q7" value="b" class="answer"> To specify the character encoding for the document<br><br>
                <input type="radio" name="q7" value="c" class="answer"> To contain all the content that displays on the page<br><br>
                <input type="radio" name="q7" value="d" class="answer"> To represent metadata<br><br> 
                <button type="button" onclick="showQuestion('question6')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question8')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question8">
            <div class = "quizcontainer">
                <p class="question"> Which of the following is NOT a valid attribute format in HTML?</p>
                <input type="radio" name="q8" value="a" class="answer">  class="example"<br><br>
                <input type="radio" name="q8" value="b" class="answer"> id=example<br><br>
                <input type="radio" name="q8" value="c" class="answer"> src="image.jpg"<br><br>
                <input type="radio" name="q8" value="d" class="answer"> href="styles.css"<br><br> 
                <button type="button" onclick="showQuestion('question7')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question9')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question9">
            <div class = "quizcontainer">
                <p class="question"> What is the purpose of attributes in HTML elements?</p>
                <input type="radio" name="q9" value="a" class="answer"> To specify the character encoding for the document<br><br>
                <input type="radio" name="q9" value="b" class="answer"> To contain all the content that displays on the page<br><br>
                <input type="radio" name="q9" value="c" class="answer"> To include extra information about the element<br><br>
                <input type="radio" name="q9" value="d" class="answer"> To underline the words<br><br>   
                <button type="button" onclick="showQuestion('question8')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question10')" class="next">Next</button>      
            </div>
            </div>
            <div class="quizzes" id="question10">
            <div class = "quizcontainer">
                <p class="question"> What is a common beginner error related to HTML closing tags?</p>
                <input type="radio" name="q10" value="a" class="answer">  Forgetting to include a closing tag<br><br>
                <input type="radio" name="q10" value="b" class="answer"> Including too many closing tags<br><br>
                <input type="radio" name="q10" value="c" class="answer"> Not using angle brackets<br><br>
                <input type="radio" name="q10" value="d" class="answer">  Using incorrect attribute formats<br><br>  
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
        <input type="hidden" name="quiz" value="quiz1">
</form>
    </div>
</section>
<script>
        const correctAnswers = { //you can change the correct answers here
        q1: 'b',
        q2: 'c',
        q3: 'a',
        q4: 'b',
        q5: 'c',
        q6: 'a',
        q7: 'b',
        q8: 'b',
        q9: 'c',
        q10: 'a'
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
            if (userAnswer === correctAnswer) {
                score++;
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