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
    <a href="user.php"><div class="fas fa-user" href="" id="user_account"></div></a> 
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

    <section class="home" id="home" data-aos="fade-right">

        <div class="content">
            <h3 data-aos="fade-left">Online classes by best teachers</h3>
            <p data-aos="fade-left">Become the best version of yourself.</p>
            <?php
            if(isset($_SESSION['login_user']))
            {
                ?>
                <a href="booking.php#book"><input type="submit" value="Book Now" class="btn" ></a> 
                <?php
            }
            else{
                ?>
                <a href="login.php"><input type="submit" value=" login to register" class="btn" ></a> 
                <?php
            }
                ?>
             
        </div>

    </section>

    <!-- home section ends -->

    <?php
            if(isset($_SESSION['login_user']))
            {
                ?>
    <!-- register now -->
    <section class="contact" id="book" data-aos="fade-left">
        <h1 class="heading"><span>Register</span> Your<span> Seat</span> Here</h1>
        <div class="row">
            <form action="database/register.php" method="POST">

                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name" name="username" required />
                </div>

                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email" name="email" required />
                </div>

                <div class="inputBox">
                    <span class="fas fa-city"></span>
                    <input type="text" placeholder="Your Full Address" name="address" required />
                </div>

                <div class="inputBox">
                    <span class="fas fa-check-circle"></span>
                    <select name="batch" required>
                        <option class="option-bg select-1" disabled selected>Course Name</option>
                        <option class="option-bg" value="Python">Advanced Python</option>
                        <option class="option-bg" value="MicAzure">Microsoft Azure</option>
                        <option class="option-bg" value="GameD">Game development</option>
                        <option class="option-bg" value="WebD">Web Development</option>
                        <option class="option-bg" value="IntPrep">Interview Preparation</option>
                        <option class="option-bg" value="DataSci">Data Science</option>
                    </select>

                </div>

                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number" name="number" required />
                </div>

                <input type="submit" value="Submit" class="btn" />
            </form>

        </div>
    </section>
    <!-- register now -->
    <?php
    }
    else{
    ?>
    <script>alert("Please Login to Register");</script>
    <?php
    }
    ?>

    <!-- contact section starts  -->

    <section class="contact" id="contact" data-aos="fade-left">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

            <form action="index.php#contact" method="POST">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name" name="username" required>
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email" name="email" required>
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number" name="number" required>
                </div>
                <input type="submit" value="submit" class="btn" name="submit">
            </form>

        </div>

    </section>

    <!-- contact section ends -->


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