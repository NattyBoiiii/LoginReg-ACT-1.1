<?php 

session_start();

if(isset($_POST['submitBtn'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']); 

    if (isset($_SESSION['username'])) {
        $_SESSION['userCurrentlyUsed'] = "<br> <br>" . $_SESSION['username'] . " is already logged in. Wait for them to logout first.";
        
        header('Location: index.php');
        exit();
    }
    
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    header('Location: index.php');
    exit();
}

?>