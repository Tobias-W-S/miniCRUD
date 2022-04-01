<?php include_once "includes/connect.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/menu.css">
    <link href="css/main.css" rel="stylesheet">
  </head>
  <body style="background-color: rgb(255, 232, 232)">
    <?php include_once 'php/menuNav.php'; ?>
    <div class="gap"></div>
    <div class="mt-3 mb-3 menu bg-secondary rounded">
      <?php 
        if(!isset($_POST['filter'])){
          $sort = "`ID`";
        }
        else{
          $sort = $_POST['filter'];
        }
        $sql = "SELECT * FROM `menu` ORDER BY $sort";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach($result as $value){
          echo '<div>';
          echo '<img src="img/' . $value['Afbeelding'] . '">';
          echo '<h1>' . $value['Titel'] . '</h1>';
          echo '<p><strong>€' . $value['Prijs'] . '</strong>  ' . $value['Beschrijving'] . '</p>';
          echo '</div>';
        }
      ?>
    </div>
    <?php 
       
      if ($_POST['username'] == "user" and $_POST['password'] == "admin"){
        include_once 'php/admin.php';
      }
    ?>
    <script src="js/main.js"></script>
  </body>
</html>
