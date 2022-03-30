<?php 
    if ($_POST['username'] == "user" and $_POST['password'] == "admin"){
        echo "Welkom";
    }
    else{
        echo "Geen toegang";
    }
?>