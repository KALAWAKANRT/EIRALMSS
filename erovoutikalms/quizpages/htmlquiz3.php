<?php require_once "../controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EIRA | HTML Quiz 3</title>
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
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question11')">Question 11</a>                    
                        </li>
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question12')">Question 12</a>                    
                        </li>
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question13')">Question 13</a>                    
                        </li>
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question14')">Question 14</a>                    
                        </li>
                        <li class="nav-item">
                            <a href="#"  onclick="showQuestion('question15')">Question 15</a>                    
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
                <p class="question"> A container element for user input in an HTML document.</p>
                <input type="text" name="q1" class="identify"><br><br><br><br>
                <button type="button" onclick="showQuestion('question2')" class="next">Next</button>         
            </div>
            </div>
            <div class="quizzes" id="question2">
            <div class = "quizcontainer">
                <p class="question"> The input type="text" element is used for multi-line text input.</p>
                <input type="radio" name="q2" value="a" class="answer"> True<br><br>
                <input type="radio" name="q2" value="b" class="answer"> False<br><br>
                <button type="button" onclick="showQuestion('question1')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question3')" class="next">Next</button>         
            </div>
            </div>
            <div class="quizzes" id="question3">
            <div class = "quizcontainer">
                <p class="question"> A form control is any element that enables user interaction and data entry or selection.</p>
                <input type="radio" name="q3" value="a" class="answer"> True<br><br>
                <input type="radio" name="q3" value="b" class="answer"> False<br><br>
                <button type="button" onclick="showQuestion('question2')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question4')" class="next">Next</button>       
            </div>
            </div>
            <div class="quizzes" id="question4">
            <div class = "quizcontainer">
                <p class="question"> Which input type is used to create a radio button?</p>
                <input type="radio" name="q4" value="a" class="answer"> input type="checkbox"<br><br>
                <input type="radio" name="q4" value="b" class="answer"> input type="radio"<br><br>
                <input type="radio" name="q4" value="c" class="answer"> input type="text"<br><br>
                <button type="button" onclick="showQuestion('question3')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question5')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question5">
            <div class = "quizcontainer">
                <p class="question"> A form control that allows a user to select one option from a set of choices.</p>
                <input type="text" name="q5" class="identify"> <br><br><br><br>
                <button type="button" onclick="showQuestion('question4')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question6')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question6">
            <div class = "quizcontainer">
                <p class="question"> An element that provides a textual description for form controls, enhancing accessibility.</p>
                <input type="text" name="q6" class="identify"> <br><br><br><br>
                <button type="button" onclick="showQuestion('question5')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question7')" class="next">Next</button>         
            </div>
            </div>
            <div class="quizzes" id="question7">
            <div class = "quizcontainer">
                <p class="question"> What is the purpose of the input type="checkbox" element?</p>
                <input type="radio" name="q7" value="a" class="answer"> To select one of many choices<br><br>
                <input type="radio" name="q7" value="b" class="answer"> To enter a single line of text<br><br>
                <input type="radio" name="q7" value="c" class="answer">  To select zero or more options of a limited number of choices<br><br>
                <button type="button" onclick="showQuestion('question6')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question8')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question8">
            <div class = "quizcontainer">
                <p class="question"> What type of input element would you use to create a button that does not submit form data?</p>
                <input type="radio" name="q8" value="a" class="answer"> input type="button"<br><br>
                <input type="radio" name="q8" value="b" class="answer"> input type="submit"<br><br>
                <input type="radio" name="q8" value="c" class="answer"> input type="text"<br><br>
                <button type="button" onclick="showQuestion('question7')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question9')" class="next">Next</button>        
            </div>
            </div>
            <div class="quizzes" id="question9">
            <div class = "quizcontainer">
                <p class="question"> The label element is used to submit form data to the server.</p>
                <input type="radio" name="q9" value="a" class="answer"> True<br><br>
                <input type="radio" name="q9" value="b" class="answer"> False<br><br>
                <button type="button" onclick="showQuestion('question8')" class="previous">Previous</button>
                <button type="button" onclick="showQuestion('question10')" class="next">Next</button>      
            </div>
            </div>
            <div class="quizzes" id="question10">
            <div class = "quizcontainer">
                <p class="question"> The input type="radio" allows a user to select multiple options from a list.</p>
                <input type="radio" name="q10" value="a" class="answer"> True<br><br>
                <input type="radio" name="q10" value="b" class="answer"> False<br><br>
                <button type="button" onclick="showQuestion('question9')" class="previous">Previous</button> 
                <button type="button" onclick="showQuestion('question11')" class="next">Next</button>    
            </div>
            </div>
            <div class="quizzes" id="question11">
            <div class = "quizcontainer">
                <p class="question"> A form control used to submit form data to the server.</p>
                <input type="text" name="q11" class="identify"><br><br><br><br> 
                <button type="button" onclick="showQuestion('question10')" class="previous">Previous</button> 
                <button type="button" onclick="showQuestion('question12')" class="next">Next</button>    
            </div>
            </div>
            <div class="quizzes" id="question12">
            <div class = "quizcontainer">
                <p class="question"> Which element is beneficial for screen-reader users and helps in toggling radio buttons/checkboxes?</p>
                <input type="radio" name="q12" value="a" class="answer"> Form Element<br><br>
                <input type="radio" name="q12" value="b" class="answer"> Input Element<br><br>
                <input type="radio" name="q12" value="c" class="answer"> Label Element<br><br>
                <button type="button" onclick="showQuestion('question11')" class="previous">Previous</button> 
                <button type="button" onclick="showQuestion('question13')" class="next">Next</button>    
            </div>
            </div>
            <div class="quizzes" id="question13">
            <div class = "quizcontainer">
                <p class="question"> Which form element is used to create an HTML form for user input?</p>
                <input type="radio" name="q13" value="a" class="answer"> Input Element<br><br>
                <input type="radio" name="q13" value="b" class="answer"> Form Element<br><br>
                <input type="radio" name="q13" value="c" class="answer"> Label Element<br><br>
                <button type="button" onclick="showQuestion('question12')" class="previous">Previous</button> 
                <button type="button" onclick="showQuestion('question14')" class="next">Next</button>    
            </div>
            </div>
            <div class="quizzes" id="question14">
            <div class = "quizcontainer">
                <p class="question"> Client-side form validation ensures that all required form controls are filled out in the correct format before submitting data to the server.</p>
                <input type="radio" name="q14" value="a" class="answer"> True<br><br>
                <input type="radio" name="q14" value="b" class="answer"> False<br><br>
                <button type="button" onclick="showQuestion('question13')" class="previous">Previous</button> 
                <button type="button" onclick="showQuestion('question15')" class="next">Next</button>    
            </div>
            </div>
            <div class="quizzes" id="question15">
            <div class = "quizcontainer">
                <p class="question"> A form control that allows the user to enter a single line of text</p>
                <input type="text" name="q15" class="identify"> Answer 1<br><br><br><br>
                <button type="button" onclick="showQuestion('question14')" class="previous">Previous</button> 
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
        <input type="hidden" name="course" value="HTML"> <?php //put your course here at value?>
        <input type="hidden" name="quizresults" id="back">
        <input type="hidden" name="quiz" value="quiz3">
</form>
    </div>
</section>
<script>
        const correctAnswers = { //you can change the correct answers here
        q1: ['Form element', 'form element', 'Form Element', 'form Element','form', 'Form'],
        q2: 'b', //True or False
        q3: 'a', // True or False
        q4: 'b',
        q5: ['Radio button', 'radio button', 'Radio Button', 'radio Button'],
        q6: ['Label Element', 'label element', 'Label element', 'label Element', 'label','Label'],
        q7: 'c',
        q8: 'a',
        q9: 'b', //True or False
        q10: 'b',// True or False
        q11: ['Submit button', 'submit button', 'Submit Button', 'submit Button', 'submit', 'Submit'],
        q12: 'c',
        q13: 'b',
        q14: 'b',
        q15: ['text field', 'Text Field', 'text Field', 'Text field', 'input type="text"']
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