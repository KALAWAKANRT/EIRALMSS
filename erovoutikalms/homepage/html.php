<?php require_once "../controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EIRA | HTML</title>
    <link rel="icon" type="images/x-icon" href="img/html.png" />
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
            <img src="img/html.png" alt="img">
                <nav class="nav d-block list-unstyled border-bottom w-75 p-2" id="tabContent">
                        <li class="nav-item">
                            <a href="#" onclick="showTab('basics')">HTML Basics</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" onclick="showTab('semantic')">Semantic HTML</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" onclick="showTab('fandv')">Forms and Validations</a>                    
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </aside>

    <section>
        <div class="tab-content">
            <!--HTML BASICS-->
                <div class="lessons active" id="basics">
                    <h1>HTML Basics</h1>
                        <p>
                            HTML <code>(HyperText Markup Language)</code> is a markup language that tells web browsers how to structure the web pages you 
                            visit. It can be as complicated or as simple as the web developer wants it to be. HTML consists of a series of <code>elements
                            </code>, which you use to enclose, wrap, or mark up different parts of content to make it appear or act in a certain way. 
                            The enclosing <code>tags</code> can make content into a hyperlink to connect to another page, italicize words, and so on.
                        </p>
                    <h3 class="text-white bg-primary p-2">Elements</h3>
                        <p>The HTML <b>element</b> is everything from the start tag to the end tag:</p>
                            <img src="img/html_document1.jpg" alt="img">
                        <p class="p-3">Examples of some HTML elements:</p>
                            <img src="img/html_document2.jpg" alt="img">
                    <h3 class="mt-4">Anatomy of an HTML element</h3>
                        <img src="img/anatomy.png" alt="img"/>
                    <h5>The anatomy of our element is:</h5>
                        <ul>
                            <li>
                                <p><span class="font-weight-bold">The opening tag:</span>
                                    This consists of the name of the element (in this example, p for paragraph), wrapped in opening and closing angle brackets. 
                                    This opening tag marks where the element begins or starts to take effect. In this example, it precedes the start of the 
                                    paragraph text.
                                </p>
                            </li>
                            <li>
                                <p><span class="font-weight-bold">The content:</span>
                                    This is the content of the element. In this example, it is the paragraph text.
                                </p>
                            </li>
                            <li>
                                <p><span class="font-weight-bold">The closing tag:</span>
                                    This is the same as the opening tag, except that it includes a forward slash before the element name. This marks where the 
                                    element ends. Failing to include a closing tag is a common beginner error that can produce peculiar results.
                                </p>
                            </li>
                        </ul>
                            <p>The element is the opening tag, followed by content, followed by the closing tag.</p>
                    <h3>Anatomy of an HTML document</h3>
                        <p>Individual HTML elements aren't very useful on their own. Next, let's examine how individual elements combine to form an entire HTML page:</p>
                            <img src="img/html_document3.jpg" alt="img"/>
                                <ol class="mt-3">
                                    <li><code>!DOCTYPE html</code>:
                                        The doctype. When HTML was young (1991-1992), doctypes were meant to act as links to a set of rules that the HTML page 
                                        had to follow to be considered good HTML.
                                    </li>
                                    <li><code>html</code>:
                                        The html element. This element wraps all the content on the page. It is sometimes known as the root element.
                                    </li>
                                    <li><code>meta charset="utf-8"</code>:
                                        The meta element. This element represents metadata that cannot be represented by other HTML meta-related elements, 
                                        like <code>base, link, script, style or title</code>. The <code>charset</code> attribute specifies the character 
                                        encoding for your document as UTF-8, which includes most characters from the vast majority of human written languages.
                                        With this setting, the page can now handle any textual content it might contain. There is no reason not to set this, 
                                        and it can help avoid some problems later.
                                    </li>
                                    <li><code>title</code>:
                                        The title element. This sets the title of the page, which is the title that appears in the browser tab the page is 
                                        loaded in. The page title is also used to describe the page when it is bookmarked.
                                    </li>
                                    <li><code>body</code>:
                                        The body element. This contains all the content that displays on the page, including text, images, videos, games, 
                                        playable audio tracks, or whatever else.
                                    </li>
                                </ol>
                    <h3 class="text-white bg-primary p-2">Attributes</h3>
                        <p>Elements can also have attributes. Attributes look like this:</p>
                            <img src="img/attributes.png" alt="img" class="w-75 mb-3">
                                <p>Attributes contain extra information about the element that won't appear in the content. In this example,<br> 
                                    the <code>class</code> attribute is an identifying name used to target the 
                                    element with style information.
                                </p>
                                    <h5>An attribute should have:</h5>
                                        <ul>
                                            <li>
                                                A space between it and the element name. (For an element with more than one attribute, 
                                                the attributes should be separated by spaces too.)
                                            </li>
                                            <li>
                                                The attribute name, followed by an equal sign.
                                            </li>
                                            <li>
                                                An attribute value, wrapped with opening and closing quote marks.
                                            </li>
                                        </ul>
                                <button class="quizbutton" onclick="document.getElementById('quiz').submit();">Take the Quiz</button>
                                <form method="POST" autocomplete="off" id="quiz" style="display:none;">
                                    <input type="hidden" name="quizstart">
                                    <input type="hidden" name="course" value="HTML">
                                    <input type="hidden" name="quiz" value="quiz1">
                                </form>
                </div>

            <!--SEMANTIC HTML-->
                <div class="lessons" id="semantic">
                    <h1>Semantic HTML</h1>
                        <p>
                            Semantic element clearly describes its meaning to both the browser and the developer. In HTML, semantic element are the type of 
                            elements that can be used to define different parts of a web page such as <code>form, table, article, header, footer</code> etc.
                        </p>
                    <h3 class="text-white bg-primary p-2">Header</h3>
                        <p>
                            Used to mark up the top section of a web page, which typically includes the main title or logo, navigation links, and other 
                            elements that are common to every page on the site. By using the <code>header</code> tag, you can create a clear separation 
                            between the header and the main content of your page, making it easier for users to understand and navigate your website.
                        </p>
                        <img src="img/html_document4.jpg" alt="img">
                    <h3 class="text-white bg-primary p-2 mt-4">Navigation</h3>
                        <p>
                            Used to mark up a section of a web page that contains navigation links. By using the <code>nav</code> tag, you can indicate to 
                            both users and search engines that this section of your website is specifically designed for navigation.
                        </p>
                        <img src="img/html_document5.jpg" alt="img">
                    <h3 class="text-white bg-primary p-2 mt-4">Main</h3>
                        <p>
                            Used to mark up the main content area of a web page. By using the <code>main</code> tag, you can make it clear to both users 
                            and search engines which part of your page contains the main content.
                        </p>
                        <img src="img/html_document6.jpg" alt="img">
                    <h3 class="text-white bg-primary p-2 mt-4">Article</h3>
                        <p>
                            Represent a standalone piece of content, such as a blog post, news article, or product review. The content within the 
                            <code>article</code> tag should be self-contained and meaningful, and can include headings, paragraphs, images, and other 
                            types of content.
                        </p>
                        <img src="img/html_document7.jpg" alt="img">
                    <h3 class="text-white bg-primary p-2 mt-4">Section</h3>
                        <p>
                            Mark up sections of a web page that are thematically grouped together. This might include things like chapters or sections 
                            of a long article, or different parts of a product page.
                        </p>
                        <img src="img/html_document8.jpg" alt="img">
                    <h3 class="text-white bg-primary p-2 mt-4">Footer</h3>
                        <p>
                            Used to mark up the bottom section of a web page, which might include things like copyright information, contact details, or 
                            links to social media profiles.
                        </p>
                        <img src="img/html_document9.jpg" alt="img">
                    <h3 class="text-white bg-primary p-2 mt-4">Details & Summary</h3>
                        <p>
                            Used to mark up a collapsible section of content; The <code>summary</code>tag is used to mark up the title of the section, 
                            and the <code>details</code> tag is used to mark up the content itself.
                        </p>
                        <img src="img/html_document10.jpg" alt="img"><br>
                        <button class="quizbutton" onclick="document.getElementById('quiz2').submit();">Take the Quiz 2</button>
                                <form method="POST" autocomplete="off" id="quiz2" style="display:none;">
                                    <input type="hidden" name="quizstart">
                                    <input type="hidden" name="course" value="HTML">
                                    <input type="hidden" name="quiz" value="quiz2">
                                </form>
                </div>

            <!--FORMS & VALIDATIONS-->
                <div class="lessons" id="fandv">
                    <h1>Forms and Validations</h1>
                        <p>
                            Before submitting data to the server, it is important to ensure all required form controls are filled out, in the correct format. 
                            This is called client-side form validation, and helps ensure data submitted matches the requirements set forth in the various form 
                            controls.
                        </p>
                    <h3 class="text-white bg-primary p-2 mt-4">Form element</h3>
                        <p>
                            The HTML <code>form</code> element is used to create an HTML form for user input, it is a container for different types of input 
                            elements, such as: text fields, checkboxes, radio buttons, submit buttons, etc.<br>

                            A <b>form control</b> is an element that enables user interaction and data entry or selection: an <code>input, select, 
                            textarea</code> or <code>button</code>.<br>

                            Sometimes <b>form field</b> is used to refer to form controls, in particular elements for text entry: <code>input</code> and <code>textarea</code>.
                        </p>
                    <h3 class="text-white bg-primary p-2 mt-4">Input element</h3>
                        <p>
                            The HTML <code>input</code> element is the most used form element. An <code>input</code> element can be displayed in many ways, 
                            depending on the type attribute. Here are some examples:
                        </p>
                            <ul class="list-unstyled">
                                <li>
                                    <p><span class="font-weight-bold"><i class="fa-solid fa-chevron-left"></i>input type="text"<i class="fa-solid fa-chevron-right"></i></span>
                                        Displays a single-line text input field
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold"><i class="fa-solid fa-chevron-left"></i>input type="radio"<i class="fa-solid fa-chevron-right"></i></span>
                                        Displays a radio button (for selecting one of many choices)
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold"><i class="fa-solid fa-chevron-left"></i>input type="checkbox"<i class="fa-solid fa-chevron-right"></i></span>
                                        Displays a checkbox (for selecting zero or more of many choices)
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold"><i class="fa-solid fa-chevron-left"></i>input type="submit"<i class="fa-solid fa-chevron-right"></i></span>
                                        Displays a submit button (for submitting the form)
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold"><i class="fa-solid fa-chevron-left"></i>input type="button"<i class="fa-solid fa-chevron-right"></i></span>
                                        Displays a clickable button
                                    </p>
                                </li>
                            </ul>
                    <h3 class="text-white bg-primary p-2 mt-4">Text Fields</h3>
                        <p>
                            The <code><i class="fa-solid fa-chevron-left"></i>input type="text"<i class="fa-solid fa-chevron-right"></i></code> 
                            defines a single-line input field for text input.
                        </p>
                        <img src="img/html_document11.jpg" alt="img">
                    <h3 class="text-white bg-primary p-2 mt-4">Label element</h3>
                        <p>
                            The <code>label</code> tag defines a label for many form elements, useful for screen-reader users, because the screen-reader 
                            will read out loud the label when the user focuses on the input element. Also helps users who have difficulty clicking on 
                            very small regions (such as radio buttons or checkboxes) - because when the user clicks the text within the <code>label</code> 
                            element, it toggles the radio button/checkbox.
                        </p>
                    <h3 class="text-white bg-primary p-2 mt-4">Radio Buttons</h3>
                        <p>
                            The <code><i class="fa-solid fa-chevron-left"></i>input type="radio"<i class="fa-solid fa-chevron-right"></i></code> defines a 
                            radio button, it lets the user select ONE of a limited number of choices.
                        </p>
                        <img src="img/html_document12.jpg" alt="img">
                    <h3 class="text-white bg-primary p-2 mt-4">Checkboxes</h3>
                        <p>
                            The <code><i class="fa-solid fa-chevron-left"></i>input type="checkbox"<i class="fa-solid fa-chevron-right"></i></code> defines a 
                            <b>checkbox</b>, it lets a user select ZERO or MORE options of a limited number of choices.
                        </p>
                        <img src="img/html_document13.jpg" alt="img">
                    <h3 class="text-white bg-primary p-2 mt-4">Submit button</h3>
                        <p>
                            The <code><i class="fa-solid fa-chevron-left"></i>input type="submit"<i class="fa-solid fa-chevron-right"></i></code> defines a 
                            button for submitting the form data to a form-handler. The form-handler is typically a file on the server with a script for 
                            processing input data, and <code>specified</code> in the form's action attribute. 
                        </p>
                        <img src="img/html_document14.jpg" alt="img"><br>
                        <button class="quizbutton" onclick="document.getElementById('quiz3').submit();">Take the Quiz 3</button>
                                <form method="POST" autocomplete="off" id="quiz3" style="display:none;">
                                    <input type="hidden" name="quizstart">
                                    <input type="hidden" name="course" value="HTML">
                                    <input type="hidden" name="quiz" value="quiz3">
                                </form>
                </div>
        </div>
    </section>
</main>


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
