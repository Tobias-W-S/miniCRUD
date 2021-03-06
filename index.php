<?php 
  include_once "includes/session.php";
  include_once "includes/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
    <link href="css/background.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body id="banner">
    <?php include_once 'php/nav.php' ?>

    <div class="position-relative container-fluid vh-100 body-bg" style="padding: 0; z-index: 2;">
        <div style="padding: 0; width: 75%; top: 30%;" class="container-fluid position-absolute start-50 translate-middle-x start-0 bg-danger rounded px-3">
            <h1 class="text-center text-white">Cafetaria De Cafe</h1>
            <div class="row">
              <p class="col text-center text-white">
                Lekker veel eten, eten is goed voor je.
              </p>
              <p class="col text-center text-white">
                Als je meer wilt eten, kan je altijd meer eten halen
              </p>
            </div>
        </div>

    </div>
    <div class="position-relative container-fluid vh-100 bg1" id="bg1" style="padding: 0;">

      <div style="padding: 0; width: 75%; top: 30%;" class="container-fluid position-absolute start-50 translate-middle-x px-3">
        <div class="container">
          <div class="col bg-danger rounded mb-5 ps-3 pb-1">
            <a href="menu.php" class="text-white title-link">Check out our menu!</a>
            <div class="row mt-3 mb-3 container-fluid">
              <?php 
                $sql = "SELECT `Afbeelding` FROM `menu` LIMIT 3";

                $stmt = $connect->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                foreach($result as $value){
                  echo '<div class="col">';
                  echo '<img class="example-img" src="img/' . $value['Afbeelding'] . '">';
                  echo '</div>';      
                }
              ?>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="position-relative container-fluid vh-100 bg2" style="padding: 0;">
      <form method="post" action="login.php" id="loginForm" style="width: 70%; max-width: 600px; height: 60%; margin-top: 10%;" class="rounded container-fluid position-absolute start-50 translate-middle-x px-3 pt-3 bg-danger">
        <label style="width: 100%;" class="mb-2"><h3 class="text-white">SIGN HERE</h3></label>
        <label class="text-white pl-1" style="height: 30px; width: 100%;">Username</label>
        <input id="username" value="" name="username" type="text" class="mb-2 user-input" placeholder="Username..." style="width: 100%;">
        <label class="text-white pl-1" style="height: 30px; width: 100%;">Password</label>
        <input id="password" value="" name="password" type="text" class="mb-2 user-input" placeholder="Password..." style="width: 100%;">
        <input type="submit" value="login" id="submit" class="mt-5 mb-2 button-login" style="width: 100%;">
      </form>
    </div>

 

  <script src="js/main.js"></script>
  <script src="js/image.js"></script>
</body>
</html>