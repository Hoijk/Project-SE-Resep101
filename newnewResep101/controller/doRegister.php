<?php
require "./../database/db.php";
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn,$_POST['username']) ;
    $password = mysqli_real_escape_string($conn,$_POST['password']) ;
    // sha1
    // $hash_password = sha1($password);

    // bcrypt
    $hash_password = password_hash($password, PASSWORD_BCRYPT);

    if($username == 'admin'){
        $_SESSION['error'] = "Prohibited username";
        header ("location:../register.php");
    }

    else{
   $sql = "INSERT INTO user VALUES(null, '$username', '$hash_password')";
    $conn->query($sql);
   header("location: ./../login.php"); 
        
    }
    

    
}