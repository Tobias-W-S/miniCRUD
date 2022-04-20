<?php 

if ($_POST['username'] == "user" and $_POST['password'] == "admin")
{
    session_start();
    $_SESSION['username'] = "user";
    $_SESSION['id'] = session_id();
    header("location: menu.php");

}
else if($_SESSION['id'] == session_id())
{
    header("location: menu.php");

}
else
{
    echo "Geen toegang";
}
?>