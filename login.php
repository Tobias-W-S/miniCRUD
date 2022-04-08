<?php 
    if(isset($_SESSION['username'])){
        include_once 'menu.php';
    }
    else if ($_POST['username'] == "user" and $_POST['password'] == "admin"){
        $_SESSION['username'] = "user";
        include_once 'menu.php';

    }
    else{
        echo "Geen toegang";
    }
?>