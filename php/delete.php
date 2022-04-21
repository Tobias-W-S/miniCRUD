<?php 
    if(!isset($_SESSION['id'])){
        header("location: ../index.php");
    }
    include_once "../includes/connect.php";
    $sql = "DELETE FROM `menu` WHERE `menu`.`ID` = $_GET[id]";
    $stmt = $connect->prepare($sql);
    $stmt->execute(); 
    header("location: ../menu.php");
?>