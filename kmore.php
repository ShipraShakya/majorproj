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

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
   <!-- header section starts  -->

    
            
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
                    <a href="index.php#home">home</a>
                    <a href="index.php#about">about</a>
                    <a href="index.php#menu">menu</a>
                    <a href="index.php#review">review</a>
                    <a href="index.php#contact">contact</a>
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


    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Easiest way to launch your own online academy</h3>
            <p>Enjoy hassle-free online teaching with a robust, lightweight interface, World best teachers, 10 years of
                experience.</p>
            <a href="bookinh.php#book" class="btn">Book now</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about" data-aos="fade-left">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="images/pic-main1.jpg" alt="">
            </div>

            <div class="content">
                <h3>why CsChampion?</h3>
                <p>- Self-Paced Learning</p>
                <p>- Lower Cost</p>
                <p>- Comfort</p>
                <p>- Flexible Schedule</p>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu" >

        <h1 class="heading" data-aos="fade-up"> our <span>menu</span> </h1>

        <div class="box-container">

            <div class="box" data-aos="fade-right">
                <img src="images/pic1 (1).jpg" alt="">
                <h3 >Advanced Python</h3>
                <a href="courses.php#c1" class="btn">Read More</a>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="images/pic2.jpg" alt="">
                <h3 >Microsoft Azure</h3>
                <a href="courses.php#c2" class="btn">Read More</a>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="images/pic3.jpg" alt="">
                <h3 >Game development</h3>
                <a href="courses.php#c3" class="btn">Read More</a>
            </div>

            <div class="box" data-aos="fade-right">
                <img src="images/pic4.jpg" alt="">
                <h3 >Web development</h3>
                <a href="courses.php#c4" class="btn">Read More</a>
            </div>

            <div class="box" data-aos="fade-up">
                <img src="images/pic5.jpg" alt="">
                <h3 >Interview preparation</h3>
                <a href="courses.php#c5" class="btn">Read More</a>
            </div>

            <div class="box" data-aos="fade-left">
                <img src="images/pic6.jpg" alt="">
                <h3>Cloud Architect</h3>
                <a href="courses.hphp#c6" class="btn">Read More</a>
            </div>

        </div>

    </section>

    <!-- menu section ends -->

    <!-- know more -->
    <section data-aos="fade-left">

        <div class="know-more">

            <h2 id="k1">Self-Paced Learning</h2>
            <p>Students can prepare a learning schedule that matches their learning speed and slowly start accomplishing
                the targets set. On the other hand, in conventional coaching classes, all students must maintain a
                similar pace as that of the faculty. Furthermore, in conventional setting, studying is the priority and
                students must follow the schedule maintained by the faculty. Any break in the rhythm with the faculty or
                other students can cost big.</p>

            <h2 id="k2">Lower Cost</h2>
            <p>There is no denying the fact that conventional campus coaching is expensive than online coaching. Not
                only expensive in terms of course fees but also the expense that goes into commuting. The best part
                about signing up for online entrance coaching is that students can study from wherever they want.
                Furthermore, those hailing from remote areas can particularly get benefited by opting for online
                coaching. Plus, they won’t have to leave the comfort of their home, deal with homesickness and other
                drawbacks that come with shifting to another city.</p>

            <h2 id="k3">Comfort</h2>
            <p>Many things accompany when one leaves their home and moves to another city to pursue their medical or
                engineering dream. Being away from home diverts attention, depreciates health and may even entice the
                students to indulge in leisure activities. With online coaching, these distractions are completely at
                bay. Not only can students study from the comfort of their home in a healthy environment but they can
                also seek mental support from their parents in times of need.</p>

            <h2 id="k4">Flexible Schedule</h2>
            <p>There are those who find it easy to study in the morning, then there are those who are better at
                concentrating when the world is sleeping. Conventional coaching centres have specific business hours and
                no matter whether a student is comfortable studying during the day or night, they must attend the
                classes at the time specified by the coaching centre. With online coaching, students can have flexible
                time for learning. They can devise a schedule that suits their sleep pattern and work out ways to
                complete the syllabus well in time according to their learning pace. </p>

            <h2 id="k5">Ample Resources</h2>
            <p>Though coaching institutes offer study material, the students are required to take down notes while the
                faculty is teaching. They must also take down all the notes exactly like they are taught as most of the
                times topics are not repeated. On the other hand, in online coaching one can watch the video lectures
                repeatedly till their doubt exists. The same goes for other study materials like eBooks. This makes
                practice and learning easier in online mode when compared to conventional coaching.</p>

            <h2 id="k6">New Technical Skills</h2>
            <p>Your online degree also equates to strong technical skills, a definite plus for any job seeker. As part
                of your coursework, you will likely need to utilize digital learning materials, get familiar with new
                tools and software, and troubleshoot common issues. After a program’s worth of technical hurdles, big
                and small, an employer could trust that you are versed in common collaboration tools, content management
                systems, and basic troubleshooting.</p>

        </div>
    </section>
    <!-- know more -->

    <!-- review section starts  -->

    <section class="review" id="review" data-aos="fade-right">

        <h1 class="heading"> Learner's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi
                    nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus
                    vel? Nemo.</p>
                <img src="images/pic-1.png" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi
                    nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus
                    vel? Nemo.</p>
                <img src="images/pic-2.png" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi
                    nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus
                    vel? Nemo.</p>
                <img src="images/pic-3.png" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact" data-aos="fade-left">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy"></iframe>

                <form action="index.php#contact" method="POST">
                    <h3>get in touch</h3>
                    <div class="inputBox">
                        <span class="fas fa-user"></span>
                        <input type="text" placeholder="name" name="username">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-envelope"></span>
                        <input type="email" placeholder="email" name="email">
                    </div>
                    <div class="inputBox">
                        <span class="fas fa-phone"></span>
                        <input type="number" placeholder="number" name="number">
                    </div>
                    <input type="submit" value="contact now" class="btn">
                </form>

        </div>

    </section>

    <!-- contact section ends -->
<!-- contact php -->



<!-- contact php -->
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
            <a href="#">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>

        </div>

        <div class="credit">created by <span>a web designer</span> | all rights reserved</div>

    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>