<?php
echo'hello';
session_start();



$servername = "localhost";
$username = "root";
$password = '';
$dbname="sample";

$conn=mysqli_connect("localhost","root","","sample");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



    $email = $_POST['email'];
    $password = $_POST['password'];

  //  $query = "SELECT email,pass FROM loggin WHERE email='$email' AND pass='$password'";
    $query = " SELECT `username`, `pass` FROM `loggin` WHERE username='$email' AND pass='$password'";
    
    $result = mysqli_query($conn, $query);
  //  $rows = mysqli_num_rows($result);
   
    if(mysqli_num_rows($result)== 1){
        echo"hi";

        session_start();
        $_SESSION['email'] = $email;
        //$_SESSION['pass'] = $password;
        $_SESSION['log']=1234;
        header("location:map.php");
    }
    else
            echo " NOT LOGGED IN!";
        
       

$conn->close();

?>