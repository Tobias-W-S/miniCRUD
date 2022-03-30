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
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark opacity-75 fixed-top">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="gap"></div>
    <div class="mt-3 mb-3 menu bg-secondary rounded">
      <?php 
        $sql = "SELECT * FROM menu";
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
    <script src="js/main.js"></script>
    <script src="js/menu.js"></script>
  </body>
</html>
