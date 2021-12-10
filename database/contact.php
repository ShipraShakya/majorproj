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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/register.css">

    <!-- cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">
            <img src="images/logo.jpg" alt="">
        </a>

        <nav class="navbar">
            <a href="index.html#home">home</a>
            <a href="index.html#about">about</a>
            <a href="index.html#menu">menu</a>
            <a href="index.html#review">review</a>
            <a href="index.html#contact">contact</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>

        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
    </header>

    <!-- header section ends -->
<!-- php starts -->
<?php
  $username = $_POST['username'];
  $email = $_POST['email'];
  $number = $_POST['number'];


//   connecting database
if(!empty($username) || !empty($email) || !empty($number) ){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "coaching";

    //create conection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if(mysqli_connect_error())
    {
        die("connection failed (". mysqli_connect_errno().")". mysqli_connect_error());
    }
    else{
        $INSERT = "INSERT Into contact (name, email, phone) values(?, ?, ?)";

        //prepare statement
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssi",$username,$email, $number);
            $stmt->execute();
            header("location: ../index.php");
        }
        $stmt->close();
        $conn->close();
    }

else{
    ?>
    <section class="home" id="home">
        <div class="content">
            <p>All Fields are Required</p>
        </div>
    </section>
    <?php
    // echo"All Fields are Required";
    die();
}
?>
<!-- php ends -->

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