<?php
require "./../database/db.php";

//username, password, remember, signin
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signin'])) {
    $username = mysqli_real_escape_string( $conn, $_POST['username']);
    $password = mysqli_real_escape_string( $conn, $_POST['password']);

    // $answer1 = $_SESSION["answer"];
    $hash_password = sha1($password);
 
    $sql = "SELECT * FROM user WHERE username = '$username' limit 1";

    $result = $conn->query($sql);
    // --->hash
    $n=10; 
    function getName($n) { 
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $randomString = ''; 
      
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 
      
        return $randomString; 
    } 
    
session_start();


if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['password'])) {
            if($row['username']=='admin'){
                session_regenerate_id();
                $_SESSION['username'] = $username;
                
                if(isset($_POST['remember'])) {
                    setcookie("username", $randomString .sha1($username). $randomString, time() + 60 * 60 * 24 * 3, "/", null, false, true);
                    setcookie("password", $randomString .md5($password).$randomString, time() + 60 * 60 * 24 * 3, "/", null, false, true);
                }
                header("location: ./../home.php");
            }
            else{
                session_regenerate_id();
                $_SESSION['username'] = $username;
                
                if(isset($_POST['remember'])) {
                    setcookie("username", $randomString .sha1($username). $randomString, time() + 60 * 60 * 24 * 3, "/", null, false, true);
                    setcookie("password", $randomString .md5($password). $randomString, time() + 60 * 60 * 24 * 3, "/", null, false, true);
                }
                header("location: ./../home.php");
            }
        } 
        else{
            $_SESSION['error'] = 'Wrong username or password';
            header("location: ./../login.php");
        }
    } 
    else{
        $_SESSION['error'] = 'Wrong username or password';
        header("location: ./../login.php");
    }



    
   
}