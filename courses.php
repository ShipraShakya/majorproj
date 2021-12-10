<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Coaching</title>
    <!-- cdn link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/courses.css">

    <!-- cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>


   <?php
            if($_SESSION['login_user'])
            {
                ?>
<header class="header">

<a href="#" class="logo">
    <img src="images/logo.jpg" alt="">
</a>

<nav class="navbar">
    <a href="index.php#home">home</a>
    <a href="index.php#about">about</a>
    <a href="index.php#menu">menu</a>
    <a href="index.php#review">review</a>
    <a href="index.php#contact">contact</a>
</nav>
<div class="icons">
    <div class="fas fa-search" id="search-btn"></div>
    <div class="fas fa-bars" id="menu-btn"></div>
    <a href="logout.php"><input type="submit" value="Logout" class="login-btn" ></a>  
</div> 
        

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
    </header>    
                
                <?php
            }
            else{
                ?><header class="header">

                <a href="#" class="logo">
                    <img src="images/logo.jpg" alt="">
                </a>
                
                <nav class="navbar">
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#menu">menu</a>
                    <a href="#review">review</a>
                    <a href="#contact">contact</a>
                </nav>
                <div class="icons">
                    <div class="fas fa-search" id="search-btn"></div>
                    <div class="fas fa-bars" id="menu-btn"></div>
                    <a href="login.php"><input type="submit" value="Login" class="login-btn" ></a>  
                    </div> 
                        
                
                        <div class="search-form">
                            <input type="search" id="search-box" placeholder="search here...">
                            <label for="search-box" class="fas fa-search"></label>
                        </div>
                    </header>    
                <?php
            }
            ?>
        

    <!-- header section ends -->


    <!-- header section ends -->
    <!-- new body -->

    <div class="section" id="c1" style="margin-top: -3%;">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1 data-aos="fade-left">Advanced Python</h1>
                </div>
                <div class="content">
                    <h3 data-aos="fade-right">Learn Python like a Professional Start from the basics and go all the way to creating your own applications and games</h3>
                    <p style="color: rgb(172, 0, 0); font-size: 24px;" data-aos="fade-down"> What Will You Learn
                        <ul style="font-size: 13px;" data-aos="fade-down">
                            <li>Install Python and write your first program.</li>
                            <li>Describe the basics of the Python programming language.</li>
                            <li>How to inspect and understand APIs and third party libraries to be used with Python 3. </li>
                            <li>How to apply the Python imaging library (pillow) to open, view, and manipulate images,<br> including cropping, resizing, recoloring, and overlaying text </li>
                            <li>How to apply the python tesseract (py-tesseract) library with Python 3 in order to detect <br> text in images through optical character recognition (OCR). </li>
                            <li>How to apply the open source computer vision library (opencv) to detect faces in images, <br> & how to crop and manipulate these faces into contact sheets</li>
                        </ul>
                    </p>
                    <div class="button">
                        <a href="booking.php#book">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="image-section" data-aos="fade-left">
                <img src="images/pic1 (1).jpg">
            </div>
        </div>
    </div>

    <!-- new body ends -->

    <!-- new body -->

    <div class="section" id="c2">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1 data-aos="fade-left">Microsoft Azure</h1>
                </div>
                <div class="content">
                    <h3 data-aos="fade-right">Grow your skills to build and manage applications in the cloud, on-premises, and at the edge.</h3> 
                    <p style="color: rgb(172, 0, 0); font-size: 24px;" data-aos="fade-down">
                        What Will You Learn
                        <ul style="font-size: 13px;" data-aos="fade-down">
                        <li>Introduction to Microsoft Azure Cloud Services.</li>
                        <li>Microsoft Azure Management Tools and Security Solutions.</li>
                        <li>Microsoft Azure Services and Lifecycles.</li>
                        <li>Mini Project</li>
                        <li>Data Integration with Microsoft Azure Data Factory. </li>
                        <li>Microsoft Azure Architect Technologies: AZ:303.</li>
                        <li>Microsoft Azure Architect Design: AZ:304.</li>
                        <li>Create a Cosmos DB Account, Databases and Containers</li>
                        <li>Explore Azure Synapse Studio</li>
                        <li>Final work</li>
                    </ul></p>
                    <div class="button">
                        <a href="booking.php#book">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="image-section" data-aos="fade-left">
                <img src="images/pic2.jpg">
            </div>
        </div>
    </div>

    <!-- new body ends -->


    <!-- new body -->

    <div class="section" id="c3">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1 data-aos="fade-left">Game development</h1>
                </div>
                <div class="content">
                    <h3 data-aos="fade-right">Learn Unity in C# & Code Your First Seven 2D Video Games for Web, Mac & PC. The Tutorials Cover Tilemap.</h3>
                    <p style="color: rgb(172, 0, 0); font-size: 24px;" data-aos="fade-down">
                        What Will You Learn
                        <ul style="font-size: 13px;" data-aos="fade-down">
                        <li>Introduction to C# Programming and Unity.</li>
                        <li>More C# Programming and Unity.</li>
                        <li>Dynamic Arrays and Algorithm Analysis</li>
                        <li>Linked Lists and Graphs</li>
                        <li>Project 1</li>
                        <li>Design Patterns.</li>
                        <li>Exceptions and File IO</li>
                        <li>Project 2</li>
                        <li>Abstraction and Console App Classes</li>
                        <li>Methods and Unity Classes</li>
                        <li>Final Project</li>
                    </ul></p>
                    <div class="button">
                        <a href="booking.php#book">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="image-section" data-aos="fade-left">
                <img src="images/pic3.jpg">
            </div>
        </div>
    </div>

    <!-- new body ends -->


    <!-- new body -->

    <div class="section" id="c4">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1 data-aos="fade-left">Web Development</h1>
                </div>
                <div class="content">
                    <h3 data-aos="fade-right">Become a full-stack web developer with just one course. Learn MERN</h3>
                    <p style="color: rgb(172, 0, 0); font-size: 24px;" data-aos="fade-down">
                        What Will You Learn
                        <ul style="font-size: 13px;" data-aos="fade-down">
                        <li>Introduction to HTML5.</li>
                        <li>Introduction to CSS3.</li>
                        <li>Interactivity with JavaScript.</li>
                        <li>Advanced Styling with Responsive Design.</li>
                        <li>Project 1</li>
                        <li>Web Application Development with JavaScript and MongoDB.</li>
                        <li>Server-side Development with NodeJS, Express and MongoDB.</li>
                        <li>Project 2</li>
                        <li>Full Website using WordPress.</li>
                        <li>Final Project</li>
                    </ul>
                    </p>
                    <div class="button">
                        <a href="booking.php#book">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="image-section" data-aos="fade-left">
                <img src="images/pic4.jpg">
            </div>
        </div>
    </div>

    <!-- new body ends -->


    <!-- new body -->

    <div class="section" id="c5">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1 data-aos="fade-left">Interview Preparation</h1>
                </div>
                <div class="content">
                    <h3 data-aos="fade-right">The Softer Skills-Crush your next coding interview by mastering the much needed soft skills first!</h3> 
                    <p style="color: rgb(172, 0, 0); font-size: 24px;" data-aos="fade-down">
                        What Will You Learn
                        <ul style="font-size: 13px;" data-aos="fade-down">
                        <li>Algorithmic Toolbox.</li>
                        <li>Data Structures.</li>
                        <li>Algorithms on Graphs & strings.</li>
                        <li>Advanced Algorithms and Complexity</li>
                        <li>200+ interview problems with video explanation.</li>
                        <li>Workshops for building your resume and Linkedin/Github profiles</li>
                        <li>Curated interview problems</li>
                        <li>Mock test series.</li>
                    </ul>
                    </p>
                    <div class="button">
                        <a href="booking.php#book">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="image-section" data-aos="fade-left">
                <img src="images/pic5.jpg">
            </div>
        </div>
    </div>

    <!-- new body ends -->



    <!-- new body -->

    <div class="section" id="c6">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1 data-aos="fade-left">Data Science</h1>
                </div>
                <div class="content">
                    <h3 data-aos="fade-right">Learn how to source, manipulate and visualise data using Python and its libraries.</h3>
                    <p style="color: rgb(172, 0, 0); font-size: 24px;" data-aos="fade-down">
                        What Will You Learn
                        <ul style="font-size: 13px;" data-aos="fade-down">
                        <li>Programming Basics.</li>
                        <li>Data Manipulation.</li>
                        <li>Structured Query Language [SQL].</li>
                        <li>Implement Machine Learning Algorithms</li>
                        <li>Application Programming Interface[API].</li>
                        <li>Web Scraping.</li>
                        <li>Workshops for building your resume and Linkedin/Github profiles.</li>
                        <li>Data Visualisation.</li>
                        <li>Statistics.</li>
                    </ul>
                    </p>
                    <div class="button">
                        <a href="booking.php#book">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="image-section" data-aos="fade-left">
                <img src="images/pic6.jpg">
            </div>
        </div>
    </div>

    <!-- new body ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="index.php#">home</a>
            <a href="index.php#about">about</a>
            <a href="index.php#menu">menu</a>
            <a href="index.php#review">review</a>
            <a href="index.php#contact">contact</a>

        </div>

        <div class="credit">created by <span>a web designer</span> | all rights reserved</div>

    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 150,
            delay: 300
        });
    </script>

</body>

</html>