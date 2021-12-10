  <!-- php starts -->

    <?php
  $username = $_POST['username'];
  $email = $_POST['email'];
  $address = $_POST['address'];  
  $number = $_POST['number'];
  $batch = $_POST['batch'];

//   connecting database
if(!empty($username) || !empty($email) || !empty($address) || !empty($number) || !empty($batch) ){
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

        $sql = "INSERT INTO register (name, email, address, batch, number) values('$username','$email','$address','$batch','$number')";
        // $result = mysqli_query($conn, $sql);
        // echo"done";
        if(mysqli_query($conn, $sql)){
            header("Location:../index.php");  
        }
        else
        {
            ?>
            <script>alert("Try again");</script>
            <?php
        }

            
    }
}
?>
    <!-- php ends -->

