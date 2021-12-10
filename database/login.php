<?php

// header('location:../login.html');

  $email = $_POST['email'];
  $password = $_POST['password'];

//   connecting database
if(!empty($email) || !empty($password) ){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "coaching";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if(mysqli_connect_error())
    {
        die("connection failed (". mysqli_connect_errno().")". mysqli_connect_error());
    }
    else{
        $s = "SELECT * from signup where email = '$email' && password = '$password' ";
        $result = mysqli_query($conn, $s);
        $num = mysqli_num_rows($result);

        if(num == 1)
        {
            header('location:../index.html');
            
        }
        else{        
            // header('location:../login.html');
            $INSERT = "INSERT Into login (email, password) values(?, ?)";
            //prepare statement
                $stmt=$conn->prepare($INSERT);
                $stmt->bind_param("ss",$email, $password);
                $stmt->execute();
                echo"New Record Inserted Sucessfully";
        }
    }    
    $stmt->close();
    $conn->close();
}
else{
    die();
}
?>