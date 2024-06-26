<?php require_once "../controllerUserData.php"; //Javascript Course Page?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>EIRA | JavaScript</title>
    <link rel="icon" type="images/x-icon" href="img/javascript.png" />
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
            <img src="img/javascript.png" alt="img">
                <nav class="nav d-block list-unstyled border-bottom w-75 p-2" id="tabContent">
                        <li class="nav-item">
                            <a href="#" onclick="showTab('basics')">JavaScript Basics</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" onclick="showTab('manipulation')">DOM Manipulation</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" onclick="showTab('api')">Fetch API/Ajax</a>                    
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </aside>

    <section>
        <div class="tab-content">
            <!--JAVASCRIPT BASICS-->
                <div class="lessons active" id="basics">
                    <h1>JavaScript Basics</h1>
                        <p>
                            JavaScript is a programming language that adds interactivity to your website. This happens in games, in the behavior of responses 
                            when buttons are pressed or with data entry on forms; with dynamic styling; with animation, etc.<br><br>
                            The programs in this language are called scripts. They can be written right in a web page's HTML and run automatically as the 
                            page loads. Scripts are provided and executed as plain text. They don't need special preparation or compilation to run. <br><br>
                            JavaScript contains a standard library of objects, such as Array, Date, and Math, and a core set of language elements such 
                            as operators, control structures, and statements.
                        </p>
                            <ul>
                                <li>
                                    <p><span class="font-weight-bold">Client-side Javascript</span> 
                                        extends the core language by supplying objects to control a browser and its Document Object Model (DOM). For example, 
                                        client-side extensions allow an application to place elements on an HTML form and respond to user events such as mouse 
                                        clicks, form input, and page navigation.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">Server-side Javascript</span> 
                                        extends the core language by supplying objects relevant to running JavaScript on a server. For example, server-side 
                                        extensions allow an application to communicate with a database, provide continuity of information from one invocation 
                                        to another of the application, or perform file manipulations on a server.
                                    </p>
                                </li>
                            </ul>
                    <h3 class="text-white bg-primary p-2">Data Structures and types</h3>
                        <p>
                            JavaScript borrows most of its syntax from Java, C, and C++, but it has also been influenced by Awk, Perl, and Python. JavaScript 
                            is <code>case-sensitive</code> and uses the <code>Unicode</code> character set.
                        </p>
                            <ul>
                                <li>
                                    <p><span class="font-weight-bold">boolean</span> - 
                                        It have one of two values: true or false
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">null</span> - 
                                        A special keyword denoting a null value. (Because JavaScript is case-sensitive, null is not the same as Null, NULL, 
                                        or any other variant.)
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">undefined</span> - 
                                        A top-level property whose value is not defined.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">integer</span> - 
                                        An integer or floating point number. For example: 42 or 3.14159.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">BigInt</span> - 
                                        An integer with arbitrary precision. For example: 9007199254740992n.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">String</span> - 
                                        A sequence of characters that represent a text value. For example: "Howdy".
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">Symbol</span> - 
                                        A data type whose instances are unique and immutable.
                                    </p>
                                </li>
                            </ul>
                </div>
                
            <!--DOM MANIPULATION-->
                <div class="lessons" id="manipulation">
                    <h1>DOM Manipulation</h1>
                        <p>
                            The Document Object Model (DOM) is a programming interface for HTML (HyperText Markup Language) and XML 
                            (Extensible markup language) documents. It defines the logical structure of documents and the way a document is accessed and 
                            manipulated.<br><br>
                            The Document Object Model (DOM) is essential in web development for several reasons:
                        </p>
                            <ul>
                                <li>
                                    <p><span class="font-weight-bold">Dynamic Web Pages</span>: 
                                        It allows you to create dynamic web pages. It enables the JavaScript to access and manipulate page content, structure, 
                                        and style dynamically which gives interactive and responsive web experiences, such as updating content without 
                                        reloading the entire page or responding to user actions instantly.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">Interactivity</span>: 
                                        With the DOM, you can respond to user actions (like clicks, inputs, or scrolls) and modify the web page accordingly.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">Content Updates</span>: 
                                        When you want to update the content without refreshing the entire page, the DOM enables targeted changes making the 
                                        web applications more efficient and user-friendly.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">Cross-Browser Compatibility</span>: 
                                        Different browsers may render HTML and CSS in different ways. The DOM provides a standardized way to interact with page elements.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">Single-Page Applications</span>: 
                                        Applications built with frameworks such as React or Angular, heavily rely on the DOM for efficient rendering and 
                                        updating of content within a single HTML page without reloading the full page.
                                    </p>
                                </li>
                            </ul>
                    <h3 class="text-white bg-primary p-2">Structure</h3>
                        <p>
                            DOM can be thought of as a Tree or Forest(more than one tree). The term structure model is sometimes used to describe the 
                            tree-like representation of a document.  Each branch of the tree ends in a node, and each node contains objects  Event listeners 
                            can be added to nodes and triggered on an occurrence of a given event. <br><br>
                            One important property of DOM structure models is <code>structural isomorphism</code>: if any two DOM implementations are used to 
                            create a representation of the same document, they will create the same structure model, with precisely the same objects and 
                            relationships.
                        </p>
                    <h3 class="text-white bg-primary p-2">Properties</h3>
                        <div class="container-fluid w-75">
                            <img src="img/javascript_document.jpg" alt="img">
                        </div>
                            <ul class="p-3">
                                <li>
                                    <p><span class="font-weight-bold">Window Object</span> : 
                                        Object of the browser which is always at top of the hierarchy, it is like an API that is used to set and access all 
                                        the properties and methods of the browser.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">Document Object</span> : 
                                        When an HTML document is loaded into a window, it becomes a document object. The 'document' object has various 
                                        properties that refer to other objects which allow access to and modification of the content of the web page. 
                                        If there is a need to access any element in an HTML page, we always start with accessing the 'document' object.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">Form Object</span> : 
                                        It is represented by <code>form</code> tags.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">Link Object</span> : 
                                        It is represented by <code>link</code> tags.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">Anchor Object</span> : 
                                        It is represented by a <code>href</code> tags.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">Form Control Elements</span> : 
                                        Form can have many control elements such as text fields, buttons, radio buttons, checkboxes, etc.
                                    </p>
                                </li>
                            </ul>
                </div>

            <!--FETCH API-->
                <div class="lessons" id="api">
                    <h1>Fetch API / Ajax</h1>
                        <p>
                            The Fetch API provides an interface for fetching resources (including across the network). It is a more powerful and flexible 
                            replacement for <code>XMLHttpRequest</code>.<br><br>
                            Ajax is the technique that lets us send and receive the data asynchronously from the servers e.g. updating the user profile or 
                            asynchronously fetching the list of searched products without reloading the page.
                        </p>
                    <h3 class="text-white bg-primary p-2">Fetch Interfaces</h3>
                        <div class="container-fluid">
                            <ul class="list-unstyled mt-3 w-50">
                                <li>
                                    <p><span class="font-weight-bold">fetch&#40;&#41;</span> -
                                        The fetch() method used to fetch a resource.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">Headers</span> - 
                                        Represents response/request headers, allowing you to query them and take different actions depending on the results.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">Request</span> - 
                                        Represents a resource request.
                                    </p>
                                </li>
                                <li>
                                    <p><span class="font-weight-bold">Response</span> - 
                                        Represents the response to a request.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    <h3 class="text-white bg-primary p-2">Fetch Basic Concepts</h3>
                        <h2>In a nutshell</h2>
                            <p>
                                At the heart of Fetch are the Interface abstractions of HTTP Requests, Responses, and Headers, along with a fetch() 
                                method for initiating asynchronous resource requests. Because the main components of HTTP are abstracted as JavaScript 
                                objects, it is easy for other APIs to make use of such functionality.<br><br>
                                <code>Service Workers</code> is an example of an API that makes heavy use of Fetch.<br><br>
                                Fetch takes the asynchronous nature of such requests one step further. The API is completely Promise-based.
                            </p>
                        <h2>Guard</h2>
                            <p>
                                Guard is a feature of Headers objects, with possible values of immutable, request, request-no-cors, response, or none, 
                                depending on where the header is used. When a new Headers object is created using the Headers() constructor, its guard 
                                is set to none (the default).
                            </p>
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
