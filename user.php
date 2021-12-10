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
    <!-- <link rel="stylesheet" href="user.css"> -->

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
            <a href="logout.php"><input type="submit" value="Logout" class="login-btn"></a>
        </div>


        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
    </header>

    <?php
            }
            else{
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
            <a href="login.php"><input type="submit" value="Login" class="login-btn"></a>
        </div>


        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
    </header>
    <?php
            }
            ?>
    <section class="table_user">
            
<?php

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "coaching";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if($conn){
        if(isset($_SESSION['login_user'])){
            $email = $_SESSION['login_user'];
    //         $query = "SELECT lastName,firstName FROM Customer
    //    WHERE lastName LIKE "B%"";
            $query = "SELECT * FROM register WHERE email = '$email';";
            $result = mysqli_query($conn,$query);
            $result_check = mysqli_num_rows($result);

            if($result_check > 0){
                while($row = mysqli_fetch_assoc($result)){   
                
                ?>
                <table style="width:100%">
                <tr>
                    <th>Name</th>
                    <td><?php echo $row['name']; ?></td>
                </tr>
                <tr>
                    <th>Phone number</th>
                    <td><?php echo $row['number']; ?></td>
                </tr>
                <tr>
                   <th>Batch</th>
                   <td><?php echo $row['batch']; ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $row['email']; ?></td>
                 </tr>
                 <tr>
                    <th>Address</th>
                    <td><?php echo $row['address']; ?></td>
                 </tr>
                </table>
<?php 
                }

            }
            else{
            ?>
            <script>alert("data nor found result");</script>
            <?php
            }
        }
        else{
            ?>
            <script>alert("data nor found login_user");</script>
            <?php
        }

    }
else{
    ?>
        <script>alert("Please try again.");</script>
    <?php
}

?>

    </section>

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