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
    <!-- php -->
    <?php
    
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "coaching";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if($conn){
    

    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']) ;
        $email = mysqli_real_escape_string($conn, $_POST['email']) ;
        $password = mysqli_real_escape_string($conn, $_POST['password']) ;  
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']) ;
    }


    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);


    $email_query = "select * from signup where email = '$email'";
    $query = mysqli_query($conn, $email_query);

    $email_count = mysqli_num_rows($query);

    if($email_count==0){
        if($password === $cpassword){
            $insert_query = "insert into signup (name, email, password, cpassword) values('$username', '$email', '$pass', '$cpass')"; 

            $iquery = mysqli_query($conn, $insert_query);
            
            if($iquery){
                header("Location:login.php");  
            }
            else{
                ?>
                <script>alert("Please Try Again");</script>
                <?php
            }
        }
        else{
            ?>
            <script>alert("Passwords are not matching");</script>
            <?php
        }
    }
    else{
        ?>
        <!-- <script>alert("Email already exist");</script> -->
        <?php
    }
}
else{
    ?>
    <script>alert("PLease try again");</script>
    <?php
}


?>
    

    <!-- php -->


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
            <div class="fas fa-bars" id="menu-btn"></div>
          
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
    </header>

    <!-- header section ends -->

    <!-- sign up section starts  -->

    <section class="contact" id="book" data-aos="fade-left">
        <h1 class="heading"> <span>sign</span> up</h1>
        <div class="row">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name" name="username" required >
                </div>

                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email" name="email" required >
                </div>

                <div class="inputBox">
                    <span class="fas fa-key"></span>
                    <input type="password" placeholder="password" name="password" required >
                </div>

                <div class="inputBox">
                    <span class="fas fa-key"></span>
                    <input type="password" placeholder="confirm password" name="cpassword" required >
                </div>
        
                <input type="submit" value="Submit" name = "submit" class="btn">
                <h2 style="color:white;text-align:left;" class="login-sign">Already have an account <a href="login.php" style="color:yellow;"> login</a> here</h2>
            </form>

        </div>
    </section>
   
    <!-- sign section ends -->
    
    
       
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

    <!-- cdn script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
   
</body>

</html>