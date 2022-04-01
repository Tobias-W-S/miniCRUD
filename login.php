<?php 
    if ($_POST['username'] == "user" and $_POST['password'] == "admin"){
        include_once 'menu.php';
        
    }
    else{
        echo "Geen toegang";
    }
?>