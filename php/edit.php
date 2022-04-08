<?php include_once "../includes/connect.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //$_GET['id']
        //select
        //input krijgt die values
        //Verander values
        //stuur values naar query
        $sql = "SELECT * FROM `menu` WHERE `ID` = $_GET[id]";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach($result as $value){
            echo '<div>';
            echo '<img style="height: 100px; width: 100px;" src="../img/' . $value['Afbeelding'] . '">';
            echo '<h1>' . $value['Titel'] . '</h1>';
            echo '<p><strong>€' . $value['Prijs'] . '</strong>  ' . $value['Beschrijving'] . '</p>';
            echo '</div>';
        }
    ?>
    <div class="bg-secondary position-relative bg1 admin-menu">
        <form method="post" id="editItem" action="adminexecute.php?id=<?php echo $_GET['id'] ?>">
            <input id="MenuTitle2" name="MenuTitle2" type="text" placeholder="Title" value="<?php echo $value['Titel'] ?>">
            <input id="MenuPrice2" name="MenuPrice2" type="text" placeholder="Price" value="<?php echo $value['Prijs'] ?>">
            <input id="MenuDesc2" name="MenuDesc2" type="text" placeholder="Description" value="<?php echo $value['Beschrijving'] ?>">
            <input id="MenuImage2" name="MenuImage2" type="text" placeholder="Image" value="<?php echo $value['Afbeelding'] ?>">
            <input type="submit" name="ADDITEM2" value="Submit">
        </form>
    </div>
</body>
</html>