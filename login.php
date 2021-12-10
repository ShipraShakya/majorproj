<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | CsChampion</title>
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

<?php
    
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "coaching";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if($conn){
        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

        $email_search = "select * from signup where email = '$email'";
            $query = mysqli_query($conn, $email_search);
    
            $email_count = mysqli_num_rows($query);
    
            if($email_count){
                $email_pass = mysqli_fetch_assoc($query);
    
                $db_pass = $email_pass['password'];
    
                $pass_decode = password_verify($password, $db_pass);
    
                if($pass_decode){ 
                   $_SESSION['login_user'] = $email;
                //    $_SESSION['email_user'] = $email;
                    header("Location:index.php");  
                                     
                }
                else{
                    ?>
                    <script>alert("Password Incorrect");</script>
                    <?php
                }
            }
            else{
                ?>
                <script>alert("invalid email");</script>
                <?php
            }
        }
    }
    else{
        ?>
        <script>alert("Please try again");</script>
        <?php
    }
    ?>

    <!-- header section starts  -->

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
            <!-- <div class="fas fa-shopping-cart" id="cart-btn"></div> -->
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
    </header>

    <!-- header section ends -->

  <!-- login now -->
  <section class="contact" id="book" data-aos="fade-left">
    <h1 class="heading"><span>Login</span></h1>
    <div class="row">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">


            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="Email" name="email" required />
            </div>

            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="password" placeholder="Enter your password" name="password" required />
            </div>

            <input  type="submit" name="login" value="Login" class="btn" />
            <h2 style="color:white;text-align:left;" class="login-sign">Don't have an account? <a href="signup.php" style="color:yellow;"> sign-up</a> here</h2>
        </form>
        
    </div>
</section>
<!-- login now ends -->

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
            <a href="index.html#home">home</a>
            <a href="index.html#about">about</a>
            <a href="index.html#menu">menu</a>
            <a href="index.html#review">review</a>
            <a href="index.html#contact">contact</a>

        </div>

        <div class="credit">created by <span>a web designer</span> | all rights reserved</div>

    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <!-- cdn script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
   
</body>

</html>