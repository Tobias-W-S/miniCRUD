<?php
    include_once "../includes/connect.php";
    var_dump($_POST['MenuTitle']);
    if(isset($_POST['ADDITEM'])){
        $sql = "INSERT INTO `menu` (Titel, Beschrijving, Afbeelding, Prijs)
        VALUES (:titel, :beschrijving, :afbeelding, :prijs)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":titel", $_POST['MenuTitle']);
        $stmt->bindParam(":beschrijving", $_POST['MenuDesc']);
        $stmt->bindParam(":afbeelding", $_POST['MenuImage']);
        $stmt->bindParam(":prijs", $_POST['MenuPrice']);
        $stmt->execute(); 
        header("location: ../menu.php");
    }

    elseif(isset($_POST['ADDITEM2'])){
        $sql = "UPDATE `menu` SET `Titel` = :titel, 
        `Beschrijving` = :beschrijving, 
        `Afbeelding` = :afbeelding, 
        `Prijs` = :prijs WHERE `menu`.`ID` = $_GET[id]";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":titel", $_POST['MenuTitle2']);
        $stmt->bindParam(":beschrijving", $_POST['MenuDesc2']);
        $stmt->bindParam(":afbeelding", $_POST['MenuImage2']);
        $stmt->bindParam(":prijs", $_POST['MenuPrice2']);
        $stmt->execute(); 
        header("location: ../menu.php");
    }

?> 