
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
            <a href="../index.html#home">home</a>
            <a href="../index.html#about">about</a>
            <a href="../index.html#menu">menu</a>
            <a href="../index.html#review">review</a>
            <a href="../index.html#contact">contact</a>
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

  <?php
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];  
        $cpassword = $_POST['cpassword'];
//   connecting database
    if($password == $cpassword)
    {
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
        else
        {
                $SELECT = "SELECT email from signup where email = ? Limit 1";
                $INSERT = "INSERT Into signup (name, email, password, cpassword ) values(?, ?, ?, ?)";

                //prepare statement
                $stmt = $conn->prepare($SELECT);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->bind_result($email);
                $stmt->store_result();
                $rnum = $stmt->num_rows;

                if($rnum==0){
                    $stmt->close();

                    $stmt=$conn->prepare($INSERT);
                    $stmt->bind_param("ssss",$username,$email, $password, $cpassword);
                    $stmt->execute();

                    // echo"Record inserted successfully";
                    ?>
                    <script>
                        alert("Record inserted successfully");
                    </script>
                    <?php
                }
                else{

                    // echo"This email is already registered";
                    ?>
                    <script>
                        alert("email already registered");
                    </script>
                    <?php
                }
        }        

        $stmt->close();
        $conn->close();
        
    }
    else{
        // echo"Password does not matches";
        ?>
                    <script>
                        alert("password does not matches");
                    </script>
                    <?php
        die();
    }
?>

    <!-- php ends -->

    <!-- sign up php-->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>